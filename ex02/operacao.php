<html>
<head>
<meta charset="utf-8">
<title>Questao 02</title>
</head>
<body>

<?php
$numero01 = $_GET["numero01"];
$numero02 = $_GET["numero02"];

echo "$numero01, $numero02 <br>";

$aux = ($numero01 + $numero02);

if ($aux > 20){
    $aux = $aux + 8;
    echo "O resultado é = $aux <br>";
};
if ($aux <= 20) {
    $aux = $aux -5;
    echo "O resultado é = $aux <br>";
};
?>

<button type="button"><a href="index.php">Voltar</a></button>

</body>
</html>