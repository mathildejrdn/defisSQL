<?php
//gros tableau principal
$student = array(
//sous tableaux 
    array( 
    "name" => "Jean-Luc",
    "age" => "5 ans",
    "note" => "C"
    ),
    array(
    "name" => "Edouard-Mouloud",
    "age" => "45 ans",
    "note" => "A"
    ),
    array( 
    "name" => "Josette",
    "age" => "15 ans",
    "note" => "B"
    ),

);
// echo "<pre>";
// print_r($student);
// echo "</pre>";
//verif 1

foreach ($student as $value) {
// echo "<pre>" ;
// print_r($value);
// echo"</pre>";
//verif 2
//on définit ce qu'on affiche dans le msg
$message = $value['name'] . ' est âgé(e) de ' . $value['age'] . ' et sa moyenne est de ' . $value['note'] . "<br>";
//renvoie le message
    echo $message;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <div>


    </div>
</body>
</html>