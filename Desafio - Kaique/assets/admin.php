<?php

// Verificação da variável setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

if(isset($_GET['tipo'])) {
    $filmes = $_GET['tipo'];
}

$filmes = "nome";

$filmes["Instinto Assassino"] = 2022;
$filmes["As Viúvas"] = 2018;
$filmes["Toscana"] = 2022;
$filmes["Silverton: Cerco Fechado"] = 2022;
$filmes["Ainda Estou aqui"] = 2022;
$filmes["Contra o Gelo "] = 2022;
$filmes["Um Dia Difícil"] = 10;
$filmes["O Bombardeio"] = 10;
$filmes["Projeto Gemini"] = 2019;
$filmes["O Projeto Adam"] = 2022;
$filmes["John Wick 2: Um Novo Dia Para Matar"] = 2017;
$filmes["Munique: No Limite da Guerra"] = 2021;
$filmes["O Resgate de Ruby"] = 10;
$filmes["O Mistério do Farol"] = 2018;
$filmes["Não olhe para cima"] = 2021;
$filmes["O Páramo"] = 10;
$filmes["Imperdoável"] = 2021;
$filmes["Alerta Vermelho"] = 2021;
$filmes["7 Prisioneiros"] = 2021;
$filmes["7 Prisioneiros"] = 2021;


// arsort, asort, ksort, krsrot
if($filmes == 'nome' && $ordem =='desc') {
    krsort($filmes);
}

elseif($filmes == 'sigla' && $ordem == 'desc') {
    arsort($filmes);
}

elseif($filmes == 'nome' && $ordem == 'asc') {
    ksort($filmes);
}
else {
    asort($filmes);
}

?>