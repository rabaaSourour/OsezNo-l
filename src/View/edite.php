<?php if (!empty($calendars)): ?>
    <form id="calendarSelectForm">
        <label for="calendarSelect">Sélectionnez un calendrier :</label>
        <select name="calendar_id" id="calendarSelect">
            <option value="">-- Choisir un calendrier --</option>
            <?php foreach ($calendars as $calendar): ?>
                <option value="<?= $calendar['id'] ?>">
                    <?= htmlspecialchars($calendar['title']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <div id="calendarEditFormContainer" style="display: none;">
        <form id="calendarEditForm" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="calendar_id" id="calendarId">

            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" required>

            <label for="theme">Thème :</label>
            <input type="text" name="theme" id="theme" required>

            <label for="color">Couleur :</label>
            <input type="color" name="color" id="color" required>

            <label for="bgImage">Image de fond :</label>
            <input type="file" name="bg_image" id="bgImage">
            <p>Image actuelle : <img id="currentImage" src="" alt="Background" width="100"></p>

            <button type="submit">Modifier le calendrier</button>
        </form>
    </div>
<?php else: ?>
    <p>Aucun calendrier disponible.</p>
<?php endif; ?>
