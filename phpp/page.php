<?php
//1
$etudiant=array("Nom"=> "Hala", "Prenom"=> "Sadoumi", "Matricule"=> "21474");
echo "Nom:  ". $etudiant["Nom"]. "<br> ";
echo "Prenom:  ". $etudiant["Prenom"]. "<br>";
echo "Matricule:   ". $etudiant["Matricule"]. "<br>";
//2
$etudiant=array("Note"=>"17");
echo "Note:". $etudiant["Note"]. "<br>";
$etudiant["Note"]=18;
echo "La nouvelle Note:". $etudiant["Note"]. "<br>";
//3

$produit=array("Clavier"=>"400dhs", "Casque"=>"600dhs","Airpods"=>"800dhs" );
foreach ($produit as $x=>$y){
    echo "Nom du produit: $x. Prix: $y <br>";
}
//4
$score=array("Marwa"=>"85","Omar"=>"90", "Salma"=>"89", "Rania"=>"95", "Noora"=>"80" );
$t=0;
foreach ($score as $s){
$t+=$s;
}
$moyenne=$t/ count($score);
echo "Moyenne des scores: " . $moyenne . "<br>";
//5
$pays=array("Australie"=>"26.64000000", "Bazil"=>"216.4000000 ","Sweden"=>"10.54000000","Norway"=>"5.52000000");
arsort($pays);
foreach ($pays as $nom => $population)
 {  echo "Pays: $nom, Population: $population<br>";}
//6

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$Nom= $_POST["Nom"];
$Age=$_POST["Age"];
echo"Bienvenue $Nom , vous avez  $Age <br>";
}
//7
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $Nom = $_POST['Nom'];
      $Age = $_POST['Age']; 
      if (filter_var($Age, FILTER_VALIDATE_INT) && $Age > 0) { 
        echo "Bienvenue $Nom, vous avez $Age ans !<br>"; } 
        else { 
            echo "Erreur: Veuillez entrer un âge valide.<br>"; 
        } }

//8
$Colors=$_POST["Colors"];
echo"Votre couleur preferee est : $Colors <br>";
//9

    $Nombre1 = $_POST["Nombre1"];
    $Nombre2 = $_POST["Nombre2"];
    $S=$Nombre1 + $Nombre2;
echo "La somme est $S<br>";
//10
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $type = $_POST['type']; 
    if ($type == "administrateur") { 
        echo "Bienvenue, administrateur !"; } 
        else {
             echo "Bienvenue, utilisateur simple !";
             } }
?>
