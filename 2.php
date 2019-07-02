<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Создать в деструкторе экземпляр нового класса.
 */

class BaseClass {

    /**
     * Ответ:
     *
     * в деструкторе технически возможно создать экземляр нового класса. Это не вызовет ошибки/исключения
     *
     */
    public function __destruct()
    {
        new Dog();

        echo 'This ' . __FUNCTION__;
    }
}

class Dog {
    public function __construct()
    {
        echo "Create new Dog()<br>";
    }
}

new BaseClass();