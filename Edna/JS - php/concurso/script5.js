function validar(){
    var cpf= document.getElementById('cpf').value
    var idade= document.getElementById('idade').value
    

    if (cpf == ''){
        alert ("O campo CPF não pode estar vazio")
        return false
    }

    if (idade == ''){
        alert ("O campo Idade não pode estar vazio")
        return false
    }


    if (isNaN(cpf)){
        alert ("Insira um CPF válido")
        return false
    }

    if (isNaN(idade)){
        alert ("Insira uma idade válida")
        return false
    }
   
    else {
        alert("inscrição realizado com sucesso!")
        return true /* envia o formulário*/
    }
}