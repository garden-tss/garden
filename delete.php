<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garden_tss";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

 
    $sql = "DELETE FROM students WHERE student_id = ?";

  
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
       
        echo "<script>alert('Record deleted successfully'); window.location='STUDENTREPORT.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "No ID provided";
}

$conn->close();
?>
