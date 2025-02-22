<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "garden_tss";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM teachers WHERE id=$id";
    
    if ($conn->query($delete) === TRUE) {
        header("Location: teacherReport.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
