<?php 

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$login = $data['login'];
$password = $data['password'];

try {
    $dbh = new PDO("mysql:host=localhost:3307;dbname=php", "root", "root");
    $res = $dbh->query("SELECT * FROM `trialone` WHERE login = ");
    $result = $res->fetchAll();

    if($result[0]['password'] == $password){
        echo true;
    }else{
        echo false;
    }
    echo $result[0]['password'];

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
