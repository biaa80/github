function validar(){
    var pesquisa= document.getElementById('pesquisa').value

    if (pesquisa == ''){
        alert ("O campo pequisa não pode estar vazio")
        return false
    }

    if((pesquisa.length) < 10 ){
        alert ("A pesquisa tem que ter pelo menos 10 caracteres.")
        return false
    }

    else {
        alert("A pesquisa foi feita com sucesso!")
        return true /* envia o formulário*/
    }
}