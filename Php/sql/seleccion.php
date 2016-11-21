<pre><?php 
require_once ('conexion.php');
$sql='SELECT * FROM ofertas';
$statement = $pdo->prepare($sql);
$statement->execute(array());
$result = $statement->fetchAll();
var_dump($result);
?></pre>