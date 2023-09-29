//funcao p validar o form
function validar(){
    var nome = document.getElementById('name').value.trim();
    var idade = document.getElementById('age').value.trim();

    if(nome == ''){
        exibirMsg('msg','informe seu nome');
        return false;
    }

    if(idade == ''){
        exibirMsg('msg','informe sua idade');
        return false;
    }

    return true;
}

function exibirMsg(id,msg){
    var div = document.getElementById(id);
    div.innerHTML = msg;

}