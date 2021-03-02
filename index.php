<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */
try {
// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.
    $server = 'localhost';
    $db = '194_table';
    $user = 'root';
    $pass = '';
    /* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
// TODO votre code ici.

    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pass);
//    $stmt = $bdd->prepare("SELECT * from user WHERE nom='Conor'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->". $user['nom']."prenom ->" . $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom']." ".$user['prenom']."<br>";
//        }
//    }

    /* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE nom !='John'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }
    /* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE id <= 2");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE id >= 2");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE id =1");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE id < 1 AND nom= 'Doe'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE nom='Doe' AND prenom='John'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE nom='Conor' OR prenom='Jane'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user LIMIT 2");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul
     enregistrement */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user  ORDER BY id DESC LIMIT 1");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C,
     fini par r et contient 5 caractères ( voir LIKE )*/
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE nom LIKE'C%'AND nom LIKE '%r'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE nom LIKE '%e%'");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ...
     voir IN , pas OR '' */
// TODO Votre code ici.

//    $stmt = $bdd->prepare("SELECT * from user WHERE prenom IN ('John','Sarah')");
//    $state= $stmt->execute();
//    if($state){
//        foreach ($stmt->fetchAll() as $user) {
//            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
//            echo "<div class='utilisateur'>";
//            echo $user['nom'] . " " . $user['prenom'] . "<br>";
//        }
//    }

    /* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
// TODO Votre code ici.

    $stmt = $bdd->prepare("SELECT * from user WHERE id <=2 AND id >=4");
    $state= $stmt->execute();
    if($state){
        foreach ($stmt->fetchAll() as $user) {
            echo "Utilisateur: id ->".$user['id']."nom ->".$user['nom']."prenom ->". $user['prenom']."<br>";
            echo "<div class='utilisateur'>";
            echo $user['nom'] . " " . $user['prenom'] . "<br>";
        }
    }

}

catch (PDOException $exception) {
    echo $exception->getMessage();
}
