<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Организовать контроль типов данных параметров методов двумя способами.
 */
interface Area
{
    /**
     * Ответ:
     *
     * используем type hinting в самом интерфейсе
     */
    public function create(int $x, int $y);
}


class Square implements Area
{
    public function create($x, $y)
    {
        echo "Option #2: create square with args $x and $y";
    }
}

$area = new Square();
$area->create(12, 7);