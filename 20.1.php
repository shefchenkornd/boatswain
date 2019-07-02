<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Организовать контроль типов данных параметров методов двумя способами.
 */
class Square
{
    /**
     * Ответ:
     *
     * используем type hinting в самом методе класса
     */
    public function create(int $x, int $y)
    {
        echo "Option #1: create square with args $x and $y";
    }
}

$area = new Square();
$area->create(12, 7);