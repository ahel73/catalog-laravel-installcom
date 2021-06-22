<?php
namespace App\Components;

class Functions 
{
    /**
     *  Получем выполняемый контроллер и метод
     */
    public static function getPathQuery()
    {
        $routeArray = request()->route()->getAction();
        $controllerAction = explode('@', class_basename($routeArray['controller']));
        $controllerAction[0] = explode('Controller', $controllerAction[0])[0];
        return array_combine(['controller', 'action'], $controllerAction);
    }

    /**
     *  JSON ответ с кодом, true успешно false нет. можно передавать данные и расшифровку ответа
     */
    public static function responseJson($mes = '',   $params = [], $cod = true)
    {
        http_response_code(200);
        return json_encode(array_merge(
            ['status' => $cod, 'mes' => $mes], 
            $params)
        );
    }

    /**
     *  Склонение чеслительного
     */
    public static function numeral($count, $num_21, $num_22, $num_20_ili_25)
    {
        if ($count >= 11 and $count <= 19) return $num_20_ili_25;
        $n = $count % 10;
        if ($n == 1) return $num_21;
        if ($n >= 2 and $n <= 4) return $num_22;
        return $num_20_ili_25;
    }
}
