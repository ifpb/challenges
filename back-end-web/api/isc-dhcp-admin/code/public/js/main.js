
function render(template, node) {
  fetch(`templates/${template}.html`)
    .then(res => res.text())
    .then(text => {
      // view
      document.querySelector(node).innerHTML = text
      // script
      let s = document.createElement('script')
      s.type = 'text/javascript'
      s.src = `js/templates/${template}.js`
      document.body.appendChild(s)
    })
}

function loadMenuClick() {
  let navLinks = Array.from(document.querySelectorAll('.nav-item .nav-link'))
  navLinks.forEach((navLink) => {
    navLink.addEventListener('click', event => {
      event.preventDefault()
      navLinks.map(n => n.classList.remove('active'))
      navLink.classList.add('active')
      render(navLink.dataset.path, 'main')
    })
  })
}

render('home', 'main')
loadMenuClick()
