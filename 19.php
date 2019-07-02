<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Реализовать класс от двух интерфейсов, содержащих одноименные функции
 */

interface iSquare
{
    /**
     * Ответ:
     *
     * до версии PHP 5.3.9 класс не мог реализовать два интерфейса с одноименными методами ибо это влекло неоднозначность!
     * В более новых версиях PHP это стало возможным при условии, при условии что одноименные методы в разных интерфейсах определены одинаково
     */

    public function size();
}

interface iRectangle
{
    public function size();
}

class Area implements iSquare, iRectangle
{
    public function size()
    {
        echo 'Implement size() method.';
    }
}

$area = new Area();
$area->size();