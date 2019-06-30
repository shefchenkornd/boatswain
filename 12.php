<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Создать класс, объекты которого могут создавать только потомки.
 */

abstract class AbstractClass
{
    /* Данный метод должен быть определён в дочернем классе */
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
}

class Child extends AbstractClass {
    public function getValue() {
        echo 'получаем значение';
    }

    public function prefixValue($prefix) {
        echo 'делаем что-то с префиксом';
    }
}

$child = new Child();
$child->getValue();