fetch('/api/config.php')
  .then(res => res.text())
  .then(text => loadConf(text))

function loadConf(config) {
  const configElement = document.querySelector('#dhcp-config')
  configElement.innerText = config
  let editor = ace.edit('dhcp-config')
  editor.setTheme('ace/theme/terminal')
  editor.setReadOnly(true)
  editor.session.setMode("ace/mode/text")
  editor.session.setUseWrapMode(true)
}
