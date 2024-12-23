<?php
// Simuler des données utilisateur récupérées de la base de données
    $calendar = [
        'bg_image' => '/assets/images/background.jpg', // Valeur par défaut
        'number_color' => '#FFD700', // Or
        'theme' => 'encouragements',
];

$days = range(1, 24);
shuffle($days);
$currentDay = date('j');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier Personnalisé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/calendar.css">
    <style>
        /* Personnalisation dynamique */
        .bg-container {
            background-image: url('<?= htmlspecialchars($calendar['bg_image']) ?>');
            background-size: cover;
            background-position: center;
        }
        .calendar-number {
            color: <?= htmlspecialchars($calendar['color']) ?>;
        }
    </style>
</head>

<body>
    <div class="bg-container">
        <div>
            <a class="btn" href="/">Home</a>
        </div>
        <?php require_once __DIR__ . '/calendar_part.php'; ?>
    </div>

    <div id="surprise-container" class="surprise-container" style="display: none;">
        <div class="gift-box text-center">
            <img id="gift-box-img" src="<?= htmlspecialchars($calendar['icon']) ?>" alt="Boîte cadeau" />
            <div id="quote-display" class="quote-text"></div>
            <button id="close-surprise" class="btn btn-secondary mt-3">Fermer</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/calendar.js"></script>

</body>

</html>
