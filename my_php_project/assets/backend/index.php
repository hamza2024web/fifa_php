<?php
require 'config.php';

$query = $pdo->query("SELECT * FROM example_table");
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo $row['test'] . "<br>";
}
?>
