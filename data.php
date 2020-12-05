<?php
date_default_timezone_set("Europe/Moscow");

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$projects = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [
    [
        "task" => "Собеседование в IT компании",
        "date" => "01.12.2018",
        "category" => "Работа",
        "is_done" => false
    ],
    [
        "task" => "Выполнить тестовое задание",
        "date" => "25.12.2018",
        "category" => "Работа",
        "is_done" => false
    ],
    [
        "task" => "Сделать задание первого раздела",
        "date" => "21.12.2018",
        "category" => "Учеба",
        "is_done" => true
    ],
    [
        "task" => "Встреча с другом",
        "date" => "22.12.2018",
        "category" => "Входящие",
        "is_done" => false
    ],
    [
        "task" => "Купить корм для кота",
        "date" => "",
        "category" => "Домашние дела",
        "is_done" => false
    ],
    [
        "task" => "Заказать пиццу",
        "date" => "",
        "category" => "Домашние дела",
        "is_done" => false
    ],
];
?>
