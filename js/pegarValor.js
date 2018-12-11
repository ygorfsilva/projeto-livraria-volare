function pegarValor(token){
  // Pega o valor do token do facebook e joga pro php
  dados = JSON.stringify(token);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "php/CRUDS/pegarValor.php?x=" + dados, true);
  xmlhttp.send();
}
