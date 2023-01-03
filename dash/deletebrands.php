<?php

$id = $_GET['id'];

include 'connection.php';

$sql = "DELETE FROM brands WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Un successfully");

    header("Location: http://testlinks.code7labs.com/seven-draft/Dashboard/add-brands.php");
?>