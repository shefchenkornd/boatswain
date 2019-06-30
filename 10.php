<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Осуществить перегрузку методов.
 */

class BaseClass {

    /**
     * осуществить перегрузку методов возможно использую публичные "магические" методы __call() и __callStatic()
     * когда в контексте экземпляра класса вызывается методы, которые не были объявлены в этом классе или не видны в текущей области видимости
     */

    private function testMethod()
    {
        echo __FUNCTION__;
    }


    public function __call($name, $arguments)
    {
        echo "Вы вызвали динамический метод $name c параметрами: ";
        var_dump($arguments, '<br>');
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Вы вызвали динамический статический метод $name c параметрами: ";
        var_dump($arguments, '<br>');
    }
}

$object = new BaseClass();
$object->notExistsMethod(1,33,3,'343');
$object->testMethod();


BaseClass::getInstance();