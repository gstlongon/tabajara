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
        const btnPizza = document.querySelector('.index__btn-pizza')
        const btnLanche = document.querySelector('.index__btn-lanche')
        const btnSobremesa = document.querySelector('.index__btn-sobremesa')

        btnPizza.addEventListener('click', () => {
            areaPizza.classList.add('active')
            areaLanche.classList.remove('active')
            areaSobremesa.classList.remove('active')
            btnPizza.classList.add('active')
            btnLanche.classList.remove('active')
            btnSobremesa.classList.remove('active')
        })

        btnLanche.addEventListener('click', () => {
            areaPizza.classList.remove('active')
            areaLanche.classList.add('active')
            areaSobremesa.classList.remove('active')
            btnPizza.classList.remove('active')
            btnLanche.classList.add('active')
            btnSobremesa.classList.remove('active')
        })

        btnSobremesa.addEventListener('click', () => {
            areaPizza.classList.remove('active')
            areaLanche.classList.remove('active')
            areaSobremesa.classList.add('active')
            btnPizza.classList.remove('active')
            btnLanche.classList.remove('active')
            btnSobremesa.classList.add('active')
        })
    }

    pizza() {
        pizzaJson.forEach((item, index) => {
            let pizzaItem = document.querySelector('.index__model .index__pizza-item').cloneNode(true)
            document.querySelector('.index__pizza-area').append(pizzaItem)
    
            // Preencher os dados de cada pizza
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
            //console.log(item)
            let burguerItem = document.querySelector('.index__model .index__burguer-item').cloneNode(true)
            //console.log(burguerItem)
            document.querySelector('.index__burguer-area').append(burguerItem)
        
            // preencher os dados de cada burguer
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


   

    /**
	 * initialize instance
	 */
    init() {
        this.indexSwiper()
        this.filter()
        this.pizza()
        this.burguer()
        console.log('hello')

    }

}

new Index
