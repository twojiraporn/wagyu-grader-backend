require('./bootstrap');

document.addEventListener('DOMContentLoaded', () => {
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach( e1 => {
            e1.addEventListener('click', () => {
                const target = e1.dataset.target;
                const $target = document.getElementById(target);
                e1.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
});
