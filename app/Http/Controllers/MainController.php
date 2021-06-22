<?php

namespace App\Http\Controllers;

use App\Mail\Mailic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Components\Functions as F;

class MainController extends Controller
{
    /**
     *  Стартовая страница
     */
    public function index()
    {
        return view(
            'main.index',
            ['title' => 'Инсталлком']
        );
    }

    /**
     *  Cтраница турникетов
     */
    public function turnikety()
    {
        return view(
            'main.turnikety',
            [
                'title' => 'Турникеты',
                'classBody' => 'turniket',
            ]
        );
    }

    /**
     *  Cтраница шлагбаумы
     */
    public function shlagbaumy()
    {
        return view(
            'main.shlagbaumy',
            ['title' => 'Шлагбаумы']
        );
    }

    /**
     *  Cтраница скуд
     */
    public function skud()
    {
        return view(
            'main.skud', 
            ['title' => 'СКУД']
        );
    }

    /**
     *  Cтраница системы видеонаблюдения
     */
    public function video()
    {
        return view(
            'main.video',
            [
                'title' => 'Cистемы видеонаблюдения',
                'classBody' => 'vide0_page',
            ]
        );
    }

    /**
     *  Cтраница системы видеонаблюдения
     */
    public function katalog(Request $request, $typeProduct = '')
    {
        
        
        // 1 ЗАПРАШИВАЕМ ТОВАРЫ
        $dopQuery = "";
        $dopTable = "";
        $groupBy = "";
        $order = ' ORDER BY ' .  (!empty($request->order) ? $request->order : 'p.id');

        // Если есть поиск
        if (!empty($request->search)) {
            $search = " p.name LIKE '%" . $request->search. "%' AND ";
        } else {
            $search = '';
        }


        
        // КАТЕГОРИИ - если выбрана категория продукта то в запрос по товарам добавляем выборку только по данной категории
        if (!empty($typeProduct) && empty($request->category)) {
            $dopQuery = " AND pc.alias = '".$typeProduct. "' AND pcb.product_id = p.id AND pcb.category_id = pc.id";
            $dopTable = ", products_category as pc, products_category_bind as pcb";
        } else if (!empty($request->category)) {
            $dopQuery = " AND pcb.category_id IN (".implode(', ', $request->category). ")  AND pcb.product_id = p.id";
            $dopTable = ", products_category as pc, products_category_bind as pcb";
            $groupBy = " GROUP BY p.id";
        }

        // ПРОИЗВОДИТЕЛИ
        if (!empty($request->manufacturer)) {
            $dopQuery .= " AND p.manufacturert_id IN (". implode(', ', $request->manufacturer).")";
            if (empty($groupBy)) {
                $groupBy = " GROUP BY p.id";
            } else {
                $groupBy .= ", p.id";
            }
        }

        //  Диапазон цены
        $from = !empty($request->from) ? $request->from : 0;
        $to = !empty($request->to) ? $request->to : 1000000;


        // Общий запрос к каторому канкатенируется уточняющий если он есть
        $queryProductString =
        "SELECT p.*, pi.name as name_img, pm.name as manufactur 
        FROM products as p, products_imgs_name as pi, products_manufacturer as pm{$dopTable}
        WHERE ".$search." pi.product_id = p.id
        AND pm.id = p.manufacturert_id
        AND p.price > $from
        AND p.price <= $to";
        $queryProductString .= $dopQuery . '' . $groupBy . '' . $order;
        
        
        $products = DB::select($queryProductString);
        foreach ($products as $key => $value) {
            $products[$key]->dop_fields = DB::select('SELECT name, value  FROM products_fields_random WHERE product_id = ' . $value->id);
            $products[$key]->categores = DB::select('SELECT products_category.name  FROM products_category_bind, products_category WHERE products_category_bind.product_id = ' . $value->id . ' AND products_category_bind.category_id = products_category.id');
        }

        // 2 ПОЛУЧАЕМ КАТЕГОРИИ
        // Глобальные категории -1й уровень
        $globalType  = DB::select("SELECT * FROM products_category WHERE level = 1");

        // если фильтруем товар по типу глабальной категории то получаем её подкатегории
        $category = '';
        if (!empty($typeProduct)) {
            $queryCategoryString = "SELECT * FROM products_category as l1, products_category as l2 WHERE l1.alias = '{$typeProduct}' AND l2.parent = l1.id";
            $category = DB::select($queryCategoryString);
        } 
        

        // 3 Получаем производителей
        if (!empty($typeProduct)) {
            $queryManufacturerString =
            "SELECT products_manufacturer.* 
            FROM products, products_manufacturer, products_category_bind, products_category 
            WHERE products_manufacturer.id IN (
                                                SELECT products.manufacturert_id 
                                                FROM products, products_category, products_category_bind 
                                                WHERE products_category.alias = '{$typeProduct}' 
                                                AND products_category_bind.category_id = products_category.id 
                                                AND products_category_bind.product_id = products.id 
                                                ) 
            GROUP BY products_manufacturer.id";
        } else {
            $queryManufacturerString = "SELECT * FROM products_manufacturer";
        }
        // echo __FILE__ . ' ' . __LINE__ . '<br>';
        // echo $queryManufacturerString . '<br>';
        $manufacturer = DB::select($queryManufacturerString);
        // echo __FILE__.' '.__LINE__;
        // echo '<pre>';
        // print_r($products);
        // echo '</pre>';
        $data = [
                'title' => 'Каталог товаров',
                'classBody' => 'katalog',
                'products' => $products,
                'category' => $category,
                'manufacturer' => $manufacturer,
                'typeProduct' => $typeProduct,
                'globalType' => $globalType,
                'post' => $request->all(),
                "qs" => $queryProductString,
                'numeral' => F::numeral(count($products), 'товар', 'товара', 'товаров')
        ];
        // echo __FILE__.' '.__LINE__;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;        
        return view(
            'main.katalog',
            $data
        );
    }

