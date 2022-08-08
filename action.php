<?php
require_once 'essential.php';
echo 'Hallo '.htmlspecialchars($_POST['name']); 
?><br></br><?php
echo 'Sie sind '.(int)$_POST['alter'].' Jahre alt. ';
header ("Refresh: 5; index.php");
echo 'In 5 Sekunden werden Sie auf die Hauptseite weitergeleitet.';
?>
<div align="center"><a href='index.php'>Zurück</a></div>
<?php
//print_r($_REQUEST);
?>