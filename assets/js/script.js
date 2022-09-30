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
document.getElementById('launchDice').addEventListener('click',launchDice);
function createDice() {
    let dice = document.getElementsByClassName('dice');
    let diceContainer = document.getElementById('diceContainer');
    let newDice = document.createElement('img');
    console.log(dice);
    if (dice.length <= 4) {
        newDice.src = 'assets/img/de20.png';
        newDice.setAttribute('class', 'dice');
        diceContainer.appendChild(newDice);
    }
    
}
function deleteDice() {
    let dice = document.getElementsByClassName('dice');
    let lastDice = dice[dice.length - 1];
    console.log(lastDice)
    if (dice.length >= 2) {
        lastDice.remove();
    }

}

function launchDice() {
    let diceList = document.getElementsByClassName('dice');
    let diceArray = [diceList];
    let newP = document.createElement('p');
    diceArray.forEach(element => {
        console.log(element);
    });
}


window.onload = function () {
    new CarouselIg(document.querySelector('.carouselIg'));
};