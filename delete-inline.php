<?php
$conn = mysqli_connect("localhost", "root", "", "opt") or die("Connection Error");
$id = $_GET['id'];
$query = "DELETE FROM `crud` WHERE id='$id'";
$result = mysqli_query($conn, $query);
header("location:index.php");
mysqli_close($conn);
?>