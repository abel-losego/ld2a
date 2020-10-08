<?php


$host = "localhost";
$username ="abel";
$password= "voiture";
$database= "LD2A";


//Afficher erreur de co
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $accro = $_POST["accro"];
    $nom_equipe = $_POST["nomEquipe"];
    $class_ann_pass = $_POST["ClassAnnPass"];
    $note = $_POST["note"];
    

    if (!isset($accro)) {
        die("Ajouter un accronyme svp");
    }
    elseif (!isset($nom_equipe)) {
        die("Ajouter un nom à l'équipe svp");
    }
    elseif (!isset($class_ann_pass)) {
        die("Ajouter la place dans le classement de l'année dernière svp");
    }
    elseif (!isset($note)) {
        die("Ajouter une note svp");
    }

    try{
    
    $dbh = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    $données = [
    'accroEquipe' => $accro,
    'nomEquipe' => $nom_equipe,
    'ClassementAnnPass' => $class_ann_pass,
    'Note' => $note,

    ];
    $sth=$dbh->prepare(
        "INSERT INTO statsEquipes VALUES (:accroEquipe, :nomEquipe, :ClassementAnnPass, :Note)"
    );
    
    $sth->execute($données);

    $données = [
        'accrEquipe' => $accro, 
        'FSExGo' => 0,
        'FSExGd' => 0,
        'FSBuMa' => 0,
        'FSBuEn' => 0, 
        'FSNbBu' => 0, 
        'FSNbMa' => 0,
    ];
    $sth=$dbh->prepare("INSERT INTO FORSaiCon VALUES (:accrEquipe, :FSExGo, :FSExGd, :FSBuMa, :FSBuEn, :FSNbBu, :FSNbMa)");
    $sth->execute($données);

    $données = [
        'accrEquipe' => $accro, 
        'FSExGoDom' => 0,
        'FSExGdDom' => 0,
        'FSBuMaDom' => 0,
        'FSBuEnDom' => 0, 
        'FSNbBuDom' => 0, 
        'FSNbMaDom' => 0,
    ];
    $sth=$dbh->prepare("INSERT INTO FORSaiDom VALUES (:accrEquipe, :FSExGoDom, :FSExGdDom, :FSBuMaDom, :FSBuEnDom, :FSNbBuDom, :FSNbMaDom)");
    $sth->execute($données);

    $données = [
        'accrEquipe' => $accro, 
        'FSExGoExt' => 0,
        'FSExGdExt' => 0,
        'FSBuMaExt' => 0,
        'FSBuEnExt' => 0, 
        'FSNbBuExt' => 0, 
        'FSNbMaExt' => 0,
    ];
    $sth=$dbh->prepare("INSERT INTO FORSaiExt VALUES (:accrEquipe, :FSExGoExt, :FSExGdExt, :FSBuMaExt, :FSBuEnExt, :FSNbBuExt, :FSNbMaExt)");
    $sth->execute($données);

    $données = [
        'accrEquipe' => $accro, 
        'FRExGoO' => 0,
        'FRExGoD' => 0,
        'FRBuMa' => 0,
        'FRBuEn' => 0, 
        'FRNbBu' => 0, 
        'FRNbMa' => 0,
    ];
    $sth=$dbh->prepare("INSERT INTO ForRecCon VALUES (:accrEquipe, :FRExGoO, :FRExGoD, :FRBuMa, :FRBuEn, :FRNbBu, :FRNbMa)");
    $sth->execute($données);

    $données = [
        'accrEquipe' => $accro, 
        'FRExGoDom' => 0,
        'FRExGdDom' => 0,
        'FRBuMaDom' => 0,
        'FRBuEnDom' => 0, 
        'FRNbBuDom' => 0, 
        'FRNbMaDom' => 0,
    ];
    $sth=$dbh->prepare("INSERT INTO ForRecDom VALUES (:accrEquipe, :FRExGoDom, :FRExGdDom, :FRBuMaDom, :FRBuEnDom, :FRNbBuDom, :FRNbMaDom)");
    $sth->execute($données);

    $données = [
        'accrEquipe' => $accro, 
        'FRExGoExt' => 0,
        'FRExGdExt' => 0,
        'FRBuMaExt' => 0,
        'FRBuEnExt' => 0, 
        'FRNbBuExt' => 0, 
        'FRNbMaExt' => 0,
    ];
    $sth=$dbh->prepare("INSERT INTO ForRecExt VALUES (:accrEquipe, :FRExGoExt, :FRExGdExt, :FRBuMaExt, :FRBuEnExt, :FRNbBuExt, :FRNbMaExt)");
    $sth->execute($données);








    echo 'Entrée ajoutée dans la table';
    }
    catch(PDOException $e) {
    echo "Erreur :" . $e->getMessage();
    }

}
header('Location: index.html');



?>