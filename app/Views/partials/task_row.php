<article class="task-row">
    <span class="task-indicator <?= $task['status'] === 'completed' ? 'task-indicator--done' : '' ?>" aria-hidden="true"><?= $task['status'] === 'completed' ? '✓' : '' ?></span>
    <div class="task-details">
        <h3><?= esc($task['title']) ?></h3>
        <span class="task-subline">Task #<?= esc($task['id']) ?><?= $showDate ? ' · ' . esc(date('M j, Y', strtotime($task['task_date']))) : '' ?></span>
    </div>
    <span class="status status--<?= esc($task['status'], 'attr') ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span>
</article>
