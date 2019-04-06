<?php
//inclure un fichier
include "config.php";

//appel fonction
$base=connect();

//recuperation des donnees
$e=$_REQUEST['email'];
$m=$_REQUEST['mdp'];

//hashage du mot de passe
$mdp=md5($m);

//insertion dans la bd
$req="INSERT INTO users(id,email,password) VALUES (null,'$e','$mdp')";

//exec INSERT , UPDATE , DELETE | type de retour: int |bool
//int : nombre des lignes insérées si req exécutée sans err 
//boolean : false en cas d'echec
$resp=$base->exec($req);
if($resp==1)
{
    echo"données insérés avec succees";
}
else
{
    echo "erreur d'insertion: verifier la req ou le fichier req";  
}
?>