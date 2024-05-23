# Défis SQL

## Installation

- Prérequis : avoir installé Docker et s'assurer qu'il est lancé
- Dans le terminal, s'assurer d'être dans le bon dossier et utiliser la commande `docker-compose up --build`

## Points d'accès

Une fois que Docker a terminé l'installation:

- `index.php` se trouve sur `http://localhost:8001/`
- phpMyAdmin se trouve sur `http://localhost:8081`

## Les défis

En utilisant principalement des requêtes SQL, afficher :

1. Tous les utilisateurs dont le nom est Palmer - fait
2. Toutes les femmes - fait
3. Toutes les personnes dont l'adresses e-mail contient 'google' - fait
4. Tous les pays dont le nom commence par la lettre 'N' - fait
5. Le nombre d'utilisateurs par pays dans l'ordre croissant (exemple: Spain - 3 users, Italy - 8 users, France - 12 users, etc.) - fait
6. Le nombre d'utilisateurs par genre - fait
7. La moyenne d’âge des utilisateurs de chaque genre - fait
8. Gérer un utilisateur :

   - a. Insérer un utilisateur puis l'afficher (prénom, nom, adresse e-mail) - fait
   - b. Mettre à jour son adresse mail et afficher le résultat - fait
   - c. Supprimer l’utilisateur - ?

   L'erreur indique que votre utilisateur MySQL ne dispose pas des privilèges nécessaires pour exécuter la commande DROP USER. Pour exécuter cette commande, vous avez besoin du privilège CREATE USER.

Si vous ne disposez pas du privilège CREATE USER, vous ne pourrez pas supprimer directement des utilisateurs MySQL à l'aide de la commande DROP USER.

Dans ce cas, vous devrez demander à un administrateur de base de données disposant des privilèges appropriés d'exécuter cette commande pour vous, ou de vous donner les autorisations nécessaires pour que vous puissiez exécuter la commande vous-même.
