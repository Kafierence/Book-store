// Đóng mở menu trên mobile
const menuToggle = document.querySelector('[data-menu-toggle]');
const overlay = document.querySelector('[data-overlay]');
const openMenuBtn = document.querySelector('[data-menu-open]');
const closeMenuBtn = document.querySelector('[data-menu-close]');

openMenuBtn.onclick = function () {
    if (menuToggle.classList.contains('slideOutFade')) {
        menuToggle.classList.remove('slideOutFade');
    }
    menuToggle.classList.add('slideInFade');

    if (overlay.classList.contains('fade')) {
        overlay.classList.remove('fade');
    }
    overlay.classList.add('appear');
};
closeMenuBtn.onclick = function () {
    if (menuToggle.classList.contains('slideInFade')) {
        menuToggle.classList.remove('slideInFade');
    }
    menuToggle.classList.add('slideOutFade');

    if (overlay.classList.contains('appear')) {
        overlay.classList.remove('appear');
    }
    overlay.classList.add('fade');
};

// Đóng mở menu trên desktop
const dropDown = document.querySelector('[data-dropdown]');
const menudropDown = document.querySelector('[data-dropdown-menu]');

dropDown.onclick = function () {
    console.log('click');
    if (menudropDown.classList.contains('show-dropdown')) {
        menudropDown.classList.remove('show-dropdown');
        menudropDown.classList.add('hide-dropdown');
        return;
    }
    if (menudropDown.classList.contains('hide-dropdown')) {
        menudropDown.classList.remove('hide-dropdown');
        menudropDown.classList.add('show-dropdown');
    }
};

console.log(dropDown);
console.log(menudropDown);
