function validar(){
    var nome= document.getElementById('nome').value
    var quantidade= document.getElementById('quantidade').value
    var preco= document.getElementById('preco').value


    if (nome == ''){
        alert ("O campo Nome não pode estar vazio")
        return false
    }

    if (quantidade == ''){
        alert ("O campo Cargo não pode estar vazio")
        return false
    }

    if (preco == ''){
        alert ("O campo Salário não pode estar vazio")
        return false
    }

    if (isNaN(preco)){
        alert ("Insira um salário válido")
        return false
    }

    if (isNaN(quantidade)){
        alert ("Insira um salário válido")
        return false
    }

    if (quantidade < 0){
        alert ("Insira uma quantidade positiva")
        return false
    }

    if (preco < 0){
        alert ("Insira um preço positivo")
        return false
    }
   
    else {
        alert("Cadastro realizado com sucesso!")
        return true /* envia o formulário*/
    }
}