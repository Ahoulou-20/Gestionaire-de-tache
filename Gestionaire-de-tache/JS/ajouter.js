function validateForm() {
  const nom = document.getElementById("name").value;
  const description = document.getElementById("description").value;
  const date = document.getElementById("date").value;
  const heure = document.getElementById("time").value;
  if (nom == "" || description == "" || date == "" || heure == "") {
    document.getElementById("error").innerHTML =
      "Veuillez remplir correctement les champs !";
    return false;
  } else {
    return true;
  }
}
