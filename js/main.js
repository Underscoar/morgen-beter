'use strict';

const allCategories = document.querySelectorAll('.btns-wrap .btn-wrap');
const allButtons = document.querySelectorAll('.btns-wrap button');
const toggle = document.querySelector('#prive-zakelijk-toggle');

allButtons.forEach(button => {
    button.addEventListener('click', () => selectCategory(button));
})

function selectCategory(selectedButton) {
    const category = selectedButton.dataset.category;

    let isActiveBtn = false;
    if (selectedButton.classList.contains('active')) {
        isActiveBtn = true;
    }

    document.querySelector('.main-circle').classList.remove('category-active');
    allButtons.forEach(button => { button.classList.remove('active') });
    allCategories.forEach(button => { button.classList.remove('active') });

    if (!isActiveBtn) {
        selectedButton.classList.add('active');
        if (toggle.checked) {
            document.querySelector(`#category-${category}`).classList.add('active');
        }
        else {
            document.querySelector(`#prive-category-${category}`).classList.add('active');
        }
        document.querySelector('.main-circle').classList.add('category-active');
    }

    setCenterGraphic(category, isActiveBtn);
}

function setCenterGraphic(category, alreadyActive) {    
    const allGraphics = document.querySelectorAll('.center-graphic .graphic');

    document.querySelector('.center-graphic .graphic-default').classList.remove('active');
    allGraphics.forEach(element => {
        element.classList.remove('active');
    });

    if (!alreadyActive) {
        document.querySelector('.back-btn').classList.add('active');
        if (toggle.checked) {
            document.querySelector(`#center-graphic-zakelijk .graphic-${category}`).classList.add('active');
        }
        else {
            document.querySelector(`#center-graphic-prive .graphic-${category}`).classList.add('active');
        }
    }
    else {
        document.querySelector('.back-btn').classList.remove('active');
        document.querySelector('#center-graphic-zakelijk .graphic-default').classList.add('active');
        document.querySelector('#center-graphic-prive .graphic-default').classList.add('active');
    }
}

function resetView() {
    const allGraphics = document.querySelectorAll('.center-graphic .graphic');

    document.querySelector('.main-circle').classList.remove('category-active');
    allButtons.forEach(button => { button.classList.remove('active') });
    allCategories.forEach(button => { button.classList.remove('active') });

    allGraphics.forEach(element => {
        element.classList.remove('active');
    });
    document.querySelector('#center-graphic-zakelijk .graphic-default').classList.add('active');
    document.querySelector('#center-graphic-prive .graphic-default').classList.add('active');
    document.querySelector('.back-btn').classList.remove('active');
}

document.onkeydown = function(evt) {
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    }
    if (isEscape) {
        resetView();
    }
};

toggle.addEventListener('change', checkState);

function checkState() {
    if (toggle.checked) {
        toggleZakelijk();
    }
    else {
        togglePrive();
    }
}

function toggleZakelijk() {
    document.querySelector('#title-prive').classList.remove('active');
    document.querySelector('#title-zakelijk').classList.add('active');
    document.querySelector('#prive-btns-wrap').classList.remove('active');
    document.querySelector('#zakelijk-btns-wrap').classList.add('active');
    document.querySelector('#center-graphic-prive').classList.remove('active');
    document.querySelector('#center-graphic-zakelijk').classList.add('active');
    resetView();
}

function togglePrive() {
    document.querySelector('#title-prive').classList.add('active');
    document.querySelector('#title-zakelijk').classList.remove('active');
    document.querySelector('#prive-btns-wrap').classList.add('active');
    document.querySelector('#zakelijk-btns-wrap').classList.remove('active');
    document.querySelector('#center-graphic-prive').classList.add('active');
    document.querySelector('#center-graphic-zakelijk').classList.remove('active');
    resetView();
}

checkState();