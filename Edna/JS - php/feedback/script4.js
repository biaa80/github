function validar(){
    var nota= document.getElementById('nota').value
    var comentario= document.getElementById('comentario').value

    if (nota == ''){
        alert ("O campo nota não pode estar vazio")
        return false
    }

    if (comentario == ''){
        alert ("O campo comentário não pode estar vazio")
        return false
    }

    if((nota.length > 1) && (nota.length <= 5)){
        alert ("A nota tem que estar no intervalo de 1 a 5.")
        return false
    }

    else {
        alert("O feedback foi feito com sucesso!")
        return true /* envia o formulário*/
    }
}