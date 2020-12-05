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

function date_count($end_date) {
    $secs_in_hour = 3600;
    $cur_ts = time();
    $end_ts = strtotime($end_date);
    $ts_diff = $end_ts - $cur_ts;
    $hours_until_end = floor($ts_diff / $secs_in_hour);
    return $hours_until_end;
};
?>
