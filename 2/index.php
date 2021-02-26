<?php
require_once 'Worker.php';
echo '<h1>Задание 1</h1><br>';
/* Задание 1
Сделайте класс Worker, в котором будут следующие private поля
- name (имя),
salary (зарплата).
Сделайте так, чтобы эти свойства заполнялись в методе
__construct при создании объекта (вот так: new Worker(имя, возраст) ).
Сделайте также public методы getName, getSalary.

Создайте объект этого класса 'Дима',
возраст 25, зарплата 1000.
Выведите на экран произведение его возраста и зарплаты. */

$workerMatthew = new Worker('Матвей', '90000');

echo 'Имя: ' . $workerMatthew->getName() . '<br>';
echo 'Заработная плата: ' . $workerMatthew->getSalary() . '<br>';