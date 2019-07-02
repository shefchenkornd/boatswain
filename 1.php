<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Передать параметры в деструктор.
 */

class BaseClass {

    /**
     * Ответ:
     *
     * невозможно!
     * деструктор не может принимать параметры согласно официальной документации
     *
     */
    public function __destruct()
    {
        echo 'This ' . __FUNCTION__;
    }
}

new BaseClass();