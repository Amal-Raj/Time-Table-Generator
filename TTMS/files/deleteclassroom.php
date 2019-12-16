<?php
/**
 * Created by PhpStorm.
 * User: Amal
 * Date: 16-10-2019
 * Time: 14:46
 */
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM classrooms WHERE name = '$id' ");
if ($q) {

    header("Location:addclassrooms.php");

} else {
    echo 'Error';
}