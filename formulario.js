//Executar mascaras

function mascara(o, f) { 
    //define o objeto que chama função
    Objeto=0
    funcao=f
    setTimeout "executaMascara()",1
}

function executaMascara() {
    Object.value=funcao Objeto.value
}

//mascaras

//mascara do telefone
function telefone(variavel) {
    variavel=variavel.replace (/\D/g,"") //remove todo o que nao é digito
    variavel=variavel.replace (/^(\d\d)(\d)/g,"($1) $2")
    variavel=variavel.replace (/(\d{4})(\d)/,"$1-$2")
    return variavel
}

//mascara do RG e CPF
function RGeCPF(variavel) {
    variavel=variavel.replace (/\D/g,"")
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")
    variavel=variavel.replace (/(\d{3})(\d)/,"$1.$2")
    variavel=variavel.replace (/(\d{3})(\d{1,2})$/,"$1-$2")
}

//mascaro do CEP
function cep(variavel) {
    variavel=variavel.replace (/\D/g,"")
    variavel=variavel.replace (/(\d{2})(\d)/,"$1.$2")
    variavel=variavel.replace (/(\d{3})(\d{1,3})$/,"$1-$2")
    return variavel
}

//mascara data
function data(variavel) {
    variavel=variavel.replace (/\D/g,"")
    variavel=variavel.replace (/(\d{2})(\d)/,"$1/$2")
    variavel=variavel.replace (/(\d{2})(\d)/,"$1/$2")
}