<html> 
    <head></head>
    <title>ES1</title>
    <body> 
<?php 

$nome ="Cristian";
$cognome ="Di Francescantonio";
echo "<h1>$nome $cognome</h1>";
echo '<h2>$nome</h2>';

$uno = 10;
$due = &$uno;
echo "uno :$uno due: $due</br>";
$uno = 157;
echo "uno :$uno due: $due</br>";

echo "esempio array";
$arr = array("a"=>"ciao");
echo "<p>".$arr["a"]."</p>";
?>
<p></p>
</body>
</html>