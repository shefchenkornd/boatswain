<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * В объявлении константы задать значение из другой константы того же класса.
 */

class BaseClass {

    /**
     * начиная с версии php 5.6 возможно создавать константные выражения:
     * в объявлении констант можно определить скалярное выражение, включающее числовые и строковые литералы и/или константы
     */

    const PI = 3.14;
    const MATH = self::PI * 2;
    const SENTENCE = 'Значение константы PI - '.self::PI;

    public function __construct()
    {
       echo self::PI . '<br>';
       echo self::MATH . '<br>';
       echo self::SENTENCE;
    }
}

new BaseClass();