const cardsElement = document.querySelector('.cards')
const subnetsElement = document.querySelector('.subnets tbody')
const leasesElement = document.querySelector('.leases tbody')

fetch('/api/cards.php')
  .then(res => res.json())
  .then(json => loadCards(json))

fetch('/api/leases.php')
  .then(res => res.json())
  .then(json => loadLeases(json))

fetch('/api/subnets.php')
  .then(res => res.json())
  .then(json => loadSubnets(json))

function loadCards(cards) {
  const view = cards
    .map(c => {
      return `<div class="col">
        <div class="card d-flex flex-row shadow-sm">
          <div class="prepend-icon ${c.bg} text-white p-3 d-flex align-items-center">
            <span data-feather="${c.icon}"></span>
          </div>
          <div class="p-2">
            <p class="m-0">${c.name}</p>
            <h4 class="m-0">${c.value} ${c.name === 'CPU' ? '%' : ''}</h2>
          </div>
        </div>
      </div>` 
    })
    .join('')
    cardsElement.innerHTML = view
    feather.replace()
}

function loadLeases(leases) {
  const view = leases
    .map(l => {
      let valid = new Date(l.valid)
      let option = {
        hour: '2-digit',
        minute: '2-digit',
        year: '2-digit',
        month: 'numeric',
        day: 'numeric'
      }
      return `<tr>
        <td>${l.mac}</td>
        <td>${l.ip}</td>
        <td>${l.hostname}</td>
        <td>${valid.toLocaleDateString("pt-BR", option)}</td>
        <td>${l.manufacturer}</td>
      </tr>`
    })
    .join('')
    leasesElement.innerHTML = view
}

function loadSubnets(dhcp) {
  const view = dhcp.subnets
    .map(s => {
      let utilization = s.used / s.defined
      return `<tr>
        <td>${s.range}</td>
        <td>${s.used} (${(utilization).toFixed(2)} %)</td>
        <td>${s.defined}</td>
        <td>${s.free}</td>
        <td class="align-middle">
          <div class="progress" style="height: .6rem;">
            <div class="progress-bar bg-success" role="progressbar" style="width: ${utilization}%" aria-valuenow="${utilization}" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
        </td>
      </tr>`
    })
    .join('')
    subnetsElement.innerHTML = view
}
