
<?php
// Array con los nombres
$a[] = "Ana";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johana";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Elena";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violeta";
$a[] = "Liza";
$a[] = "Elisa";
$a[] = "Wenche";
$a[] = "Victoria";

//obtenemos con get la cadena de texto 
$q = $_REQUEST["q"];

$hint = "";

//recorremos el array buscando coincidencias en cada nombre
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, strlen($q)))) {
            if ($hint === "") {
                $hint = $name;
            } else {

                $hint = $hint . ", $name";
            }
        }
    }

//pintamos la sugerencia
    if ($hint === ""){
        echo "no existe sugerencia";
    }
    else{
        echo  $hint;
    }
?> 