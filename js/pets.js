'use strikt'

window.addEventListener('DOMContentLoaded', () => {

    const pets = {
        link: ['l', 'https://www.youtube.com/', 'l', 'l',],
        name: ['Мия', 'Элис', 'Сэм', 'Рон',],
        family: ['Собаки', 'Кошки', 'Кошки', 'Собаки',]
    };

    const wrapper = document.querySelector('.cards-wrapper');

    addCards();
    
    function addCards() {
        pets.name.forEach((element, i) => {
            i++;  
            wrapper.insertAdjacentHTML('afterbegin', `
                <a class='cards' href="${pets.link[i - 1]}">
                    <div class="cards-wrapper__card">
                        <img src="../img/animal${i}.jpg" alt="карточка с питомцем Мия" class="cards-wrapper__img">
                        <div class="cards-wrapper__wrapper">
                            <p class="cards-wrapper__name">${element}</p>
                            <p class="cards-wrapper__type">${pets.family[i - 1]}</p>
                        </div>
                    </div>
                </a>
            `);
        });
    }
    

});



// function addClick() {
//     wrapper.addEventListener('click', (event) => {
//         const target = event.target;
//         console.log(target);
        

//         if (target && target.tagName == 'A') {
            
//         }
//     });
// }