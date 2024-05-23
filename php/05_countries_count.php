<?php
require_once("./src/connect.php");

// Requête SQL pour récupérer tous les pays, en un seul exemplaire, et le nombre d'utilisateurs par pays
$sql = "SELECT country, COUNT(*) as user_count FROM users GROUP BY country";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();
// Stockage du résultat dans un tableau associatif [personne1, personne2, ...]
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once("./src/close.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coutry stats</title>
</head>
<body>
    <?php include_once('./components/nav.php') ?>
    <!-- <pre><?= print_r($result) ?></pre> -->
    <div>
        <?php
            foreach ($result as $country) {
                foreach ($result as $user) {
                    echo ($user['country']) . ' ' . ($user['user_count']) . '<br>'; }
            }
        ?>
    </div>
</body>
</html>