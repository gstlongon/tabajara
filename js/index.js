class Index {

    /**
     * create a home
     */
    constructor() {
        this.cartItems = []
        this.init()
    }


    openMenu() {
        const navOpen = document.querySelectorAll('.nav__open')
        const menu = document.querySelector('.nav__menu')
        const navClose = document.querySelectorAll('.nav__close')
        const navBtn = document.querySelectorAll('.nav__btn')

        navOpen.forEach(btn => {
            btn.addEventListener('click', () => {
                menu.classList.add('active')
            })
        })

        navClose.forEach(btn => {
            btn.addEventListener('click', () => {
                menu.classList.remove('active')
            })
        })


        navBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                menu.classList.remove('active')
            })
        })
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
            speed: 1000,
            
          });
    }

    videoSpeed() {
        const videos = document.querySelectorAll('video')

        videos.forEach(video => {
            video.playbackRate = 0.5
        })
    }
  
    async displayItems(categoria) {
    if (categoria == undefined){
        categoria = 'pizzas'     
    }else{
        categoria = categoria
    }
        const response = await fetch(`itens.php?categoria_nome=${categoria}`);
        const fetchedItems = await response.json();
        const itemsContainer = document.querySelector('.index__item-area');
        itemsContainer.innerHTML = ''; 
    
        fetchedItems.forEach((item, index) => {
            if (item.promocao === '1') {
                item.valorAntigo = `R$ ${item.valor}`;
            } else {
                item.valor2 = `R$ ${item.valor}`;
            }
        
            let itemElement = document.createElement('div');
            itemElement.classList.add('col-xl-3', 'col-lg-4', 'col-md-6', 'col-xs-12');
        
            // Verifica se há valor antigo para exibir riscado
            let priceHTML = item.valorAntigo
                ? `<div class="index__item--price"><del>R$ ${item.valor_promocao}</del> Por R$${item.valor}</div>`
                : `<div class="index__item--price">R$${item.valor}</div>`;
        
            itemElement.innerHTML = `
                <div class="index__item">
                    <div class="index__item--img"><img src="img2/${item.foto}" alt=""></div>
                    ${priceHTML}
                    <div class="index__item--name">${item.nome}</div>
                    <div class="index__item--desc">${item.descricao}</div>
                    <div class="index__sale"><img src="img/promotion.png" alt=""></div>
                    <button class="index__item--add">Adicionar</button>
                </div>
            `;
    
            itemsContainer.appendChild(itemElement);
    
            const addToCartButton = itemElement.querySelector('.index__item--add');
            const cartButton = document.querySelector('.footer__cart-btn');
    
            addToCartButton.addEventListener('click', () => {
                cartButton.classList.add('active');
                cartButton.classList.toggle('animate');
                this.addToArray(item);
                this.addToCart(item);
            });
    
            if (item.promocao === '1') {
                const sale = itemElement.querySelector('.index__item');
                sale.classList.add('active');
            }
        });
    }

    filterItems() {
        const buttons = document.querySelectorAll('.index__btn');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const categoria = button.getAttribute('data-categoria');
                this.displayItems(categoria);
            });

            button.addEventListener('change', () => {
                button.classList.add('active')
            })
        });
    }
    
    addToCart() {
        const cartItems = document.querySelector('.cart-items');
        const cartTotal = document.getElementById('cart-total');
        const cartItemsVerificacao = document.querySelector('.cart-items');
        cartItems.innerHTML = '';
    
        let newTotal = 0; 
    
        this.cartItems.forEach((item) => {
            const cartItem = document.createElement('li');
            cartItem.innerHTML = `
                <div class="card__item">
                    <div class="card__photo">
                        <img class="card__img" src="img2/${item.foto}" alt="${item.nome}">
                    </div>
                    <div class="card__description">
                        <span class="card__name">${item.nome}</span>
                        <span class="card__info">${item.descricao}</span>
                        <span class="card__price">R$ ${item.valor}</span>
                    </div>
                    <button class="card__trash">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32"><g transform="translate(-259 -203)"><path d="M282,211H262a1,1,0,0,1,0-2h20a1,1,0,0,1,0,2Zm-1,20a2,2,0,0,1-2,2H265a2,2,0,0,1-2-2V213h18v18Zm-12-25a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v1h-6v-1Zm14,1h-6v-2a2,2,0,0,0-2-2h-6a2,2,0,0,0-2,2v2h-6a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2v18a4,4,0,0,0,4,4h14a4,4,0,0,0,4-4V213a2,2,0,0,0,2-2v-2a2,2,0,0,0-2-2Zm-11,24a1,1,0,0,0,1-1V218a1,1,0,0,0-2,0v12a1,1,0,0,0,1,1Zm-5,0a1,1,0,0,0,1-1V218a1,1,0,0,0-2,0v12a1,1,0,0,0,1,1Zm10,0a1,1,0,0,0,1-1V218a1,1,0,0,0-2,0v12a1,1,0,0,0,1,1Z" fill="#f80000" fill-rule="evenodd"/></g></svg>
                    </button>
                </div>
            `;
    
            cartItems.appendChild(cartItem);
    
            const itemPrice = parseFloat(item.valor);
            newTotal += itemPrice; 
    
            const removeItemButton = cartItem.querySelector('.card__trash');
            removeItemButton.addEventListener('click', () => {
                const itemPriceToRemove = parseFloat(item.valor);
                this.cartItems = this.cartItems.filter((cartItem) => cartItem.item_id !== item.item_id);
                cartItems.removeChild(cartItem);
    
                let textCount = document.querySelector('.btn__count');
                const cardBtn = document.querySelector('.footer__cart-btn');
                const modal = document.getElementById("pedido");
                const currentTotal = parseFloat(cartTotal.innerText);
                const newTotal = currentTotal - itemPriceToRemove;
                cartTotal.innerText = newTotal.toFixed(2);
    
                if (cartItemsVerificacao.childElementCount === 0) {
                    cardBtn.classList.remove("active");
                    textCount.classList.remove("active");
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                }
            });
        });
    
        cartTotal.innerText = newTotal.toFixed(2); 
    }
    

    addToArray(item) {
        this.cartItems.push(item)
    }

    generateWhatsAppLink(items, nome, telefone, cep, endereco, numero, complemento, bairro) {
        let mensagem = `Olá, meu nome é ${nome}. Meu telefone é ${telefone}. Meu endereço é ${endereco}, ${numero}, ${complemento}, ${bairro}. Meu CEP é ${cep}.%0a%0a`;

        items.forEach((item, index) => {
            if (item.valor !== undefined) {
                mensagem += `${item.nome} - R$ ${item.valor}%0a`;
            }else {
                mensagem += ` ${item.nome} - R$ Indisponível%0a`;
            }
        });
    
        const numeroWhatsApp = '14998979211';
    
        return `https://api.whatsapp.com/send?phone=${numeroWhatsApp}&text=${mensagem}`;
    }

    steps() {
        const avanceBtn = document.querySelector('.form__avance')
        const finishBtn = document.querySelector('.form__finish')
        const form = document.querySelector('.form')
        const cart = document.querySelector('.cart')
        const nomeInput = document.querySelector('input[name="nome"]');
        const telefoneInput = document.querySelector('input[name="telefone"]');
        const cepInput = document.querySelector('input[name="cep"]');
        const enderecoInput = document.querySelector('input[name="endereco"]');
        const numeroInput = document.querySelector('input[name="numero"]');
        const complementoInput = document.querySelector('input[name="complemento"]');
        const bairroInput = document.querySelector('input[name="bairro"]');
        
        finishBtn.style.display = 'none';
        form.style.display = 'none';

        avanceBtn.addEventListener('click', () => {
            form.style.display = 'block';
            cart.style.display = 'none';
            finishBtn.style.display = 'block';
            avanceBtn.style.display = 'none';
        })

        finishBtn.addEventListener('click', () => {
            const nome = nomeInput.value;
            const telefone = telefoneInput.value;
            const cep = cepInput.value;
            const endereco = enderecoInput.value;
            const numero = numeroInput.value;
            const complemento = complementoInput.value;
            const bairro = bairroInput.value;
        
            const whatsappLink = this.generateWhatsAppLink(this.cartItems, nome, telefone, cep, endereco, numero, complemento, bairro);
        
            window.open(whatsappLink);
        });
    }

    clearCart() {
        const cartItems = document.querySelector('.cart-items');
        const cartTotal = document.getElementById('cart-total');
    
        while (cartItems.firstChild) {
            this.cartItems = []
            cartItems.removeChild(cartItems.firstChild);
        }
    
        cartTotal.innerText = '0.00';
    
        const cardBtn = document.querySelector('.footer__cart-btn');
        const textCount = document.querySelector('.btn__count');
        cardBtn.classList.remove('active');
        textCount.classList.remove('active');
    
        const modal = document.getElementById('pedido');
        const modalInstance = bootstrap.Modal.getInstance(modal);
        if (modalInstance) {
            modalInstance.hide();
        }
    }

    btnClear() {
        const clearCartButton = document.querySelector('.clear-cart-button');
        const finishBtn = document.querySelector('.form__finish')
        const avanceBtn = document.querySelector('.form__avance')
        const form = document.querySelector('.form')
        const cart = document.querySelector('.cart')
        const backBtn = document.querySelector('.modal-back')


        finishBtn.addEventListener('click', () => {
            this.clearCart()
            form.style.display = 'none'
            cart.style.display = 'block'
            finishBtn.style.display = 'none'
            avanceBtn.style.display = 'block'
            backBtn.classList.remove('active')


        });
        clearCartButton.addEventListener('click', () => {
            form.style.display = 'none'
            finishBtn.style.display = 'none'
            cart.style.display = 'block'
            avanceBtn.style.display = 'block'
            backBtn.classList.remove('active')

            this.clearCart()
        })

        avanceBtn.addEventListener('click', () => {
            backBtn.classList.add('active')
        })

        backBtn.addEventListener('click', () => {
            cart.style.display = 'block'
            form.style.display = 'none'
            finishBtn.style.display = 'none'
            avanceBtn.style.display = 'block'
            backBtn.classList.remove('active')



        })

        
    }

    countCart() {
        const btnAdd = document.querySelectorAll('.index__item--add');
        let textCount = document.querySelector('.btn__count');
        const cardBtn = document.querySelector('.footer__cart-btn')
        
        
        btnAdd.forEach(btn => {
            btn.addEventListener('click', () => {
                cardBtn.classList.add("active")
                textCount.classList.add("active")
            });
        });
    }


    startCounterAnimation() {
        const valueDisplays = document.querySelectorAll('.index__numbers-main');
        const icon = document.querySelectorAll('.index__number-icon')
        const img = document.querySelector('.index__benefit-img')

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

                    icon.forEach( icon => {
                        icon.classList.add('active')
                        }
                    )
                    img.classList.add('active')
                    
                    animateValue(valueDisplay, startValue, endValue, duration, icon, img);
                    observer.unobserve(valueDisplay, icon, img);
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
        this.openMenu()
        this.indexSwiper()
        this.videoSpeed()
        // this.filter()    
        this.displayItems()
        this.steps()
        this.btnClear()
        this.countCart()
        this.filterItems();
        this.startCounterAnimation()
    }

}

new Index
