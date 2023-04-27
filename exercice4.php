<?php
echo str_pad("******Tableau pédiodique des éléments chimiques******",67,' ',STR_PAD_BOTH);
// STR_PAD met du padding, le 1er argument détermine la quantité de string , le 2e 
// le string utilisé et str_pad_both introduit le padding des 2 cotés
$éléments=array("H"=> "Hydrogène","He"=>"Hélium","P"=>"Phoshpore","V"=>"Vanadium","Pb"=>"Plomb","I"=>"Iode","Kr"=>"Krypton","X"=>"Xénom","Rn"=>"Radon","Zr"=>"Zirconium"); // déclaration tableau asso
echo "\n\n";
foreach($éléments as $symbole => $nom){     //{
    echo "$symbole : $nom \n";              //{ affichage tableau asso
}
echo "\n*******************************\n";
echo "Tableau trié :\n";
asort($éléments);                           //{ tri par ordre alphabétique des éléments
foreach($éléments as $symbole => $nom){     //{
    echo "$symbole : $nom \n";              //{ affichage du tableau
}
?>