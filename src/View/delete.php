<?php if (!empty($calendars)): ?>
    <h2>Liste des calendriers</h2>
    <?php foreach ($calendars as $calendar): ?>
        <div>
            <p><?= htmlspecialchars($calendar['title']) ?></p>
            <form action="/delete" method="POST">
                <input type="hidden" name="id" value="<?= $calendar['id'] ?>">
                <button type="submit">Supprimer</button>
            </form>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun calendrier disponible pour suppression.</p>
<?php endif; ?>
