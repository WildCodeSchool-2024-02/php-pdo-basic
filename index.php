Vive PDO !!!

<?php
require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM user where name='vincent'";
$users = $pdo->query($query)->fetch();


foreach ($users as $name) {
    echo $name['name'];
}
