//https://code.tutsplus.com/tutorials/submit-a-form-without-page-refresh-using-jquery--net-59

function loadCB500F() {
  document.getElementById("dynamic").innerHTML = "<p>testing</p>";
}

function loadZX6R() {
  document.getElementById("dynamic").innerHTML = "<p>testing2</p>";
}

function loadSTREETTRIPLE() {
  document.getElementById("dynamic").innerHTML = "<p>testing3</p>";
  hideForm();
}

function loadS1000R() {
  document.getElementById("dynamic").innerHTML = "<p>testing4</p>";
}

function loadHOME() {
  document.getElementById("dynamic").innerHTML = "";
  showForm();
}

function loadQuestionnaire() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "pages/Questionnairev2.html", true);
  xhr.onreadystatechange = function () {
    if (this.readyState !== 4) return;
    if (this.status !== 200) return; // or whatever error handling you want
    document.getElementById("dynamic").innerHTML = this.responseText;
  };
  xhr.send();
  //document.getElementById("dynamic").innerHTML = ""
}

function onLoad() {
  console.log(Math.PI + 1 + "=pi+1");
}

$(document).ready(function(){
  $("form").on('submit', function(event){
    const newLocal = event.preventDefault();
    alert("Submit prevented");
  });
});

function hideForm(){
  document.getElementById("questionnaire_form").setAttribute("hidden", true);
}

function showForm(){
  document.getElementById("questionnaire_form").removeAttribute("hidden");
}