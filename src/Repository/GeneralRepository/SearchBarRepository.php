<?php
// $requete = "SELECT  langage.langage, propriete.propriete FROM langage, propriete
// $requeteJSON = "SELECT  langage.langage, propriete.propriete, fonctions.fonction FROM langage INNER JOIN propriete ON propriete.id_langage = langage.id INNER JOIN fonctions ON fonctions.id_propriete = propriete.id
// ";

// $mysqli -> set_charset("utf8");

  //print_r($requete);
// $resultat = $mysqli -> query($requeteJSON );
 //print_r($requete);




//  $JSON = array(); //1

// $JSON= (array)	$requeteJSON;

// while ( $ligneResultat = $requeteJSON -> fetch()) {
//     $ligneResultat=((array)$ligneResultat);
//     // $ligneResultat=$ligneResultat."\\n";
//     $rows[] = $ligneResultat; //2
//     // $rows[] = "\n"; //2
// }
// $rien=array_shift($rows);//suppresion du premier element du tableau associatif 
//  var_dump($rows);






$JSON = array(); //1
$i=0;
// var_dump($JSON);
$JSON = (array)	$requeteJSON;

while ( $ligneResultat = $requeteJSON -> fetch()) {
     $ligneResultat=((array)$ligneResultat);
    // $rien=array_shift($ligneResultat);//suppresion du premier element du tableau associatif 
    // $rien=array_shift($ligneResultat);//suppresion du premier element du tableau associatif 
    // $ligneResultat=$ligneResultat."\\n";
    $JSON[$i] = $ligneResultat; //2
    // $rows[] = "\n"; //2
    //  var_dump($JSON);
    // break;
    $i++; 
}
$rien=array_shift($JSON);//suppresion du premier element du tableau associatif 
  // var_dump($JSON);
$myFile = "../find.json";
 
$fh = fopen($myFile, 'a+');
ftruncate($fh,0);
fwrite($fh, json_encode($JSON, JSON_PRETTY_PRINT));
fclose($fh);