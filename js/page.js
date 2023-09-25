class Page {
    constructor() {
        this.init()
    }

    loader() {
        setTimeout(() => {
            const loader = document.querySelector(".loader-wrapper");
            const content = document.querySelector(".main");
            
            loader.style.transform = "translateY(-100%)";
            content.style.transform = "translateY(0)";
            
            setTimeout(() => {
                loader.style.display = "none";
            }, 500); 
        }, 1000);
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

    init() {
        this.loader()
        this.openMenu()
        console.log('hello')
    }
}

new Page