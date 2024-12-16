<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier de l'Avent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/styles/home.css">
</head>
<body>
    <div class="bg-container">
    <div>
        <a class="btn" href="">Connexion</a>
    </div>
        <div class="container d-flex justify-content-end align-items-center h-100">
            <div class="calendar-frame p-4">
                <div class="row gx-2 gy-2">
                    <?php
                    $numbers = range(1, 24);
                    shuffle($numbers); 
                    foreach ($numbers as $number): ?>
                        <div class="col-3">
                            <div class="calendar-box d-flex justify-content-center align-items-center">
                                <span class="calendar-number"><?= $number ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
