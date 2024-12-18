<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier Festif</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<header>
    <h1>Osez Noël</h1>
    <a class="btn-logout" href="/signin/logout">Déconnexion</a>
</header>
    <div class="container">
        <section class="calendar-section">
            <div class="calendar">
                <div class="calendar-header">
                    <h2>Décembre</h2>
                </div>
                <div class="calendar-grid">
                    <div class="day">1</div>
                    <div class="day special"><i class="fas fa-gift"></i></div>
                    <div class="day">3</div>
                    <div class="day">4</div>
                    <div class="day special"><i class="fas fa-star"></i></div>
                    <div class="day">6</div>
                    <div class="day">7</div>
                    <div class="day">8</div>
                    <div class="day">9</div>
                    <div class="day special"><i class="fas fa-bell"></i></div>
                    <div class="day">11</div>
                    <div class="day">12</div>
                    <div class="day">13</div>
                    <div class="day special"><i class="fas fa-gift"></i></div>
                    <div class="day">15</div>
                    <div class="day">16</div>
                    <div class="day">17</div>
                    <div class="day">18</div>
                    <div class="day special"><i class="fas fa-star"></i></div>
                    <div class="day">20</div>
                    <div class="day">21</div>
                    <div class="day">22</div>
                    <div class="day special"><i class="fas fa-tree"></i></div>
                    <div class="day">24</div>
                </div>
            </div>
        </section>

        <div class="actions">
            <button class="btn create">Créer</button>
            <button class="btn view">Voir</button>
            <button class="btn share">Partager</button>
            <button class="btn delete">Supprimer</button>
        </div>

        <div class="customization">
            <h2>Personnalisation</h2>
            <div class="options">
                <div>
                    <label for="theme">🎨 Thème :</label>
                    <select id="theme">
                        <option value="citation">Citations</option>
                        <option value="objectif">Objectifs</option>
                        <option value="encouragement">Encouragements</option>
                    </select>
                </div>
                <div>
                    <label for="color">🌈 Couleur principale :</label>
                    <input type="color" id="color" value="#FFD700">
                </div>
                <div>
                    <label for="bg-image">🖼️ Image d’arrière-plan :</label>
                    <input type="file" id="bg-image" accept="image/*">
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Calendrier Festif 🎅 | Joyeux Noël !</p>
    </footer>
</body>
</html>
