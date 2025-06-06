/* função para validar o formulário */
function validar(){
    var nome= document.getElementById('nome').value
    var cargo= document.getElementById('cargo').value
    var salario= document.getElementById('salario').value

    if (nome == ''){
        alert ("O campo Nome não pode estar vazio")
        return false
    }

    if (cargo == ''){
        alert ("O campo Cargo não pode estar vazio")
        return false
    }

    if (salario == ''){
        alert ("O campo Salário não pode estar vazio")
        return false
    }

    if (isNaN(salario)){
        alert ("Insira um salário válido")
        return false
    }
   
    else {
        alert("Cadastro realizado com sucesso!")
        return true /* envia o formulário*/
    }
}