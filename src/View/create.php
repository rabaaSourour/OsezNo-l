<h1 class="text-center">Mes calendrier</h1>
<form action="" method="POST" enctype="multipart/form-data">
<div class="mb-3 p-3">
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" value="<?= htmlspecialchars($calendar['title']) ?>" required>
</div>
    <div class="mb-3 p-3">
    <label for="theme">Thème : </label>
    <select name="theme" id="theme" required>
        <option value="citation">Citations</option>
        <option value="objectif">Objectifs</option>
        <option value="encouragement">Encouragements</option>
    </select>
    </div>

    <div class="mb-3">
    <label for="color">Couleur : </label>
    <input type="color" name="color" id="color" value="<?= htmlspecialchars($calendar['color']) ?>" required>
    </div>

    <div class="mb-3">
    <label for="bgImage">Image de fond : </label>
    <input type="file" name="bg_image" id="bgImage" accept="image/*" required>
    </div>
    <button type="submit" class="btn text-center">Enregistrer</button>
</form>

<div class="calendar-preview" style="background-color: <?= htmlspecialchars($calendar['color']) ?>; background-image: url('<?= htmlspecialchars($calendar['bg_image']) ?>');">
    <?php require_once __DIR__ . '/calendar_part.php'; ?>
</div>

<script src="/js/create.js"></script>
