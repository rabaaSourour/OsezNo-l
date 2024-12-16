<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/public/styles/login.css">
    <!-- Importation de la police Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Conteneur principal -->
    <div class="login-container">
        <div class="form-wrapper">
            <h1 class="form-title">Connexion</h1>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="btn">Se Connecter</button>
                <p class="redirect-text">Pas encore de compte ? <a href="register.php">Inscrivez-vous</a></p>
            </form>
        </div>
    </div>
</body>
</html>
