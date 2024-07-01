function toggleChangeTheme() {
    const body = document.body;
    body.classList.toggle('light-mode');
    if (body.classList.contains('light-mode')) {
        localStorage.setItem('theme', 'light');
    } else {
        localStorage.removeItem('theme');
    }
}

window.onload = function () {
    const themeSauvegarder = localStorage.getItem('theme');
    if (themeSauvegarder === 'light') {
        document.body.classList.add('light-mode');
    }
};
