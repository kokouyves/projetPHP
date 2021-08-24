
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" type = "text/css" href="Style.css">
</head>
<body>
    <div>
        <h1>Formulaire de contact</h1>
        <form method="POST" action="Traitement.php">
            <p>
                <label class="lab" for="nom">Nom</label>
                <input type="text" name="nom" class="inp">
            </p>
            <p>
                <label class="lab" for="prenom">Prenom</label>
                <input type="text" name="prenom" class="inp">
            </p>
            <p>
                <label class="lab" for="telephone">Telephone</label>
                <input type="text" name="telephone" class="inp">
            </p>
            <p>
                <label class="lab" for="mail">Mail</label>
                <input type="text" name="mail" class="inp">
            </p>
            <p>
                <label class="lab" for="adresse">Adresse</label>
                <input type="text" name="adresse" class="inp">
            </p>
            <p>
                <label class="lab" for="genre">Genre</label>
                <label>Homme</label>
                <input type="radio" name="genre" class="genr" value="H">
                <label >Femme</label>
                <input type="radio" name="genre" class="genr" value="F">
            </p>
            <p>
                <label class="lab" >Situation Matrimoniale</label>
                <select name="sm">
                    <option value="Celibataire"> Celibataire</option>
                    <option value="Celibataire"> Marie(e)</option>
                    <option value="Celibataire"> Divorce (e)</option>
                </select>
            </p>
            <p>
                <button type="submit">Enregistrer</button>
            </p>
        </form>
    </div>
   
</body>
</html>



<?php
    $host = 'localhost' ;
    $port = 3306 ;
    $dbname = 'formulaire' ;
    $user = 'root' ;
    $pwd = '' ;
        
            try{
                $newBD=new PDO("mysql : host=$host ;  dbname = $dbname" , $user , $pwd) ;
                echo "Connexion etablie" ;
            }
            catch(PDOException $e){
                die('Erreur : ' .$e ->getMessage()) ;
            }
            if(isset($_POST['nom'])&&
               (isset($_POST['prenom'])&&
               (isset($_POST['telephone'])&&
               (isset($_POST['mail'])&&
               (isset($_POST['adresse'])&&
               (isset($_POST['genre'])&&
               (isset($_POST['nom'])&&
               (isset($_POST['sm'])) {
                   $insertion=$newBD->prepare('INSERT INTO profil VALUES(NULL,:nom,:prenom,:telephone,:mail,:adresse,:genre,:sm)');
                   $insertion->bindValue(':nom',$_POST['nom']) ;
                   $insertion->bindValue(':prenom',$_POST['prenom']);
                   $insertion->bindValue(':telephone',$_POST['telephone']);
                   $insertion->bindValue(':mail',$_POST['mail']) ;
                   $insertion->bindValue(':genre',$_POST['genre']);
                   $insertion->bindValue(':sm',$_POST['sm']);
                   $verification=$insertion->execute();
                      $verification=$insertion->execute();
                      if ($verification){
                          echo "<br>Insertion reussie";
                      }else{
                          echo "Echec d insertion" ;
                      }

               }
                else 
               {
                   echo "Une variable n est pas declaree et ou est null";
               }
            {
                
            }


?>