<html>
<title>ES ARRAY</title>
<?php
echo "<h2>ARRAY CLASSICO</h2>";
$colori_array = array("rosso","giallo","bianco","nero");


foreach($colori_array as &$value){
   echo"<h2>$value</h2>";
}
?>

</html>