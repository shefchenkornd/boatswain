<?php
echo "<a href='/'>назад &#8617; </a><br><br><br>";

/**
 * Задание:
 * Задать в классе метод, вызывающий другие методы этого же класса, поведение которых определено в классе-потомке.
 */

abstract class AbstractClass
{

    public function printOut() {
        $this->writeToFile();
        $this->writeToAwsS3();
    }

    /**
     * мы сделали методы абстрактными, поведение этих методов будет определено в классе-потомке
     */
    abstract public function writeToFile();
    abstract public function writeToAwsS3();
}

class NewClass extends AbstractClass
{
    /**
     * Определяем поведение методов в классе-потомке
     */
    public function writeToFile() {
        echo 'пишем в файл <br>';
    }

    public function writeToAwsS3() {
        echo 'пишем на S3 <br>';
    }
}

$class = new NewClass();
$class->printOut();