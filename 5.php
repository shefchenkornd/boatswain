<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * В объявлении константы задать значение из свойства объекта другого класса.
 */

class BaseClass {

    /**
     * невозможно
     * потому что значение константы должно быть неизменяемым выражением, а не (к примеру) переменной, свойством или вызовом функции.
     */

    const PI = 3.14;
//    const MATH = OtherClass::$var;

    public function __construct()
    {
       echo self::PI . '<br>';
//       echo self::MATH . '<br>';
    }
}

class OtherClass {
    public static $var = 123;
}


new BaseClass();