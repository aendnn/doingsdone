<?php
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
};

function esc($str) {
    $text = htmlspecialchars($str);
    return $text;
};

function count_tasks($tasks_list, $title_project) {
    $tasks_amount = 0;
    foreach ($tasks_list as $task) {
        if ($title_project === $task["category"]) {
            $tasks_amount ++;
        }
    }
    return $tasks_amount;
};
?>
