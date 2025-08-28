<?php
    //Esta é uma função
    //Inicio da função saudação
    function saudacao($nome) {
     return "Olá, $nome!";
}
//Fim da saudação
//Definição da função
function nomeDaFuncao($parametro1, $parametro2) {
    //Código que será executado
    $resultado = $parametro1 + $parametro2;
    return $resultado; // retorna um valor
}
//Chamando a função
$frase= saudacao("Beatriz");
$soma = nomeDaFuncao(5,10);
echo "$frase O resultado é: " . $soma;
?>