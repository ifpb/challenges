const hostname = document.querySelector('#hostname')
const operatingSystem = document.querySelector('#operating-system')
const uptime = document.querySelector('#uptime')
const cpu = document.querySelector('#cpu')
const cpuLast1 = document.querySelector('#cpu-last-1')
const cpuLast10 = document.querySelector('#cpu-last-10')
const cpuLast15 = document.querySelector('#cpu-last-15')
const memorySize = document.querySelector('#memory-size')
const memoryUsed = document.querySelector('#memory-used')
const memoryFree = document.querySelector('#memory-free')

const urls = {
  cpuStatus: "http://localhost:8080/v1/stats.php?info=cpuStatus",
  cpuName: "http://localhost:8080/v1/stats.php?info=cpuName",
  memory: "http://localhost:8080/v1/stats.php?info=memory",
  overview: "http://localhost:8080/v1/stats.php?info=overview"
}

loadStatusInfo()

function loadStatusInfo() {
  fetch(urls.overview)
    .then(res => res.json())
    .then(json => addOverview(json))
  fetch(urls.memory)
    .then(res => res.json())
    .then(json => addMemory(json))
  fetch(urls.cpuName)
    .then(res => res.json())
    .then(json => addCpuName(json))
  fetch(urls.cpuStatus)
    .then(res => res.json())
    .then(json => addCpuStatus(json))
  window.setTimeout(loadStatusInfo, 5000)
}

function addCpuStatus(cpuStatus) {
  cpuLast1.innerHTML = cpuStatus.cpuLast.last1 + '%'
  cpuLast10.innerHTML = cpuStatus.cpuLast.last10 + '%'
  cpuLast15.innerHTML = cpuStatus.cpuLast.last15 + '%'
}

function addCpuName(cpuName) {
  cpu.innerHTML = cpuName.cpu
}

function addMemory(memory) {
  let used = parseInt(memory.memoryUsageUsed)
  let unused = parseInt(memory.memoryUsageUnused)
  let total = used + unused
  used = (used / total * 100).toFixed(0)
  memorySize.innerHTML = (total / 2 ** 10).toFixed(0) + 'GB'
  memoryUsed.innerHTML = (used) + '%'
  memoryFree.innerHTML = (100 - used) + '%'
}

function addOverview(overview) {
  hostname.innerHTML = overview.hostname
  operatingSystem.innerHTML = overview.operatingSystem
  uptime.innerHTML = overview.uptime
}