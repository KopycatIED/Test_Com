<?php
# Inspiré de w3schools.net
function nettoyer($x){
if ($x){
$x = trim($x);
$x = stripslashes($x);
$x = htmlspecialchars($x);
}
return $x;
}

foreach($_GET as $clef => $valeur){
$sclef = nettoyer($clef);
echo "<p>GET['$sclef'] vaut '" . nettoyer($valeur) . "'";
}
?>