    /**
     *  Отправка письма
     */
    public function action()
    {
        if (!empty($_POST['zakaz'])) {
            $zagolovok = 'Новый заказ с сайта installcom';
            $text = " <h1>Поступил новый заказ от " . $_POST['fio'] . "</h1>";
            $text .= "<p>Заказан комплект: '" . $_POST['zakaz'] . "'</p><h2>Контактные данные заказчика:</h2>
            <p>телефон: " . $_POST['telefon'] . "</p>
            <p>почта: " . $_POST['email'] . "</p>";
            $mes = 'данные успешно отправлены. В ближайшее время наш менеджер свяжется с Вами и обговорит детали заказа';
        } else if (!empty($_POST['feedback'])) {
            $zagolovok = 'Просьба обратной связи с сайта installcom';
            $text = "<p>Пользователь " . $_POST['fio'] . " просит что бы вы с ним связались по его почте " . $_POST['email'] . "</p>";
            $mes = 'спасибо! Запрос отправлен. Вам ответят.';
        } else {
            $zagolovok = 'Вас просят перезвонить с installcom';
            $text = " <h1>Пользователь " . $_POST['fio'] . " просит вас перезвонить ему</h1>";
            $text .= "<h2>Контактные данные заказчика:</h2>
        <p>телефон: " . $_POST['telefon'] . "</p>";
            $mes = 'Звонок заказан. Наш менеджер свяжется с вами в ближайшее время!';
        }
        $text .= !empty($_POST['comment']) ? '<h3>комментарий пользователя:</h3><p>' . $_POST['comment'] . '</p>' : '';

        Mail::to('info@installcom.ru')->send(new Mailic([
            'text' => $text,
            'zagolovok' => $zagolovok,
        ]));
        
        return 'Письмо отправлено. С вами свяжутся';
    }

    /**
     *  Отправка письма по индивиальному заказу
     */
    public function actionInd()
    {
        

        // echo __FILE__.' '.__LINE__;
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';

        $data = json_decode($_POST['data']);

        // echo __FILE__ . ' ' . __LINE__;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        if (is_null($data)) {
            exit('отправть письмо не удалось. вы прекрипили слишком большие файлы');
        }

        $zagolovok = $data[0]->name . ' ' . $data[0]->value;
        $text = '<ul>';
        for ($i = 0; $i < count($data); $i++) {
            $text .= '<li>' . $data[$i]->name . ': ' . $data[$i]->value . '</li>';
        }
        $text .= '</ul>';

        Mail::to('info@installcom.ru')->send(new Mailic([
            'text' => $text,
            'zagolovok' => $zagolovok,
        ]));

        return 'Письмо отправлено. С вами свяжутся';

        // foreach ($_FILES as $key => $value) {
        //     if ($value['size'] > 22456979) {
        //         exit('отправть письмо не удалось. вы прекрипили слишком большие файлы');
        //     }

        //     move_uploaded_file($_FILES[$key]['tmp_name'], 'foto/' . $_FILES[$key]['name']);
        // }
    }
}
