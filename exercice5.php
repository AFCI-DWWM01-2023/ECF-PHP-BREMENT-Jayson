<?php
$éléments1=[]; // déclaration tableau 1

$quit=0; // valeur de sortie de la boucle while
echo "******Tableau 1******\n";
for($i=0;$i<=10;$i++){
    $éléments1[$i]=rand(20,100);    //{
    echo "|";                       //{
    echo $éléments1[$i];            //{ remplissage et affichage tableau 1
}
echo "\n";
echo "-----------------------";
echo "\n";
while($quit<1){
    echo "\n";
    $a=readline(" 0 :Quitter | 1 :Trier dans l'ordre croissant | 2 :Trier dans l'ordre décroissant | 3 :Générer un deuxième tableau, additionner les 2 pour obtenir un 3e | 4 :Inverser le 3e tableau ");
    // readline et switch pour faire un menu  
    switch($a){
        case 0:
            $quit++;        //incrémentation du compteur pour sortir de la boucle while
            break;
        case 1:
            echo "\n";
            sort($éléments1); // fonction triage ordre croissant
            echo "******Croissant******\n";
            for($i=0;$i<=10;$i++){      // { boucle affichage tableau
                echo "|";               // {
                echo $éléments1[$i];    // {
            }
            echo "\n-----------------------";
            break;
        case 2:
            echo "\n";
            rsort($éléments1);  //fonction triage ordre décroissant
            echo "******Décroissant******\n"; 
            for($i=0;$i<=10;$i++){      //{ 
                echo "|";               //{
                echo $éléments1[$i];    //{ boucle affichage tableau
            }
            echo "\n-----------------------";
            break;
        case 3:
            echo "\n";
            $éléments2=[];              
            $éléments3=[];
            for($i=0;$i<=10;$i++){                  // {
                $éléments2[$i]=rand(20,100);        // {remplissage tableau 2
            }
            echo "******Somme de 2 tableaux aléatoires******\n";
            for($i=0;$i<count($éléments1);$i++){
                $éléments3[$i]=$éléments1[$i]+$éléments2[$i];   // {
                echo $éléments3[$i];                            // {remplissage du 3e avec somme des 2 autres et affichage
                echo "|";
            }
            echo "\n-----------------------";
            break;
        case 4:
            $éléments3=array_reverse($éléments3);               //{ range le tableau en classant les valeurs par leur clé de manière décroissante
            echo "******Inversion 3e tableau(si existant)******\n";
            for($i=0;$i<=10;$i++){
                echo "|";                                       //{
                echo $éléments3[$i];                            //{ affiche le tableau 3
            }
            break;
    }   
    echo "\n-----------------------";
}
?>