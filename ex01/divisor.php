<?php
$numero = $_GET["numero"];

if ($numero%10 == 0)
    echo "é divisivel por 10 </br>";
if ($numero%5 == 0)
    echo "é divisivel por 5 </br>";
if ($numero%2 == 0)
    echo "é divisivel por 2 </br>";
else {
    echo "não é divisível por nenhum destes(10, 5 e 2)";
}
?>