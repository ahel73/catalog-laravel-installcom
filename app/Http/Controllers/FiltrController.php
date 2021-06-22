<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Functions as F;
use Illuminate\Support\Facades\DB;

class FiltrController extends Controller
{
    /**
     *  Выдача данных в зависимости от типа товара
     */
    public function getDataType($typeProduct)
    {
        try {
            if (empty($typeProduct)) {
                throw new \Exception("не выбрана категория товара", 1);
            }
            $subCategory = DB::select("SELECT * FROM products_category as l1, products_category as l2 WHERE l1.alias = '{$typeProduct}' AND l2.parent = l1.id");
            $subCategoryString = '';
            foreach ($subCategory as $item) {
                $subCategoryString .= "
                    <label for='ctgr_{$item->id}'>
                        <input type='checkbox' name='manufacturer[]' value='{$item->id}' id='ctgr_{$item->id}'>
                        <span>{$item->name}</span>
                    </label>";
                echo __FILE__ . ' ' . __LINE__;
                echo '<pre>';
                print_r($item);
                echo '</pre>';
            }
            echo __FILE__ . ' ' . __LINE__ . '<br>';
            echo $subCategoryString . '<br>';
            exit;
            return F::responseJson();
        } catch (\Exception $exception) {
            return F::responseJson($exception->getMessage(), [], false);
        }
        
    }
}
