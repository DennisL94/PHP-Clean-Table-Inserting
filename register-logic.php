<?php
include('../database.php');
$database = new Databases;

$insert_data = array(
 'FirstName' => $database->insertRow('firstname'),
 'LastName' => $database->insertRow('lastname'),
 'Email' => $database->insertRow('email'),
 'Password' => password_hash($database->insertRow('password'), PASSWORD_DEFAULT, ["cost" => 13])
);

if(isset($_POST["create"])) {
     $database->insertQueryArray('User', $insert_data);
     header("Location: ../index.php");
}
?>
