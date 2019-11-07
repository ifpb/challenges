
fetch('/api/cards.php')
  .then(res => res.json())
  .then(json => loadCards(json))

fetch('/api/subnets.php')
  .then(res => res.json())
  .then(json => loadSubnets(json))

function loadCards(cards) {
  const cardsElement = document.querySelector('.cards')
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

function loadSubnets(dhcp) {
  const subnetsElement = document.querySelector('.subnets tbody')
  const sharedNetworksElement = document.querySelector('.shared-networks tbody')
  
  const subnetsView = dhcp
    .subnets
    .map(s => subnetView(s))
    .join('')
  subnetsElement.innerHTML = subnetsView

  const sharedNetworksView = dhcp["shared-networks"]
    .map(s => sharedNetworkView(s))
    .join('')
  sharedNetworksElement.innerHTML = sharedNetworksView
}

function subnetView(s) {
  let utilization = s.used / s.defined
  return `<tr>
    <td>${s.location}</td>
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
}

function sharedNetworkView(s) {
  let utilization = s.used / s.defined
  return `<tr>
    <td>${s.location}</td>
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
}
