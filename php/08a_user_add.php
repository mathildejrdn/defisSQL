<?php
require_once("./src/connect.php");

try {
    // Requête SQL pour insérer un nouvel utilisateur
    $insertSql = "INSERT INTO users (`first_name`, `last_name`, `email`, `gender`, `birth_date`, `country`)
    VALUES ('Chaton', 'Mitaine', 'mitenusmaleficus@gmail.com', 'male', '2009-05-13', 'France')";

    
    $db->exec($insertSql);

    $lastUserId = $db->lastInsertId();

    $selectSql = "SELECT * FROM users WHERE id=:userId";
    
    // Préparation de la requête de sélection
    $selectQuery = $db->prepare($selectSql);
    // Liaison de la valeur de l'ID
    $selectQuery->bindParam(':userId', $lastUserId, PDO::PARAM_INT);
    // Exécution de la requête de sélection
    $selectQuery->execute();
    
    // Récupération des résultats de la requête de sélection
    $result = $selectQuery->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error) {
    // Gestion des erreurs PDO
    echo "Erreur : " . $error->getMessage();
} finally {
    // Fermeture de la connexion à la base de données
    require_once("./src/close.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palmers</title>
</head>
<body>
    <?php include_once('./components/nav.php') ?>
    <!-- <pre><?= print_r($result) ?></pre> -->

    <div>
        <?php foreach ($result as $user) {
            echo $user['first_name'] . ' ' . $user['last_name'] . ' ' . $user['email'] .'<br>';
        } ?>
    </div>
</body>
</html>
