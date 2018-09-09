
function pegaDominio() {
    var url = location.href; //pega endereço que esta no navegador
    url = url.split("/"); //quebra o endeço de acordo com a / (barra)
    return 'http://' + url[2] + '/'; // retorna a parte www.endereco.com.br
}


