<?php
$résultat=0; // résultat multiplication
$quit=0; // sortie de la boucle while
$choix=['o','O','0']; // couvrir toute les variation du O de oui


// STR_PAD met du padding, le 1er argument détermine la quantité de string , le 2e 
// le string utilisé et str_pad_both introduit le padding des 2 cotés

echo str_pad("*******   Table de Multiplication   *******",70,' ',STR_PAD_BOTH);
echo "\n";
echo "\n";

while($quit<1){
    $saisienombre=readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    echo "\n";
for($i=1; $i<=10; $i++){
    $résultat=$i*$saisienombre;         //      {   calcul et affichage en boucle
    echo "$i * $saisienombre = $résultat \n";// {
}
echo "\n";
$continue=readline('Voulez vous continuer ? (O/N) : ') ;
echo "\n";
if(in_array($continue,$choix)==false){  // sortie de la boucle while
    $quit++;
    echo "\n";
}
}
?>