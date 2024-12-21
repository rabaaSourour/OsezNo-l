document.addEventListener("DOMContentLoaded", () => {
    const days = document.querySelectorAll('.calendar-box');
    const surpriseContainer = document.getElementById("surprise-container");
    const closeButton = document.getElementById("close-surprise");
    const quoteDisplay = document.getElementById("quote-display");
    const giftBoxImg = document.getElementById("gift-box-img");

    // Fonction pour afficher la surprise
    function displaySurprise(data) {
        quoteDisplay.style.display = "block";
        quoteDisplay.innerHTML = `<h2>${data.quote}</h2>`;
        giftBoxImg.classList.add("open");
    }

    // Fonction pour ouvrir un jour
    function openDay(day) {
        fetch(`/api/calendar/surprise/${day}`)
            .then(response => {
                if (!response.ok) throw new Error("Surprise non trouvée.");
                return response.json();
            })
            .then(data => {
                giftBoxImg.classList.remove("open");
                quoteDisplay.style.display = "none";
                quoteDisplay.innerHTML = "";
                surpriseContainer.style.display = "flex";
                setTimeout(() => displaySurprise(data), 500);
            })
            .catch(error => {
                console.error(error);
                alert("Erreur lors de la récupération de la surprise.");
            });
    }

    // Événement sur chaque case
    days.forEach(day => {
        day.addEventListener('click', () => {
            if (day.classList.contains('locked')) {
                alert("Ce jour est verrouillé !");
                return;
            }
            openDay(day.dataset.day);
        });
    });

    // Événement pour fermer la surprise
    closeButton.addEventListener("click", () => {
        surpriseContainer.style.display = "none";
    });
});
