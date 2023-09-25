class Page {
    constructor() {
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

    init() {
        this.openMenu()
        console.log('hello')
    }
}

new Page