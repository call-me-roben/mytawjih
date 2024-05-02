<?php

@include 'config.php';
session_start();


$id=$_SESSION['user_id'];

if (isset($id)){
$req2 = "delete from bac23 where user_id='$id'";
$res2 = $conn->query($req2);
}
session_unset();
session_destroy();
header('location:singin.php');

?>