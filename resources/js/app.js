import './bootstrap';
import {popUp} from './modules/popup.js';
import './modules/AsyncFormSending.js';
import "./modules/swiper.js";
//Set CSS variables
const currentLang = document.documentElement.lang;
const mainPageBanner = document.querySelector('.banner');
if(mainPageBanner){
    function svgVariables() {
        const styleTag = document.querySelector("head style");
        const cleanerImageheigt = document.querySelector('.brush').clientHeight
        const sofaImageWidts = document.querySelector('.sofa').clientWidth
        styleTag.innerHTML = `:root {--cleaner-icon-height: ${cleanerImageheigt}px; --sofa-width: ${sofaImageWidts}px;}`;
    }

    svgVariables();

    window.addEventListener('resize', svgVariables);

    //Animation
    document.querySelector('.window').classList.add('active');
    document.querySelector('.mop').classList.add('active');
    document.querySelector('.vacun-cleaner').classList.add('active');
    setTimeout(() => document.querySelector('.garbage').classList.add('active'), 5800);
    setTimeout(() => document.querySelector('.garbage').classList.add('visible'), 7200);
    setTimeout(() => document.querySelector('.brush').classList.add('active'), 6400);
    setTimeout(() => document.querySelector('.brush').classList.add('visible'), 7200);
    setTimeout(() => document.querySelector('.sofa').classList.add('active'), 7500);
    setTimeout(() => document.querySelector('.sofa').classList.add('visible'), 9000);
}

//burger
const HTMLBody = document.querySelector('body')

const burgerIcon = document.querySelector('.burger_icon');
const burger = document.querySelector('.burger');

if (burgerIcon && burger) {

    burgerIcon.addEventListener('click', () => {
        burgerIcon.classList.toggle('active');
        burger.classList.toggle('active');
        HTMLBody.classList.toggle('lock');
    });
}

//popup
const popupLinks = document.querySelectorAll('.link-on-popup');
popupLinks.forEach(popupLink => {
    popupLink.addEventListener('click', () => popUp(popupLink.dataset.popup));
});

const topMenuBtn = document.querySelector('.top-menu-btn');
const headerBottomMenu = document.querySelector('.header__bottom-menu');
const header = document.querySelector('.header');
if (topMenuBtn && headerBottomMenu) {
    topMenuBtn.addEventListener('click', () => {
        headerBottomMenu.classList.add('active');
        header.classList.add('save-top')
    });
    document.addEventListener('scroll', (e) => {
        if (window.scrollY > 100) {
            topMenuBtn.classList.add('active');
        } else {
            topMenuBtn.classList.remove('active');
        }
        if (headerBottomMenu.classList.contains('active')) {
            headerBottomMenu.classList.add('hide');
            setTimeout(() => {
                headerBottomMenu.classList.remove('hide');
                headerBottomMenu.classList.remove('active');
                header.classList.remove('save-top');
            }, 300);
        }
    });
}

//Changed Select Color
const selects = document.querySelectorAll('select');

function changeSelectHandler() {
    this.style.color = '#000000';
    this.removeEventListener('change', changeSelectHandler);
}

selects.forEach(select => {
    select.addEventListener('change', changeSelectHandler);
});

//Showe-more-mobile, questions, stages
window.onload = function () {``
    const styleTag = document.querySelector("head style");
    const caseItem = document.querySelector('.cases__item');

    if(caseItem ){
        styleTag.innerHTML = `:root {--case-item-height: ${caseItem.clientHeight}px;}`;
    }

    const showMoreBtn = document.querySelectorAll('.show-more-btn');
    if(showMoreBtn){
        showMoreBtn.forEach(btn => {
            const animatedEl = btn.previousElementSibling
            const height = animatedEl.scrollHeight;
            btn.addEventListener('click', () => {
                animatedEl.style.height = height + 'px';
                btn.remove();
                btn.classList.add('inactive');
                setTimeout(() => {
                    animatedEl.style.height = 'auto';
                }, 1000)
            });
        });
    }

    const questionTitles = document.querySelectorAll('.question__title');

    if(questionTitles){
        const setAnswerHieght = (questionAnswer, questionBtn)=>{
    
            questionTitles.forEach(title => {
                const questionBody = title.closest('.question__question');
                const btn = title.nextElementSibling;
                const answer = questionBody.nextElementSibling;
                if(answer != questionAnswer){
                    answer.style.height = '0px';
                    btn.classList.remove('active');
                }
            });
    
            if(!questionAnswer.style.height || questionAnswer.style.height === '0px'){
                questionAnswer.style.height = questionAnswer.scrollHeight + 'px';
                questionBtn.classList.add('active');
            } else {
                questionAnswer.style.height = '0px';
                questionBtn.classList.remove('active');
            }
        }
        questionTitles.forEach(title => {
        
            const questionBody = title.closest('.question__question');
            const questionBtn = title.nextElementSibling;
            const questionAnswer = questionBody.nextElementSibling;
            
            title.addEventListener('click', () => setAnswerHieght(questionAnswer, questionBtn));
            questionBtn.addEventListener('click', () => setAnswerHieght(questionAnswer, questionBtn));
        });
    }


    const stages = document.querySelector('.stages');

    if(stages){
        const fisrtStage = stages.querySelector('.stages__stage');
        const secondStage = fisrtStage.nextElementSibling;
        const stagesHieght = fisrtStage.scrollHeight + secondStage.scrollHeight + 36;
        styleTag.innerHTML = `:root {--case-stage-height: ${stagesHieght}px;}`;
       //console.log(styleTag.innerHTML.split(';'));
    }
}


const typeClientsTexts = document.querySelectorAll('.type-cliets__client-text');

if(typeClientsTexts && window.innerWidth < 480){
    typeClientsTexts.forEach(text => {
        const words = text.innerText.split(' ');
        const firstSevenWords = words.slice(0, 7).join(' ');
        const remainingText = words.slice(7).join(' ');
        const showTextBtn = document.createElement('button');
        showTextBtn.classList.add('show-text-btn');
        currentLang === 'ua' ? showTextBtn.innerText = '...Читати далі' : showTextBtn.innerText = '...Читать дальше';
        text.innerHTML = firstSevenWords + ' ';
        text.insertAdjacentElement('beforeend', showTextBtn);
        text.style.height = text.offsetHeight + 'px';
        text.style.overflow = 'hidden';
        showTextBtn.addEventListener('click', ()=>{
            const span = document.createElement('span');
            span.innerText = remainingText;
            showTextBtn.remove();
            text.insertAdjacentElement('beforeend', span);
            text.style.height = text.scrollHeight + 'px';
        });
    });
}

//GOOGL ADS CONVERSIONS

const conversions = document.querySelectorAll('.conversion');
if(conversions.length > 0){ 
    conversions.forEach(conversion => conversion.addEventListener('click', () => gtag_report_conversion(undefined)));
}