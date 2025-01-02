//desabilita o botão no início 
document.getElementById("submit").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("nome").addEventListener("input", function(event){
      
  //busca conteúdo do input
  var conteudo = document.getElementById("nome").value;
    
  //valida conteudo do input 
  if (conteudo !== null && conteudo !== '') {
    //habilita o botão
    document.getElementById("submit").disabled = false;
  } else {
    //desabilita o botão se o conteúdo do input ficar em branco
    document.getElementById("submit").disabled = true;
  }
});


function mostrarOuOcultarSenha() {
    var senha = document.getElementById("senha");
    var checkbox = document.getElementById("mostrarSenha");

    if (checkbox.checked) {
      senha.type = "text";
    } else {
      senha.type = "password";
    }
  }

  