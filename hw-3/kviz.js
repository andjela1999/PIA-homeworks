var Form1 = document.getElementById("Form1");
var Form2 = document.getElementById("Form2");

var Next1 = document.getElementById("Next1");
var Back1 = document.getElementById("Back1");

var progress = document.getElementById("progress");

var ime = document.getElementById("ime").value;
var prezime = document.detElementById("prezime").value;


function dalje() {

    if (ime == "" || ime == null || prezime == "" || prezime == null) {

        alert("unesite sve podatke");
    }

    Form1.style.left = "-450px";
    Form2.style.left = "40px";
    progress.style.width = "240px";


}


function nazad() {

    Form1.style.left = "40px";
    Form2.style.left = "450px";
    progress.style.width = "120px";

}