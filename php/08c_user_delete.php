<?php
require_once("./src/connect.php");

// Requête SQL pour supprimer le nouvel utilisateur
$sql = "DELETE FROM users WHERE id = '1007'";
//DROP DOWN a aussi été tenté


 // Exécution de la requête de mise à jour
 $db->exec($sql);

 // Requête SQL pour sélectionner l'utilisateur mis à jour
 $selectSql = "SELECT * FROM users WHERE id = 1007";
 
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