<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Functions as F;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function formaDobavlenie($nameTovar = '', $product = null)
    {
        $data = [];
        if(!is_null($product)) $data['product'] = $product;
        $data['path'] = F::getPathQuery();
        $data['path']['action'] = $nameTovar;
        $data['general_type'] = DB::select("SELECT * FROM products_category WHERE alias = '" . $nameTovar . "'")[0];
        $data['lvl1'] = $data['general_type']->id;
        $data['lvl2'] = DB::select('SELECT * FROM products_category WHERE parent = ' . $data['lvl1'] );
        $data['manufacturer'] = DB::select('SELECT * FROM `products_manufacturer`');
        // echo __FILE__.' '.__LINE__;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        

        return view(
            'admin-product.add-product',
            $data
        );
    }

    public function save(){

        $metkaTime = $_SERVER['REQUEST_TIME'];
        $fieldsRandom = [];
        
        foreach ($_POST as $key => $value) {
            if(is_null($value) || $value === '') $flagEmpty = true;
            if (substr_count($key, 'fr_') > 0) {
                $index = ((int) explode('_', $key)[1]) - 1;
                if (substr_count($key, 'name') > 0) {
                    $fieldsRandom[$index]['name'] = $value;
                } else {
                    $fieldsRandom[$index]['value'] = $value;
                }
                
            }
        }
        
        
        if(empty($_FILES['img']['type'])) {
            return F::responseJson('заполнены не все данные или стоимость указана неправильно', [], false);
        }
        $photo = $_FILES['img'];
        if ($photo['error'] != 0) {
            return F::responseJson('ошибка передачи изображения', [], false);
        }
        if ($photo['size'] > 5242880) {
            return F::responseJson('размер изображения превышает 5Мб', [], false);
        }
        if (!in_array(exif_imagetype($photo['tmp_name']), [2, 3])) {
            return F::responseJson('Формат изображения должен быть либо JPEG либо PNG', [], false);
        }
        
        DB::beginTransaction();

        // дабавляем товар
        if (!DB::insert('INSERT INTO products (`name`, `price`, `manufacturert_id`, `added_admin_id`, `time_metka`) VALUES (?, ?, ?, ?, ?)', [$_POST['name'], $_POST['price'], $_POST['manufacturer'], auth()->user()->id, $metkaTime])){
            return F::responseJson('Неудачное добавление товара, попробуйте позже или обратитесь к разработчику', [], false);
        }

        $newProduct = DB::select('SELECT * FROM products WHERE time_metka = :metkaTime', ['metkaTime' => $metkaTime]);
        $idProduct = $newProduct[0]->id;

        // Перемещаем фото и добвляем в базу связку продукта с фото
        $nameFile = $idProduct .'_' . $metkaTime . '_'.$photo['name'];
        if (!move_uploaded_file($photo['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/product_imgs/' . $nameFile)){
            return F::responseJson('Неудачное добавление товара, попробуйте позже или обратитесь к разработчику', [], false);
        }

        if (!DB::insert('INSERT INTO products_imgs_name (`product_id`, `name`) VALUES (?,?)', [$idProduct, $nameFile])) {
            return F::responseJson('Неудачное добавление товара, попробуйте позже или обратитесь к разработчику', [], false);
        }

        // Делаем связку продукта с категориями
        if (
            !DB::insert('INSERT INTO products_category_bind (`product_id`, `category_id`, `level_category`) VALUES (?,?,?)', [$idProduct, $_POST['lvl'], 1])
            ||
            !DB::insert('INSERT INTO products_category_bind (`product_id`, `category_id`, `level_category`) VALUES (?,?,?)', [$idProduct, $_POST['lvl2'], 2])
        ) {
            return F::responseJson('Неудачное добавление товара, попробуйте позже или обратитесь к разработчику', [], false);
        }

        // Добовляем произвольные поля
        foreach ($fieldsRandom as $key => $value) {
            if (!DB::insert('INSERT INTO products_fields_random (`product_id`, `name`, `value`) VALUES (?,?,?)', [$idProduct, $value['name'], $value['value']])) {
                return F::responseJson('Неудачное добавление товара, попробуйте позже или обратитесь к разработчику', [], false);
            }
        }

        DB::commit();
        return F::responseJson('Товар успешно добавлен');

        
        
    }

    /**
     *  Вывод товар
     */
    public function list()
    {
        $data = [];
        $data['path'] = F::getPathQuery();
        $data['products'] = DB::select('SELECT * FROM `products` ORDER BY id DESC');
        // echo __FILE__.' '.__LINE__;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        
        return view(
            'admin-product.list',
            $data
        );
    }

    /**
     *  Удаляем товар
     */
    public function remove($id)
    {
        $tables = [
            ['products', 'id'],
            ['products_category_bind', 'product_id'],
            ['products_fields_random', 'product_id'],
            ['products_imgs_name', 'product_id'],
        ];
        
        DB::beginTransaction();
        foreach ($tables as $t) {
            DB::delete('DELETE FROM ' . $t[0] . ' WHERE ' . $t[1] . ' = ' . $id);
        }
        DB::commit();
        return redirect()->back();
    }

    /**
     *  Создание формы обновления товара
     */
    public function updataForm($id)
    {
        $product = DB::select('SELECT p.id, p.name, p.price, p.manufacturert_id FROM products as p WHERE p.id = ' . $id)[0];

        $category = DB::select('SELECT pc.id, pc.alias, pc.level FROM products_category_bind as pcb, products_category as pc  WHERE pcb.product_id = ' . $id . ' AND pc.id = pcb.category_id');
        foreach ($category as $value) {
            $product->category[] = $value->id;
            if ($value->level == 1) $product->nameTovar = $value->alias;
        }

        $product->fields_random = DB::select('SELECT * FROM products_fields_random as pfr WHERE pfr.product_id = ' . $id );

        return $this->formaDobavlenie($product->nameTovar, $product);
    }

    /**
     *  Обновление товара
     */
    public function updata()
    {
        $metkaTime = $_SERVER['REQUEST_TIME'];
        $fieldsRandom = [];
        $ind = 0;

        foreach ($_POST as $key => $value) {
            if (substr_count($key, 'fr_') > 0) {
                $arrayKey = explode('_', $key);
                $fieldsRandom[$ind]['id'] = ((int) $arrayKey[1]);
                $fieldsRandom[$ind]['name'] = $arrayKey[2];
                $fieldsRandom[$ind]['value'] = $value;
                
                $ind++;
            }
        }

        if (!empty($_FILES['img']['type'])) {
            $photo = $_FILES['img'];
            if ($photo['error'] != 0) {
                return F::responseJson('ошибка передачи изображения', [], false);
            }
            if ($photo['size'] > 5242880) {
                return F::responseJson('размер изображения превышает 5Мб', [], false);
            }
            if (!in_array(exif_imagetype($photo['tmp_name']), [2, 3])) {
                return F::responseJson('Формат изображения должен быть либо JPEG либо PNG', [], false);
            }            
        }

        DB::beginTransaction();
        // Обновляем товар
        DB::update('UPDATE products SET name = ?, price = ?, manufacturert_id = ?, modified_admin_id = ? WHERE id = ?', [$_POST['name'], $_POST['price'], $_POST['manufacturer'], auth()->user()->id, $_POST['pid'] ]);

        // Перемещаем фото и добвляем в базу связку продукта с фото
        if (!empty($_FILES['img']['type'])) {
            $nameFile = $_POST['pid'] . '_' . $metkaTime . '_' . $photo['name'];
            if (!move_uploaded_file($photo['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/product_imgs/' . $nameFile)) {
                return F::responseJson('1Неудачное добавление товара, попробуйте позже или обратитесь к разработчику', [], false);
            }

            DB::insert('INSERT INTO products_imgs_name (`product_id`, `name`) VALUES (?,?)', [$_POST['pid'], $nameFile]);
        }
        

        // Делаем связку продукта с категориями
        !DB::update('UPDATE products_category_bind SET category_id = ? WHERE product_id = ? AND level_category = 2', [$_POST['lvl2'], $_POST['pid']]);

        // Добовляем произвольные поля
        foreach ($fieldsRandom as $key => $value) {
            DB::update('UPDATE products_fields_random SET '. $value['name'].' = ? WHERE id = ? ', [$value['value'], $value['id']]);
        }
        DB::commit();
        return F::responseJson('Товар успешно добавлен');
    }

    /**
     *  Поисковый запрос возвращает количество найденных товаров
     */
    public function search(Request $request)
    {
        $post = $request->all();

        $typeProduct = explode('/', $post['type']);
        if (count($typeProduct) > 1) {
            $typeProduct = $typeProduct[1];
        } else {
            $typeProduct = null;
        }
        
        $dopQuery = "";
        $dopTable = "";
        $groupBy = "";

        

        // КАТЕГОРИИ - если выбрана категория продукта то в запрос по товарам добавляем выборку только по данной категории
        if (!empty($typeProduct) && empty($request->category)) {
            $dopQuery = " AND pc.alias = '" . $typeProduct . "' AND pcb.product_id = p.id AND pcb.category_id = pc.id";
            $dopTable = ", products_category as pc, products_category_bind as pcb";
        } else if (!empty($request->category)) {
            $dopQuery = " AND pcb.category_id IN (" . implode(', ', $request->category) . ")  AND pcb.product_id = p.id";
            $dopTable = ", products_category as pc, products_category_bind as pcb";
            $groupBy = " GROUP BY p.id";
        }

        // ПРОИЗВОДИТЕЛИ
        if (!empty($request->manufacturer)) {
            $dopQuery .= " AND p.manufacturert_id IN (" . implode(', ', $request->manufacturer) . ")";
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
        "SELECT p.*, pm.name as manufactur 
        FROM products as p, products_manufacturer as pm{$dopTable}
        WHERE p.name LIKE '%".$post['string']."%'
        AND pm.id = p.manufacturert_id
        AND p.price > $from
        AND p.price <= $to
        ";
        $queryProductString .= $dopQuery . '' . $groupBy;

        // echo __FILE__ . ' ' . __LINE__ . '<br>';
        // echo $queryProductString . '<br>';

        $products = DB::select($queryProductString);
        return F::responseJson('', ['count' => (string) count($products)]);
        
    }
}
