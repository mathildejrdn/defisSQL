<?php
require_once("./src/connect.php");

try {
    // Requête SQL pour mettre à jour l'adresse e-mail de l'utilisateur
    $sql = "UPDATE users 
    SET email = 'nouveaumail@mail.fr'
    WHERE id = 1";

    // Exécution de la requête de mise à jour
    $db->exec($sql);

    // Requête SQL pour sélectionner l'utilisateur mis à jour
    $selectSql = "SELECT * FROM users WHERE id = 1";
    
    // Exécution de la requête de sélection
    $result = $db->query($selectSql)->fetchAll(PDO::FETCH_ASSOC);

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
    <title>Mise à jour d'e-mail</title>
</head>
<body>
    <?php include_once('./components/nav.php') ?>
    <!-- <pre><?= print_r($result) ?></pre> -->

    <div>
        <?php foreach ($result as $user) {
            echo "Nouvelle adresse e-mail : " . $user['email'];
        } ?>
    </div>
</body>
</html>
