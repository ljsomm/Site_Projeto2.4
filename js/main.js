function validar()
{
    var usuario = document.getElementById('user').value;
    var senha = document.getElementById('senha').value;

    if(usuario == ""){
        alert("Preencha o campo de usuario corretamente");
        return false;
    }
    else if(senha == ""){
        alert("Preencha o campo de senha corretamente");
        return false;
    }
}

function focar()
{
    document.getElementById('user').focus();
}

