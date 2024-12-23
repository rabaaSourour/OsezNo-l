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
    <h1 class="festive-logo">
        <span class="o-wrapper">
            <img src="/assets/images/bonnet.png" alt="Bonnet de Noël" class="bonnet">
            O
        </span>
            sez Noël
    </h1>
    <ul>
        <li><a class="btn-header" href="/calendar">Calendrier</a></li>
        <li><a class="btn-header" href="/logout">Déconnexion</a></li>
    </ul>
</header>

<div class="container">
    <section class="calendar-section">
        <div class="calendar">
            <div class="calendar-header">
                <h2>Découvrez la magie de Noël, un jour à la fois</h2>
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
    <button class="btn main">Menu</button>
    <div class="actions-bar">
    <button class="btn" data-action="create">Créer un Calendrier</button>
    <button class="btn" data-action="myCalendars">Mes Calendriers</button>
    <button class="btn" data-action="edite">Modifier un Calendrier</button>
    <button class="btn" data-action="delete">Supprimer un Calendrier</button>
    <button class="btn" data-action="share">Partager un Calendrier</button>
</div>
</div>

<div id="customization-content"></div>


<footer class="footer">
    <p>&copy; 2024 Calendrier Festif 🎅 | Joyeux Noël !</p>
</footer>


    <script src="/js/home.js"></script>
</body>
</html>
