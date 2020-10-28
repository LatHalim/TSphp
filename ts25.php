<?php
// Cпособ записи:
$array = [];
$array = array();

// Oдномерный
$array[0] = ['значение'];
$array = [
'значение',
25,
29,854
];

// Многомерный
$array[0][0] = ['значение'];

// Именованный (ассоциативный)
$array['name'] = 'Коля';
$array = [
'name' => 'Коля',
'age' => 18,
'city' => 'Москва',
];

// Добавление элемента в массив
$array = [];
$array[] = 5;
array_push($array, 6);
array_push($array, 7, 8, 9);

// Удаление элемент из массива
unset($arr[5]); 

// Получаем доступ к ключам многомерного ассоциативного массива
$A["Ivanov"]["name"]="Иванов И.И.";
echo $A["Ivanov"]["name"];

// Преобразование строк в массив
$string = "PHP, HTML, CSS";
$arr = explode(", ", $string);

// Проверка типа переменной is_array
function myGetType($var)
    {
        if (is_array($var)) return "array";
    }

// Создание копии массива
$a = array(1,2);
$b = $a;

// создание копии файла
$file = 'file_1.txt';
$new_file = 'file_2.txt';
 
if (copy($file, $newfile)) {
    echo "Файл успешно скопирован!";
}else{
    echo "Файл не удалось скопировать!";
}  
// Пустые массивы и false
$x = array();
empty($x) // true
is_null($x) // false
isset($x) // true
 $x == 1 // false
 $x == 0 // false
 $x == NULL // true
 $x === NULL; // false

// Создание копии массива
$a = array(1,2);
$b = $a;

// array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

// array_merge — Сливает один или большее количество массивов
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);

// array_multisort — Сортирует несколько массивов или многомерные массивы
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

// array_pop — Извлекает последний элемент массива
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);

// array_push — Добавляет один или несколько элементов в конец массива
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");

// array_walk — Применяет заданную пользователем функцию к каждому элементу массива
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');

array_walk($fruits, 'test_print');

// Сортировка
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

// Пример ратоты For
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) break;
    echo $x;
    }
    for ($x = 0; $x < 10; $x++) {
    if ($x == 4) continue;
    echo $x;
    }
// Пример работы while
$x = 0;
while ($x++ < 10) echo $x;

// Пример работы do-while
    do {
        echo $x;
        } while ($x++ < 10);

// Пример работы Foreach
$names["Иванов"] = "Андрей";
$names["Петров"] = "Борис";
$names["Волков"] = "Сергей";
$names["Макаров"] = "Федор";

foreach ($names as $key => $value) 
{
echo $value . ' ' . $key . '<br>';
}

foreach ($names as $name):
echo $name;
endforeach;

foreach ($names as &$name):
$name = 'уважаемый ' . $name;
endforeach;

// Пример работы с условиями: if, else, elseif
if ($a > $b) {
    echo "a больше, чем b";
    } elseif ($a == $b) {
    echo "a равен b";
    } else {
    echo "a меньше, чем b";
    }
    
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
