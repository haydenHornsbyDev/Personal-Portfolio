(function() {
    const heroes = document.querySelectorAll('[data-hero]');
    const heroDividers = document.querySelectorAll('[data-hero-divider]');
    const heroTexts = document.querySelectorAll('[data-hero-text]');
    const heroArrows = document.querySelectorAll('[data-hero-arrow]');

    function loadHero() {
        console.log('ss');
        heroDividers.forEach(divider => divider.classList.add('is-active'));
        heroTexts.forEach(text => text.classList.add('is-active'));
        heroArrows.forEach(arrow => arrow.classList.add('is-active'));
    };
    
    window.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM loaded');
        setTimeout(loadHero, 1000);
    });
})();