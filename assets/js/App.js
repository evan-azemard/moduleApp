'use strict';

const btnStartFixtures = document.getElementById('btnStartFixtures');
const btnErrorFixtures = document.getElementById('btnErrorFixtures');
const btnEndFixtures = document.getElementById('btnEndFixtures');
const btnCheck = document.getElementsByClassName('btnCheck');
const contentError = document.getElementById('contentError');

document.addEventListener('DOMContentLoaded', () => {

    btnErrorFixtures.addEventListener('click', () => {

        contentError.classList.toggle('d-none');
        if(contentError.classList.contains('d-none')){
            btnErrorFixtures.textContent = 'Start fake error'
        }else{
                btnErrorFixtures.textContent = 'Stop fake error'
        }
    });



});