// Info
fetch('data/info.json')
  .then(r => r.json())
  .then(json => loadInfo(json));

function loadInfo(info) {
  const table = document.querySelector('table.info tbody');
  const view = `<tr>
    <td colspan="3">
      ${info.cpu}
    </td>
  </tr>`;
  table.insertAdjacentHTML('beforeend', view);
  for (const field in info.usage) {
    const view = `<tr>
      <td>${field.toLocaleUpperCase()}</td>
      <td class="w-75 align-middle">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: ${
            info.usage[field]
          }%;"></div>
        </div>
      </td>
      <td>${info.usage[field]}%</td>
    </tr>`;
    table.insertAdjacentHTML('beforeend', view);
  }
}

// CPU
fetch('data/cpu.json')
  .then(r => r.json())
  .then(json => loadCpu(json));

function loadCpu(cpu) {
  const data = [cpu.user, cpu.system, cpu.idle].map(c => c.replace('%', ''));
  loadCpuChart(data);

  const table = document.querySelector('table.cpu tbody');
  let count = 0;
  let row = '';
  for (const field in cpu) {
    count += 1;
    row += `<td>${field}:</td><td>${cpu[field]}</td>`;
    if (count % 3 === 0) {
      row = `<tr>${row}</tr>`;
      table.insertAdjacentHTML('beforeend', row);
      row = '';
    }
  }
  row = `<tr>${row}</tr>`;
  table.insertAdjacentHTML('beforeend', row);
}

// Memory
fetch('data/memory.json')
  .then(r => r.json())
  .then(json => loadMemory(json));

function loadMemory(memory) {
  const table = document.querySelector('table.memory tbody');
  let count = 0;
  let row = '';
  for (const field in memory) {
    count += 1;
    row += `<td>${field}:</td><td>${memory[field]}</td>`;
    if (count % 2 === 0) {
      row = `<tr>${row}</tr>`;
      table.insertAdjacentHTML('beforeend', row);
      row = '';
    }
  }
  loadMemoryChart([memory.used, memory.free].map(c => c.replace('G', '')));
}

// Network
fetch('data/network.json')
  .then(r => r.json())
  .then(json => loadNetwork(json));

function loadNetwork(nets) {
  const table = document.querySelector('table.net tbody');
  for (const net of nets) {
    const view = `<tr>
      <td>${net.network}</td>
      <td>${net.rx}</td>
      <td>${net.tx}</td>
    </tr>`;
    table.insertAdjacentHTML('beforeend', view);
  }
}

function loadCpuChart(values) {
  const ctx = document.getElementById('cpu-chart').getContext('2d');
  const data = {
    datasets: [
      {
        data: values,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
        ],
        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
      },
    ],
    labels: ['User', 'System', 'Idle'],
  };
  const options = {};
  const config = {
    type: 'pie',
    data: data,
    options: options,
  };
  const myChart = new Chart(ctx, config);
}

function loadMemoryChart(values) {
  const ctx = document.getElementById('memory-chart').getContext('2d');
  const data = {
    datasets: [
      {
        data: values,
        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
      },
    ],
    labels: ['Used', 'Free'],
  };
  const options = {};
  const config = {
    type: 'pie',
    data: data,
    options: options,
  };
  const myChart = new Chart(ctx, config);
}
