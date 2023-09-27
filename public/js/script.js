const botaoMenu = document.querySelector('.menu_hamburguer');
const menu = document.querySelector('.menu');

botaoMenu.addEventListener('click', function(event) {
    event.preventDefault();
    menu.classList.toggle("menu-aberto");

    if (menu.classList.contains('menu-aberto')) {
        const spans = botaoMenu.querySelectorAll('span');
        for (let i = 0; i < spans.length; i++) {
            if(i == 0) {
                spans[i].id = "span-menuOne";
            } else if(i == 1) {
                spans[i].id = "span-menuTwo";
            } else if(i == 2) {
                spans[i].id = "span-menuThree";
            }
        }
    } else {
        const spans = botaoMenu.querySelectorAll('span');
        for (let i = 0; i < spans.length; i++) {
            spans[i].removeAttribute('id');
        }
    }
});



document.addEventListener('DOMContentLoaded', function() {
    const wordElement = document.querySelector('.dynamicWord');
    const words = ['Preto e Cinza', 'Animes & Geek', 'Escrita', 'Realismo', 'Old School']; // Adicione as palavras desejadas

    let currentIndex = 0;

    function changeWord() {
        wordElement.style.opacity = 0;
        setTimeout(function() {
            currentIndex = (currentIndex + 1) % words.length;
            wordElement.textContent = words[currentIndex];
            wordElement.style.opacity = 1;
        }, 500);
    }

    setInterval(changeWord, 2000);
});





