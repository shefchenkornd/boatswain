<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Запретить переопределение полей и методов класса.
 */

class BaseClass
{
    private $var = 'variable';

    /**
     * Ответ:
     *
     * Для методов устанавливаем ключевое слово "final" - тем самым запрещаем переопределение в дочерних класса
     * для свойств класса нельзя использовать ключевое слово "final"
     * Для свойств класса мы ставим private область видимости и дополнительно можем использовать магический метод __set()
     */
    public final function methodTest()
    {
        echo 'Этот метод нельзя переопределить в дочерних классах, тк. он имеет ключевое слово "final"';
    }

    public function __set($name, $value)
    {
        throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
    }
}

class NewClass extends BaseClass
{
    public function __construct()
    {
        $this->var = 'new value';
    }
}

$class = new NewClass();