<?php
require_once("data.php");
require_once("functions.php");

$page_content = include_template("index.php", [
    "tasks" => $tasks,
    "show_complete_tasks" => $show_complete_tasks
]);

$layout_content = include_template("layout.php", [
    "content" => $page_content,
    "title" => "Дела в порядке",
    "projects" => $projects,
    "tasks" => $tasks
]);
print($layout_content);
?>
