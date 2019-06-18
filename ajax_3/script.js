function ajax() {
  let str = question.value;
  console.log(str);
//  if (str == "") document.getElementById("txtHint").innerHTML = ""; return;
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let antwoord = this.responseText;
      console.log(antwoord);
      txtHint.innerHTML = antwoord;
    }
  };
  xmlhttp.open("GET", "getdata.php?q=" + str, true);
  xmlhttp.send();
}

let question = document.getElementById('question');
question.addEventListener('keyup', ajax);
