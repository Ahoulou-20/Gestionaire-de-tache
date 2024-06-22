function validateForm() {
  let email = document.getElementById("email").value;
  let mdp = document.getElementById("password").value;
  if (email !== "" || mdp !== "") {
    document.getElementById("error").innerHTML =
      "Veuillez remplir correctement les champs !";
    return false;
  } else {
    return true;
  }
}
