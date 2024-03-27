Vive PDO !!!

<?php
require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM user";
$users = $pdo->query($query)->fetchAll();


foreach ($users as $name) {
    echo $name['name'];
}
