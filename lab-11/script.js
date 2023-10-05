function clearerror() {
  errors = document.getElementsByClassName("formerror");
  for (let x of errors) {
    x.innerHTML = "";
  }
}
function seterror(id, error) {
  element = document.getElementById(id);
  element.getElementsByClassName("formerror")[0].innerHTML = error;
}
function formvalidate() {
  var valreturn = true;
  clearerror();
  var fname = document.forms["myform"]["fname"].value;
  if (fname.length < 6) {
    seterror("fname", "**Your first name is too short");
    valreturn = false;
  }
  if (fname.length == 0) {
    seterror("fname", "**Your first name cannot be empty");
    valreturn = false;
  }
  var lname = document.forms["myform"]["lname"].value;
  if (lname.length < 6) {
    seterror("lname", "**Your Last name is too short");
    valreturn = false;
  }
  if (lname.length == 0) {
    seterror("lname", "**Your last name cannot be empty");
    valreturn = false;
  }
  var email = document.forms["myform"]["email"].value;
  if (email.length > 15) {
    seterror("email", "**Your email lenght is too long");
    valreturn = false;
  }
  var pass = document.forms["myform"]["pass"].value;
  if (pass.length < 6) {
    seterror("pass", "**Your password is too short");
    valreturn = false;
  }
  var cpass = document.forms["myform"]["cpass"].value;
  if (cpass != pass) {
    seterror("cpass", "**Your password is not matching");
    valreturn = false;
  }
  var add = document.forms["myform"]["add"].value;
  if (add.length < 6) {
    seterror("add", "**Your length of address is too short");
    valreturn = false;
  }
  return valreturn;
}
