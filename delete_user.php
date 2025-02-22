<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "user_db";

$conn = new mysqli($host, $user, $pass, $db);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM users WHERE id='$id'");
    echo "<script>alert('user deleted successfull!!'); window.location='Admin Login.php';</script>";
}
?>