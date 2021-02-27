<?php

include $_SERVER['DOCUMENT_ROOT'] . '/3/User.php';
include $_SERVER['DOCUMENT_ROOT'] . '/3/Worker.php';
include $_SERVER['DOCUMENT_ROOT'] . '/3/Student.php';
include $_SERVER['DOCUMENT_ROOT'] . '/3/Driver.php';

echo '<h1>Задание 1</h1><br>';
/*
Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
public методы setName, getName, setAge, getAge.

Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
а также методы public getSalary и setSalary.

Создайте объект этого класса 'Иван', возраст 25, зарплата 1000.
Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000.
Найдите сумму зарплата Ивана и Васи.

Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия,
курс, а также геттеры и сеттеры для них.
*/

$ivan = new Worker_3();
$ivan->setName('Ваня');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya = new Worker_3();
$vasya->setName('Вася');
$vasya->setAge(26);
$vasya->setSalary(2000);

$salarySumm = $ivan->getSalary() + $vasya->getSalary();

echo 'Сумма зарплат Ивана и Васи = ' . $salarySumm . 'р<br>';

//Student
$matthew = new Student();
$matthew->setName('Матвей');
$matthew->setAge(19);
$matthew->setScholarship(560);
$matthew->setCourse(4);

echo 'Студент ' . $matthew->getName() . ' обучается на ' . $matthew->getCourse() . '-м курсе. Стипендия: ' . $matthew->getScholarship() . ' рублей.<br>';

/*
Сделайте класс Driver (Водитель),
который будет наследоваться от класса Worker из предыдущей задачи.
Этот метод должен вносить следующие private поля: водительский стаж,
категория вождения (A, B, C)
*/

$alex = new Driver();
$alex->setName('Александр');
$alex->setAge(40);
$alex->setSalary(30000);
$alex->setExperience(15);
$alex->setCategory('B');

echo 'Водитель ' . $alex->getName() . ' в возрасте ' . $alex->getAge() . ' лет, имеющий категорию: "' . $alex->getCategory() . '" с опытом вождения более ' . $alex->getExperience() . ' лет, врезался в столб';