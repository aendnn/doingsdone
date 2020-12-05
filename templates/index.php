<h2 class="content__main-heading">Список задач</h2>

<form class="search-form" action="index.php" method="post">
    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

    <input class="search-form__submit" type="submit" name="" value="Искать">
</form>

<div class="tasks-controls">
    <nav class="tasks-switch">
        <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
        <a href="/" class="tasks-switch__item">Повестка дня</a>
        <a href="/" class="tasks-switch__item">Завтра</a>
        <a href="/" class="tasks-switch__item">Просроченные</a>
    </nav>

    <label class="checkbox">
        <?php
        if ($show_complete_tasks == 1): ?>
            <input class="checkbox__input visually-hidden show_completed" type="checkbox" checked>
        <?php endif; ?>
        <input class="checkbox__input visually-hidden show_completed" type="checkbox">
        <span class="checkbox__text">Показывать выполненные</span>
    </label>
</div>

<table class="tasks">
    <?php foreach($tasks as $task): ?>
        <?php if($task["is_done"] === true && $show_complete_tasks === 0): ?>
        <?php else: ?>
            <tr class="tasks__item task
            <?=($task["is_done"] === true) ? "task--completed": ""; ?>
            <?=(date_count($task["date"]) <= 24) ? "task--important": ""; ?>">

                <td class="task__select">
                    <label class="checkbox task__checkbox">
                        <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1" <?=($show_complete_tasks === 1) ? "checked": ""; ?>>
                        <span class="checkbox__text"><?=esc($task["task"]); ?></span>
                    </label>
                </td>

                <td class="task__file">
                    <a class="download-link" href="#">Home.psd</a>
                </td>

                <td class="task__date"><?=$task["date"]; ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>
