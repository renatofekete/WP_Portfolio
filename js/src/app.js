class Search {
  constructor () {
    this.input = document.querySelector('#search-bar')
    this.output = document.querySelector('.search-results')
    this.loader = document.querySelector('.search-bar__loader')
    this.closeBtn = document.querySelector('.search-bar__close')
    this.searchBtn = document.querySelector('.search__icon')
    this.searchOverlay = document.querySelector('.search-overlay')
    this.body = document.querySelector('body')
    this.typingTimer
    this.events()
  }

  events () {
    if (this.searchBtn) {
      this.input.addEventListener('input', this.displayResults.bind(this))
      this.closeBtn.addEventListener('click', this.closeOverlay.bind(this))
      this.searchBtn.addEventListener('click', this.openOverlay.bind(this))
    }
  }

  openOverlay () {
    this.searchOverlay.classList.add('search-overlay--visible')
    this.body.style.overflow = 'hidden'
    this.input.removeAttribute('disabled')
    setTimeout(() => this.input.focus(), 600)
  }

  closeOverlay () {
    this.input.blur()
    this.input.setAttribute('disabled', 'disabled')
    this.searchOverlay.classList.remove('search-overlay--visible')
    this.body.style.overflow = 'auto'
    this.input.value = ''
    this.output.innerHTML = ''
  }

  displayResults () {
    clearTimeout(this.typingTimer)
    this.typingTimer = setTimeout(this.getData.bind(this), 200)
  }
  getData () {
    let txt = this.input.value
    if (this.input.value.length < 3) {
      this.loader.style.opacity = '0'
      this.output.innerHTML = ''
    } else {
      this.loader.style.opacity = '1'
      fetch(
        `https://renatofekete.com/wp-json/wp/v2/posts?search=${txt}&per_page=5`
      )
        .then(response => {
          return response.json()
        })
        .then(data => {
          this.loader.style.opacity = '0'
          this.output.innerHTML = ''
          data.map(
            post =>
              (this.output.innerHTML += `
            <h3><a href="${post.link}">${post.title.rendered}</a></h4>`)
          )
        })
    }
  }
}

class MobileMenu {
  constructor () {
    this.hamburger = document.querySelector('.hamburger__menu')
    this.menu = document.querySelector('.navigation__menu')
    this.closeBtn = document.querySelector('.navigation__menu-close')
    this.events()
  }
  events () {
    if (this.hamburger) {
      this.hamburger.addEventListener('click', this.openMenu.bind(this))
      this.closeBtn.addEventListener('click', this.closeMenu.bind(this))
    }
  }

  openMenu () {
    this.menu.style.display = 'flex'
  }
  closeMenu () {
    this.menu.style.display = 'none'
  }
}

let search = new Search()
let mobileMenu = new MobileMenu()
