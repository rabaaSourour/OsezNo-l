<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer le mot de passe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/login.css">
</head>
<body>
    <div class="container mt-5">
        <div class="login-container">
            <div class="form-wrapper">
                <h1 class="form-title text-center mb-4">Changer le mot de passe</h1>
                <?php if (isset($user)) : ?>
                <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email"
                            value="<?= htmlspecialchars($user['email'] ?? ''); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="OldPassword" class="form-label">Ancien mot de passe</label>
                        <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Entrez votre ancien mot de passe" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre nouveau mot de passe" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                    </div>
                </form>
                <?php else : ?>
                    <p class="text-danger text-center">Utilisateur introuvable.</p>
                <?php endif; ?>

                <p class="redirect-text text-center mt-4">
                    Retour à la connexion <a href="signin.php">Connectez-vous</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
