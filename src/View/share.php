<h1>Partager un calendrier</h1>
<?php if (!empty($calendars)): ?>
    <ul>
        <?php foreach ($calendars as $calendar): ?>
            <li>
                <h3><?= htmlspecialchars($calendar['title']) ?></h3>
                <p>Thème : <?= htmlspecialchars($calendar['theme']) ?></p>
                <button 
                    class="copy-link" 
                    data-link="http://localhost/share?id=<?= $calendar['id'] ?>">
                    Copier le lien
                </button>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun calendrier disponible.</p>
<?php endif; ?>
