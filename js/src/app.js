// PC ANIMATION
let headerAnimationCounter = 0
class HeaderAnimation {
  constructor () {
    this.textDisplay = document.querySelector('.text')
    this.pcButton = document.querySelector('.pc__button')
    this.text = `Hello! My name is Renato and I'm web developer`
    this.pcButton = document.querySelector('.pc__button')
    this.slideInLeft = document.querySelector('.slide-in-left')
    this.type()
    this.showPcButton()
    this.slideFromLeft()
  }
  type () {
    if (headerAnimationCounter < this.text.length) {
      this.textDisplay.innerHTML += this.text.charAt(headerAnimationCounter)
      headerAnimationCounter++
      setTimeout(this.type.bind(this), 100)
    }
  }
  showPcButton () {
    setTimeout(() => {
      this.pcButton.style.opacity = 1
    }, this.text.length * 100)
  }
  slideFromLeft () {
    setTimeout(() => {
      this.slideInLeft.style.transform = 'translateX(0)'
    }, this.text.length * 100 + 200)
  }
}

class Search {
  constructor () {
    this.input = document.querySelector('#search-bar')
    this.output = document.querySelector('.search-results')
    this.loader = document.querySelector('.search-bar__loader--show')
    this.closeBtn = document.querySelector('.search-bar__close--wrapper')
    this.searchBtn = document.querySelector('.search__icon')
    this.searchOverlay = document.querySelector('.search-overlay')
    this.body = document.querySelector('body')
    this.typingTimer
    this.events()
    console.log(this.closeBtn)
  }

  events () {
    this.input.addEventListener('input', this.displayResults.bind(this))
    this.closeBtn.addEventListener('click', this.closeOverlay.bind(this))
    this.searchBtn.addEventListener('click', this.openOverlay.bind(this))
  }

  openOverlay () {
    this.searchOverlay.classList.add('search-overlay--visible')
    this.body.style.overflow = 'hidden'
    this.input.focus()
  }

  closeOverlay () {
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
      this.loader.style.display = 'none'
      this.output.innerHTML = ''
    } else {
      this.loader.style.display = 'block'
      fetch(`http://localhost/renatofekete/wp-json/wp/v2/posts?search=${txt}`)
        .then(response => {
          return response.json()
        })
        .then(data => {
          this.loader.style.display = 'none'
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

let headerAnimation = new HeaderAnimation()
let search = new Search()
