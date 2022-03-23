<?php



print("Dime el numero de botes");
$botes = (int)readline();

$result = 0;
$contador = 0;

while ($botes > $result) {
    $contador = $contador + 1;
    $result = $result + $contador;
}

if ($botes == $result) {
    echo 'Se pueden apilar';
}
else {
    echo 'No se pueden apilar';
}

?>