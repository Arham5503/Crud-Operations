<?php

$conn = mysqli_connect("localhost", "root", "", "opt") or die("Connection Error");
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $user = $_POST['user'];
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $query = "UPDATE `crud` SET username='$user',email='$mail',password='$pass' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
        header("location:index.php");
}
mysqli_close($conn);
?>