const enviarInfoPost = () => {
  let nombre = document.getElementById("nombre").value;
  let pais = document.getElementById("pais").value;
  let xml = new XMLHttpRequest();
  let info = `nombre=${nombre}&pais=${pais}`;
  xml.onreadystatechange = function () {
    if (xml.readyState == 4 && xml.status == 200) {
      console.log(xml.responseText);
      document.getElementById("response").innerText = "";
      document.getElementById("response").innerText = xml.responseText;
    }
  };

  xml.open("POST", "server.php", true);
  xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xml.send(info);
};

const enviarInfoGet = () => {
  let num1 = document.getElementById("num1").value;
  let num2 = document.getElementById("num2").value;
  let cadena = `num1=${num1}&num2=${num2}`;
  let xml = new XMLHttpRequest();
  xml.onreadystatechange = function () {
    if (xml.readyState == 4 && xml.status == 200) {
      console.log(xml.responseText);
      document.getElementById("res").innerText = "";
      document.getElementById("res").innerText = xml.responseText;
    }
  };
  xml.open("GET", "server.php?" + cadena, true);
  xml.send();
};

document.getElementById("btn").addEventListener("click", enviarInfoGet);
