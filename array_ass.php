<?php
    $pessoas = ["nome" => "João", "idade" => 30];
    echo $pessoas["nome"];
?>
<p> Olá aqui é uma HTML:</p>
<?php
    $aluno=["nome" => "Francisco", "idade"=> 16, "nota"=> 100];
    echo"Olá ". $aluno["nome"]. ", você tem " .$aluno ['idade']. " anos e sua nota é ". $aluno['nota']."<br>";
    $ano = 2025 - $aluno["idade"];
    echo "Você nasceu em $ano <br>";
    $hoje = date("d/m/Y");
    echo "Hoje é dia: $hoje";
    $dia = date ("j");
    echo "<p> Hoje, $dia é dia nacional da Habitação <p/>";
    $horas= date("H:i");
    Echo "São exatamente $horas";
    

?>