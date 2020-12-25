var Form1 = document.getElementById("Form1");
var Form2 = document.getElementById("Form2");

var Next1 = document.getElementById("Next1");
var Back1 = document.getElementById("Back1");

var progress = document.getElementById("progress");

var ime = document.getElementById("ime").value;



function dalje() {
    var x = document.getElementById("username").value;
    if (x == "") {
        alert("Morate uneti Vaše ime!");
        return false;
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
