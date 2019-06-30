<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Создать класс с protected-конструктором, создать объект такого класса.
 */

class BaseClass {

    /**
     * т.к. создать экземпляр класса извне запрещено, то необходимо воспользоваться публичным статическим методом,
     * с помощью которого мы создаём экземпляр класса, не нарушая область видимости protected конструктора
     */
    public static $instance;

    protected function __construct()
    {
    }

    public static function staticMethod() {
        if (!self::$instance) {
            self::$instance = (new self());
        }

        return self::$instance;
    }
}

var_dump( BaseClass::staticMethod() );
var_dump( BaseClass::staticMethod() );
var_dump( BaseClass::staticMethod() );
var_dump( BaseClass::staticMethod() );