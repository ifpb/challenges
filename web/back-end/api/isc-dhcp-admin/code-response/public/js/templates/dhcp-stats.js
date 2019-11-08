
fetch('/api/stats.php')
  .then(res => res.json())
  .then(json => loadStats(json))

function loadStats(stats) {
  deviceList(stats.manufacturers)
  deviceChart(stats.manufacturers)
}

function deviceList(manufacturers) {
  const manufacturersElement = document.querySelector('.vendor-list tbody')
  const view = manufacturers
    .map(m => `<tr><td>${m.type}</td><td>${m.count}</td></tr>`)
    .join('')
  manufacturersElement.innerHTML = view
}

function deviceChart(manufacturers) {
  const chart = document.getElementById('device-chart').getContext('2d')
  const labels = manufacturers.reduce((r, m) => {
    r.push(m.type)
    return r
  }, [])
  const data = manufacturers.reduce((r, m) => {
    r.push(m.count)
    return r
  }, [])
  const conf = {
    type: 'doughnut',
    data: {
      labels: labels,
      datasets: [{
        backgroundColor: dynamicColors(data.length),
        data: data
      }]
    }
  }
  console.log(data)
  new Chart(chart, conf)
}

function dynamicColors(count) {
  const colors = []
  for (let flag = 0; flag < count; flag++) {
    const r = Math.floor(Math.random() * 255)
    const g = Math.floor(Math.random() * 255)
    const b = Math.floor(Math.random() * 255)
    const color = `rgb( ${r}, ${g}, ${b})`
    colors.push(color)
  }
  return colors
}