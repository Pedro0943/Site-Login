function mostrarOuOcultarSenha() {
    var senha = document.getElementById("senha");
    var checkbox = document.getElementById("mostrarSenha");

    if (checkbox.checked) {
      senha.type = "text";
    } else {
      senha.type = "password";
    }
  }
  