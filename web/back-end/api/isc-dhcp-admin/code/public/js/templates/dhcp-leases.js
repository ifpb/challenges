
fetch('/api/leases.php')
  .then(res => res.json())
  .then(json => loadLeases(json))

function loadLeases(leases) {
  const leasesElement = document.querySelector('.leases tbody')
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
        <td>${l.manufacturer || 'others'}</td>
      </tr>`
    })
    .join('')
    leasesElement.innerHTML = view
}