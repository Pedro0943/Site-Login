//desabilita o botão no início
document.getElementById("botao").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("input").addEventListener("input", function(event){
    
  //busca conteúdo do input
    var conteudo = document.getElementById("input").value;
  
    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("botao").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("botao").disabled = true;
    }
});


function entrar(){
  var login = document.getElementById("input").value;
  var senha = document.getElementById("input2").value;
  if(login == "Pedro" || senha == "123"){
    alert("Permissão para entrar concedida"); 
    
  }else{
    alert("acesso negado");
    
  }

  
};
 