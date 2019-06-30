<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Создать класс с несколькими конструкторами, вызывать конструкторы в зависимости от переданных параметров.
 */

class BaseClass {

    /**
     * Вариант №1
     * создать напрямую несколько конструкторов нам не позволит идеология языка PHP.
     * Но мы можем через конструктор принимать аргументы и в зависимости от количества аргументов выполнять то или иное условие
     */

    public function __construct()
    {
        $args = func_get_args();

        switch (func_num_args()) {
            case 1:
                $this->__constructByOne($args[0]);
                break;
            case 2:
                $this->__constructByMultipleVars($args[0], $args[1]);
                break;
            default:
                throw new Exception('Invalid number of arguments');
        }
    }

    public function __constructByOne($var)
    {
        echo "конструктор #1 был создан на основе аргумента: $var";
    }

    public function __constructByMultipleVars($one, $two)
    {
        echo "конструктор #2 был создан на основе нескольких аргументов: $one и $two";
    }
}

new BaseClass(2, 'two');