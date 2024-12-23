<h1>Mes Calendriers</h1>
<div class="calendars">
    <?php if (!empty($calendars)) : ?>
        <?php foreach ($calendars as $calendar) : ?>
            <div class="calendar">
                <h2><?= htmlspecialchars($calendar['title']) ?></h2>
                <p>Thème : <?= htmlspecialchars($calendar['theme']) ?></p>
                <p>Couleur : <span style="background-color: <?= htmlspecialchars($calendar['color']) ?>;">&nbsp;&nbsp;&nbsp;</span></p>
                <?php if ($calendar['bg_image']) : ?>
                    <img src="<?= htmlspecialchars($calendar['bg_image']) ?>" alt="Image de fond">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Vous n'avez pas encore créé de calendriers.</p>
    <?php endif; ?>
</div>
