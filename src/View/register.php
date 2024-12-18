<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/login.css">
</head>
<body>
<div class="login-container">
        <div class="form-wrapper">
            <h1 class="form-title">Inscription</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="name">Nom</label>
                    <input type="name" id="name" name="name" placeholder="Entrez votre nom" required>
                </div>
                <div class="input-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="btn">Créer le compte</button>
                <p class="redirect-text">Vous avez déja un compte ? <a href="signin.php">Connectez-vous</a></p>
            </form>
        </div>
    </div>
</body>
</html>
