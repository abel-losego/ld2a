<?php
class bdd {
    private $accro_team_dom_1;
    private $accro_team_ext_1;
    private $but_team_dom_1;
    private $but_team_ext_1; 
    private $exp_goal_off_dom_1;
    private $exp_goal_off_ext_1;

    public function __construct() {
    

    $accro_team_dom_1= $_POST["accroTeamDom1"];
    $accro_team_ext_1 = $_POST["accroTeamExt1"];
    $but_team_dom_1 = $_POST["butTeamDom1"];
    $but_team_ext_1 = $_POST["butTeamExt1"];
    $exp_goal_off_dom_1 = $_POST["expGoalOffDom1"];
    $exp_goal_off_ext_1 = $_POST["expGoalOffExt1"];
    }
    


    public static function ajout($nomTable, $nomattribut, $valeur, $accro) {
        
        $val_att= select($nomTable, $nomattribut, $accro);

        $val_att=$val_att + $valeur;

        update($nomTable, $nomattribut, $val_att, $accro);
    } 

    public static function select($nomTable, $nomattribut, $accro){
        $req= "SELECT $nomattribut FROM $nomTable WHERE accroEquipe='$accro'";
        $stmt= $pdo->prepare($req);
        $stmt->execute(["$nomattribut"=> $attribut]);
        return $attribut;
    }
    public static function update($nomTable, $nomattribut, $valeur,  $accro) {
        $req= "UPDATE $nomTable SET $nomattribut=:nomAttribut WHERE accroEquipe='$accro'";
        $stmt= $pdo->prepare($req);
        $stmt->execute([':nomAttribut'=> $val_att]);
    }

}