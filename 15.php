<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Запретить наследование класса.
 */

final class BaseClass
{
    /**
     * Ответ:
     *
     * перед классом устанавливаем ключевое слово "final" - тем самым запрещаем наследование данного класса
     */
}

class Master extends BaseClass{

}

new Master();