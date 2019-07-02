<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Создать класс с несколькими конструкторами, вызывать конструкторы в зависимости от переданных параметров.
 */

class BaseClass
{

    /**
     * Ответ:
     *
     * Вариант №2
     * создать напрямую несколько конструкторов нам не позволит идеология языка PHP.
     * Но мы можем воспользоваться статическими методами, а сам конструктор сделать private|protected, чтобы нельзя было им воспользоваться!
     */

    private function __construct() {}

    public static function factoryByOne()
    {
        echo 'Инициализация класса через метод '. __METHOD__ .'<br>';
    }

    public static function factoryByOther()
    {
        echo 'Инициализация класса через метод '. __METHOD__.'<br>';
    }

}

BaseClass::factoryByOne(1);
BaseClass::factoryByOther(1, 2);