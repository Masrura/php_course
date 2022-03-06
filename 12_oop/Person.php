<?php
class Person
{
    public string $name;
    public string $surname;
    private ?int $age;
    public static $counter;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = null;
        self::$counter++;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
    public static function getCounter()
    {
        return self::$counter;
    }
}
