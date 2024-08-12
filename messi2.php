<?php
$texto = "hola";

var_dump($texto);
print_r($texto);
for ($i=0; $i < 10; $i++) { 
    echo $i;
};
echo "<br>";
$num = rand(0, 10);
switch($num) {
    case 1:
        echo "uno";
        break;
    case 2:
        echo "dos";
        break;
    default:
        echo "no es ni 1 ni 2";
        break;
};
echo "<br>";
for ($i=0; $i < 10; $i++) { 
    echo $i * 2;
    echo "<br>";
};
?>