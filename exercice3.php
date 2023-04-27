<?php
$a=0; 
$b=0;   
$c=0;
$x1=0;  //racine1
$x2=0;  //racine2
$delta=0; //discriminant
$quit=0; // sortie de la boucle while
$choix=['o','O','0']; // couvrir toute les variation du O de oui

echo "Racine de l'équation du 2nd degré\n";
echo str_pad("Y= ax² + bx + c",30,' ',STR_PAD_BOTH);
echo "\n";
echo "\n";
while($quit<1){                                 // boucle while pour redemander à chaque fois l'user-input et refaire les opération
    $a=readline("Quelle est la valeur de a : "); //{
    $b=readline("Quelle est la valeur de b : "); //{
    $c=readline("Quelle est la valeur de c : "); //{ Saisie des valeurs
    echo "\n";
    $delta=(($b*$b)-(4*$a*$c));                  // calcul discriminant
    if ($delta>0){
        echo "L'équation possède 2 racines distinctes :\n";//{
        echo "Delta = $delta\n";                           //{
        echo "L'équation s'annule pour :\n";               //{
        $x1=(((-$b)+sqrt($delta))/(2*$a));                 //{
        $x2=(((-$b)-sqrt($delta))/(2*$a));                 //{
        echo "X1 = $x1\n";                                 //{
        echo "X2 = $x2\n";                                 //{
        echo "\n";                                         //{ Cas discriminant>0
    }
    elseif($delta<0){
        echo "L'équation ne possède pas de racine réelle\n"; //{
            echo "Delta = $delta";                           //{
        echo "\n";                                           //{ Cas discriminant<0
    }
    $continue=readline('Voulez vous continuer ? (O/N) : ') ;//{
    if(in_array($continue,$choix)==false){                  //{ 
    $quit++;                                                //{
    echo "Au revoir et à bientôt";                          //{ choix de sortie de la boucle while
}
}

?>