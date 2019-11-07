fetch('/api/log.php')
  .then(res => res.text())
  .then(text => loadLog(text))

function loadLog(log) {
  const logElement = document.querySelector('#dhcp-log')
  logElement.innerText = log
  let editor = ace.edit('dhcp-log')
  editor.setTheme('ace/theme/terminal')
  editor.setReadOnly(true)
  editor.session.setMode("ace/mode/text")
  editor.session.setUseWrapMode(true)
}