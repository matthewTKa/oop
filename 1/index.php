<?php
require_once('Worker.php');
echo '<h1>Задание 1</h1>';
/* Задание 1 
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи */
$ivan = new Worker();
$vasya = new Worker();

$ivan->name = 'Иван';
$ivan->age = 30;
$ivan->salary = 55000;

$vasya->name = 'Василий';
$vasya->age = 22;
$vasya->salary = 120000;

$salarySumm = $vasya->salary + $ivan->salary;
$ageSumm = $vasya->age + $ivan->age;

echo 'Сумма зарплат Ивана и Василия = ' . $salarySumm . '<br>';
echo 'Сумма возрастов Ивана и Василия = ' . $ageSumm . '<br>';

echo '<h1>Задание 2</h1>';
/* Задание 2
Cделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата)
и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи. */
require_once('Worker_private.php');

$kirill = new Worker_pr();
$kesha = new Worker_pr();

$kirill->setName('Иван');
$kirill->setAge(16);
$kirill->setSalary(6000);


$kesha->setName('Василий');
$kesha->setAge(32);
$kesha->setSalary(40000);

$privateSalarySumm = $kirill->getSalary() + $kesha->getSalary();
$privateAgeSumm = $kirill->getAge() + $kesha->getAge();

echo 'Сумма зарплат Кирилла и Кеши = ' . $privateSalarySumm . '<br>';
echo 'Сумма возрастов Кирилла и Кеши = ' . $privateAgeSumm . '<br>';

echo '<h1>Задание 3</h1>';
/* Задание 3
Дополните класс Worker из предыдущей задачи private методом checkAge,
который будет проверять возраст на корректность (от 1 до 100 лет).
Этот метод должен использовать метод setAge перед установкой нового возраста
(если возраст не корректный - он не должен меняться).  TEST*/

$kirill->setAge(-20);
echo 'Ошибочная установка возраста(-20): ' . $kirill->getAge() . '<br>';


$kirill->setAge(20);
echo 'Безошибочная установка возраста(20): ' . $kirill->getAge() . '<br>';