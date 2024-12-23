<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier de l'Avent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/calendar.css">
</head>

<body>
    <div class="bg-container">
        <div>
            <a class="btn" href="/">Home</a>
        </div>
        <div class="container d-flex justify-content-end align-items-center h-100">
            <div class="calendar-frame p-4">
                <div class="row gx-2 gy-2">
                    <?php
                    $days = range(1, 24);
                    shuffle($days);
                    $currentDay = date('j');
                    foreach ($days as $day): ?>
                        <div class="col-3">
                            <div id="day-<?= $day ?>" class="calendar-box <?= $day <= $currentDay ? 'unlocked' : 'locked' ?>" data-day="<?= $day ?>">
                                <span class="calendar-number"><?= $day ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div id="surprise-container" class="surprise-container" style="display: none;">
        <div class="gift-box text-center">
            <img id="gift-box-img" src="assets/images/surprise-christmas.png" alt="Boîte cadeau" />
            <div id="quote-display" class="quote-text"></div>
            <button id="close-surprise" class="btn btn-secondary mt-3">Fermer</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/calendar.js"></script>

</body>

</html>