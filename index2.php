<?php
/**
 * @param сторка $name(Имя)  
 * @return строка(Имя) + Привет!
 */
function helloName($name)
{
    return "$name Привет!";
}
$name = 'Вася2';
echo helloName($name);
echo "<br>";

/**
 * @param значения class Person(Фамилия, имя, город, возраст, дети)
 * @return изменения введеные в другом экземпляре
 */
class Person
{
    public $name = "Иван";
    public $lastname = "Петров";
    public $city = "Москва";
    private $age = "32года";
    private $children = "2 детей";

    public function setChildren($newChildren)
    {
        $this->children = $newChildren;
    }

    public function getChildren($newChildren)
    {
        $this->children = $newChildren;
    }

    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
    public function setCity($newCity)
    {
        $this->city = $newCity;
    }
}

$person = new Person();
$person->setAge("33");
$person->setCity("Санкт-Петербург");
var_dump ($person);
