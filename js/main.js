'use strict';

const allCategories = document.querySelectorAll('.btns-wrap .btn-wrap');
const allButtons = document.querySelectorAll('.btns-wrap button');

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
        document.querySelector(`#category-${category}`).classList.add('active');
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
        document.querySelector(`.center-graphic .graphic-${category}`).classList.add('active');
    }
    else {
        document.querySelector('.center-graphic .graphic-default').classList.add('active');
    }
}