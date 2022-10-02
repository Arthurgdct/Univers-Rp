class CarouselIg {

    constructor(target) {
        this.CarouselIg = target;
        this.buttonPrevious = this.CarouselIg.querySelector('.button-previous');
        this.buttonNext = this.CarouselIg.querySelector('.button-next');
        this.slideContainer = this.CarouselIg.querySelector('.slideContainer');
        // Gestion du défilement des slides
        this.currentSlide = 0;
        this.slidesCount = this.slideContainer.children.length - 1;
        this.buttonPrevious.addEventListener('click', this.previousSlide.bind(this));
        this.buttonNext.addEventListener('click', this.nextSlide.bind(this));
    }
    // Défilement à la slide suivante & précédente
    previousSlide() {
        this.currentSlide -= 1;
        if (this.currentSlide < 0) {
            this.currentSlide = this.slidesCount;
        }
        this.moveCarousel();
    }

    nextSlide() {
        this.currentSlide += 1;
        if (this.currentSlide > this.slidesCount) {
            this.currentSlide = 0;
        }
        this.moveCarousel();
    }
    //Maj affichage du carousel
    moveCarousel() {
        var position = 100 * this.currentSlide;
        this.slideContainer.style.transform = 'translateX(-' + position + '%)';

        // Boucle permettant de mettre à jour l'attribut "aria-hidden" des diapositives
        for (var i = 0; i <= this.slidesCount; i++) {
            if (i == this.currentSlide) {
                this.slideContainer.children[i].setAttribute('aria-hidden', false);
            }
            else {
                this.slideContainer.children[i].setAttribute('aria-hidden', true);
            }

        }
    }
}
document.getElementById('addDice').addEventListener('click', createDice);
document.getElementById('deleteDice').addEventListener('click', deleteDice);
document.getElementById('launchDice').addEventListener('click', launchDice);

function createDice() {
    let min = document.getElementById('minNumber').value;
    let max = document.getElementById('maxNumber').value;
    let dice = document.getElementsByClassName('dice');
    let diceContainer = document.getElementById('diceContainer');
    let newDice = document.createElement('p');
    if (dice.length <= 4) {
        newDice.setAttribute('class', 'dice');
        newDice.appendChild(document.createTextNode(getRandomInt(min, max)))
        diceContainer.appendChild(newDice);
    }
}

function deleteDice() {
    let dice = document.getElementsByClassName('dice');
    let lastDice = dice[dice.length - 1];
    if (dice.length >= 2) {
        lastDice.remove();
    }
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    max = max + 1;
    return Math.floor(Math.random() * (max - min) + min)
}

function launchDice() {
    let min = document.getElementById('minNumber').value;
    let max = document.getElementById('maxNumber').value;
    if (Math.ceil(min) > Math.floor(max)) {
        if (typeof errormsg != 'object') {
            let diceConfig = document.getElementById('diceConfig');
            let errormsg = document.createElement('p')
            errormsg.setAttribute('id', 'errormsg');
            errormsg.setAttribute('class','errors');
            diceConfig.appendChild(errormsg).innerHTML += document.createTextNode('Attention le premier nombre doit etre plus petit ou égal au second.').nodeValue;
        }
    } else {
        let dicehtmlcollection = document.getElementsByClassName('dice')
        let diceArray = Array.from(dicehtmlcollection);
        for (let i = 0; i < diceArray.length; i++) {
            let dice = document.getElementsByClassName('dice')[i];
            dice.innerHTML = document.createTextNode(getRandomInt(min, max)).nodeValue;
        }
        if (typeof errormsg == 'object') {
            errormsg.remove();
        }
    }
}
window.onload = function () {
    new CarouselIg(document.querySelector('.carouselIg'));
};