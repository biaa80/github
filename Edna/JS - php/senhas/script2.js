function validar(){
    var email= document.getElementById('email').value
    var senha= document.getElementById('senha').value
    var confirmacao= document.getElementById('confirmacao').value


    if (email == ''){
        alert ("O campo email não pode estar vazio")
        return false
    }

    if (senha == ''){
        alert ("O campo senha não pode estar vazio")
        return false
    }

    if (confirmacao == ''){
        alert ("O campo confirmação não pode estar vazio")
        return false
    }

    if (isNaN(confirmacao)){
        alert ("Insira um salário válido")
        return false
    }

    if (isNaN(senha)){
        alert ("Insira um salário válido")
        return false
    }

    if (senha < 0){
        alert ("Insira uma senha positiva")
        return false
    }

    if (confirmacao < 0){
        alert ("Insira uma confirmação positiva")
        return false
    }
   
    if(confirmacao != senha){
        alert ("As senhas não são iguais")
        return false
    }

    else {
        alert("Alteração de senha com sucesso para o email " + email)
        return true /* envia o formulário*/
    }
}