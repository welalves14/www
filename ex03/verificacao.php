<html>
<head>
<meta charset="utf-8">
<title>Questao 03</title>
</head>
<body>

<?php
$nome = $_GET["nome"];
$sexo = $_GET["sexo"];
$idade = $_GET["idade"];

if ($sexo == "op1" && $idade < 18){
    echo "$nome, Acesso proibido! <br>";
}
else{
    echo "$nome, Acesso permitido! <br>";
}
?>

<button type="button"><a href="index.php">Voltar</a></button>

</body>
</html>