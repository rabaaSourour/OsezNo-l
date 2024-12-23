<?php
    $days = range(1, 24);
    shuffle($days);
    $currentDay = date('j');
?>

<div class="calendar-frame p-4">
    <div class="row gx-2 gy-2">
        <?php foreach ($days as $day): ?>
            <div class="col-3">
                <div id="day-<?= $day ?>" 
                    class="calendar-box <?= $day <= $currentDay ? 'unlocked' : 'locked' ?>" 
                    data-day="<?= $day ?>">
                    <span class="calendar-number"><?= $day ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>