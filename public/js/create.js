document.addEventListener('DOMContentLoaded', () => {
    const colorInput = document.querySelector('#color');
    const themeInput = document.querySelector('#theme');
    const bgImageInput = document.querySelector('#bg_image');
    const calendarPreview = document.querySelector('.calendar-preview');

    colorInput.addEventListener('input', () => {
        calendarPreview.style.backgroundColor = colorInput.value;
    });

    themeInput.addEventListener('input', () => {
        calendarPreview.setAttribute('data-theme', themeInput.value);
    });

    bgImageInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                calendarPreview.style.backgroundImage = `url(${e.target.result})`;
            };
            reader.readAsDataURL(file);
        }
    });
});
