<?php

$host = "localhost";
$username ="abel";
$password= "voiture";
$database= "LD2A";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $bdd = new bdd;

   
    

    if (!isset($accro_team_dom_1)) {
        die("Ajouter un accronyme pr l'equipe à domicile svp");
    }
    elseif (!isset($accro_team_ext_1)) {
        die("Ajouter un accro à l'équipe exterieur svp");
    }
    elseif (!isset($but_team_dom_1)) {
        die("Ajouter un score pour l'equipe à domicile svp");
    }
    elseif (!isset($but_team_ext_1)) {
        die("Ajouter un score à l'equipe à l'exterieur svp");
    }
    elseif (!isset($exp_goal_off_dom_1)) {
        die("Ajouter un score d'EG à l'equipe à l'exterieur svp");
    }
    elseif (!isset($exp_goal_off_ext_1)) {
        die("Ajouter un score d'EG à l'equipe à l'exterieur svp");
    }

    

    //Ajout des buts marqués dans la forme Saison 

    $bdd->ajout('ForSaiDom', 'FSBuMaDom', $but_team_dom_1, $accro_team_dom_1);

  
    header('Location: index.html');


}

?>