document.addEventListener('DOMContentLoaded', () => {

    const buttons = document.querySelectorAll('.actions .btn');
    const contentContainer = document.getElementById('customization-content');

    const loadContent = (action) => {
        contentContainer.classList.add('loading');
        fetch(`/${action}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors du chargement de la page.');
                }
                return response.text();
            })
            .then(html => {
                contentContainer.innerHTML = html;
            })
            .catch(error => {
                contentContainer.innerHTML = `<p>${error.message}</p>`;
            })
            .finally(() => {
                contentContainer.classList.remove('loading'); 
            });
    };
    

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const action = button.dataset.action;
            loadContent(action); 
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const mainButton = document.querySelector('.btn.main');
    const actionsBar = document.querySelector('.actions-bar');

    if (mainButton && actionsBar) {
        mainButton.addEventListener('click', () => {
            actionsBar.classList.toggle('active');
        });
    }
});

