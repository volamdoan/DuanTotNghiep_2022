var buttonToggle  = document.getElementById("alter");
var eye           = document.getElementById("eye");
var inputPass     = document.getElementById("oldpassword");

var buttonToggle1  = document.getElementById("alter1");
var eye1       = document.getElementById("eye1");
var inputPass1     = document.getElementById("newpassword");

var buttonToggle2  = document.getElementById("alter2");
var eye2     = document.getElementById("eye2");
var inputPass2     = document.getElementById("cnewpassword");

var buttonToggle3  = document.getElementById("alter3");
var eye3  = document.getElementById("eye3");
var inputPass3    = document.getElementById("password");


buttonToggle.onclick = function() {
  alterViewPass(inputPass, eye);
}
buttonToggle1.onclick = function() {
  alterViewPass(inputPass1, eye1);
}
buttonToggle2.onclick = function() {
  alterViewPass(inputPass2, eye2);
}
buttonToggle3.onclick = function() {
  alterViewPass(inputPass3, eye3);
}


// Function to alter input type and style button appearence
function alterViewPass(input, eye) {
  if (input.type === "text") {
    eye.className = "far fa-eye-slash";
    input.type = "password";
  }
  else {
    eye.className = "far fa-eye ";
    input.type = "text";
  }  
}
//1