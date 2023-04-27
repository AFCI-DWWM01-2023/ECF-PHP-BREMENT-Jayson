<?php
$quit=0; // sortie de la boucle while
$circonf=0;// {
$surface=0;// { calcul
$choix=['o','O','0']; // couvrir toute les variation du O de oui


echo str_pad("************************",70,' ',STR_PAD_BOTH);  // STR_PAD met du padding, le 1er argument détermine la quantité de string , le 2e 
                                                                // le string utilisé et str_pad_both introduit le padding des 2 cotés
echo "\n";
echo str_pad("CALCUL SUR LE CERCLE",70,' ',STR_PAD_BOTH);
echo "\n";
echo str_pad("************************",70,' ',STR_PAD_BOTH);
echo "\n\n";


while($quit<1){
    $rayon=readline("Quel est le rayon du cercle : ");
    $circonf=round($rayon*pi()*2,2);                // {
    $surface=round(pi()*$rayon*$rayon,2);           // { calcul arrondie à 2 après la virgule
        echo "Sa circonférence est de : $circonf\n";    // { 
        echo "Sa surface est          : $surface\n";    // { affichage
    echo "\n";
    $continue=readline('Voulez vous faire un autre calcul (O/N) : ') ;
    if(in_array($continue,$choix)==false){  // sortie de la boucle while
        $quit++;
        echo "\n";
        echo "Au revoir et à bientôt";
    }
}

?>