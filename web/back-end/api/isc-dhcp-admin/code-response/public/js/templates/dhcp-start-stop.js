
function loadStartStop() {
  const startBtn = document.querySelector('#start-btn')
  const stopBtn = document.querySelector('#stop-btn')
  
  startBtn.addEventListener('click', (event) => {
    event.preventDefault()
    fetch('/api/service.php?command=start')
      .then(res => status())
    })
    
  stopBtn.addEventListener('click', (event) => {
    event.preventDefault()
    fetch('/api/service.php?command=stop')  
      .then(res => status())
  })
}

function status() {
  fetch('/api/service.php?command=status')
    .then(res => res.json())
    .then(json => {
      const badge = document.querySelector('.badge')
      if (json.status === 'active') {
        badge.classList.remove('badge-warning')
        badge.classList.add('badge-success')
      } else {
        badge.classList.remove('badge-success')
        badge.classList.add('badge-warning')
      }
      badge.innerHTML = json.status
    })
}

loadStartStop()
status()