class Index {

    /**
     * create a home
     */
    constructor() {
        this.init()
    }

    indexSwiper() {
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            pagination: {
              el: '.swiper-pagination',
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            autoplay: true,
            speed: 3000,
            
          });
    }

    filter() {
        const areaPizza = document.querySelector('.index__pizza-area')
        const areaLanche = document.querySelector('.index__burguer-area')
        const areaSobremesa = document.querySelector('.index__sobremesa-area')
        const areaPratos = document.querySelector('.index__pratos-area')
        const btnPizza = document.querySelector('.index__btn-pizza')
        const btnLanche = document.querySelector('.index__btn-lanche')
        const btnSobremesa = document.querySelector('.index__btn-sobremesa')
        const btnPratos = document.querySelector('.index__btn-pratos')


        btnPizza.addEventListener('click', () => {
            areaPizza.classList.add('active')
            areaLanche.classList.remove('active')
            areaSobremesa.classList.remove('active')
            areaPratos.classList.remove('active')
            btnPizza.classList.add('active')
            btnLanche.classList.remove('active')
            btnSobremesa.classList.remove('active')
            btnPratos.classList.remove('active')
        })

        btnLanche.addEventListener('click', () => {
            areaPizza.classList.remove('active')
            areaLanche.classList.add('active')
            areaSobremesa.classList.remove('active')
            areaPratos.classList.remove('active')
            btnPizza.classList.remove('active')
            btnLanche.classList.add('active')
            btnSobremesa.classList.remove('active')
            btnPratos.classList.remove('active')
        })

        btnSobremesa.addEventListener('click', () => {
            areaPizza.classList.remove('active')
            areaLanche.classList.remove('active')
            areaSobremesa.classList.add('active')
            areaPratos.classList.remove('active')
            btnPizza.classList.remove('active')
            btnLanche.classList.remove('active')
            btnSobremesa.classList.add('active')
            btnPratos.classList.remove('active')
        })

        btnPratos.addEventListener('click', () => {
            areaPizza.classList.remove('active')
            areaLanche.classList.remove('active')
            areaSobremesa.classList.remove('active')
            areaPratos.classList.add('active')
            btnPizza.classList.remove('active')
            btnLanche.classList.remove('active')
            btnSobremesa.classList.remove('active')
            btnPratos.classList.add('active')
        })
    }

    pizza() {
        pizzaJson.forEach((item, index) => {
            let pizzaItem = document.querySelector('.index__model .index__pizza-item').cloneNode(true)
            document.querySelector('.index__pizza-area').append(pizzaItem)
    
            pizzaItem.querySelector('.index__pizza-item--img img').src = item.img
            pizzaItem.querySelector('.index__pizza-item--price').innerHTML = `R$ ${item.price.toFixed(2)}`
            pizzaItem.querySelector('.index__pizza-item--name').innerHTML = item.name
            pizzaItem.querySelector('.index__pizza-item--desc').innerHTML = item.description
    
            console.log(item.sale)
    
            if (item.sale === true) {
                const sale = pizzaItem.querySelector('.index__pizza-item .index__sale')
                sale.classList.add('active')
            }
        })
    }
    

    burguer() {
        burguerJson.forEach((item, index ) => {
            let burguerItem = document.querySelector('.index__model .index__burguer-item').cloneNode(true)
            document.querySelector('.index__burguer-area').append(burguerItem)
        
            burguerItem.querySelector('.index__burguer-item--img img').src = item.img
            burguerItem.querySelector('.index__burguer-item--price').innerHTML = `R$ ${item.price.toFixed(2)}`
            burguerItem.querySelector('.index__burguer-item--name').innerHTML = item.name
            burguerItem.querySelector('.index__burguer-item--desc').innerHTML = item.description

            if (item.sale === true) {
                const sale = burguerItem.querySelector('.index__burguer-item .index__sale')
                sale.classList.add('active')
            }
        
        })
    }

    pratos() {
        pratosJson.forEach((item, index ) => {
            let pratosItem = document.querySelector('.index__model .index__pratos-item').cloneNode(true)
            document.querySelector('.index__pratos-area').append(pratosItem)
        
            pratosItem.querySelector('.index__pratos-item--img img').src = item.img
            pratosItem.querySelector('.index__pratos-item--price').innerHTML = `R$ ${item.price.toFixed(2)}`
            pratosItem.querySelector('.index__pratos-item--name').innerHTML = item.name
            pratosItem.querySelector('.index__pratos-item--desc').innerHTML = item.description

            if (item.sale === true) {
                const sale = pratosItem.querySelector('.index__pratos-item .index__sale')
                sale.classList.add('active')
            }
        
        })
        
    }

    startCounterAnimation() {
        const valueDisplays = document.querySelectorAll('.index__numbers-main');
    
        function animateValue(element, start, end, duration) {
            let current = start;
            const range = end - start;
            const increment = end > start ? 1 : -1;
            const stepTime = Math.abs(Math.floor(duration / range));
    
            const timer = setInterval(() => {
                current += increment;
                element.textContent = current;
                if (current === end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }
    
        function handleIntersect(entries, observer) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const valueDisplay = entry.target;
                    const startValue = 0;
                    const endValue = parseInt(valueDisplay.getAttribute('data-val'));
                    const duration = 2000;
                    animateValue(valueDisplay, startValue, endValue, duration);
                    observer.unobserve(valueDisplay);
                }
            });
        }
    
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };
    
        const observer = new IntersectionObserver(handleIntersect, options);
    
        valueDisplays.forEach((valueDisplay) => {
            observer.observe(valueDisplay);
        });
    }


   

    /**
	 * initialize instance
	 */
    init() {
        this.indexSwiper()
        this.filter()
        this.pizza()
        this.burguer()
        this.pratos()
        this.startCounterAnimation()

        console.log('hello')

    }

}

new Index
