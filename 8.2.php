<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Определить статический метод класса с доступом к нестатическим свойствам класса.
 */

class BaseClass {

    /**
     * Ответ:
     *
     * мы создаем новый объект внутри статического метода, и получаем тем самым доступ к не-статическим свойствам
     */

    public $var = 'non-static variable';

    public function nonStaticMethod() {
        return $this->var;
    }

    public static function staticMethod() {
        echo "This is static method<br>";

        echo (new self())->nonStaticMethod();
    }
}

BaseClass::staticMethod();