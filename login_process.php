<?php
session_start(); 

$host = "localhost";
$user = "root";
$pass = "";
$db = "user_db";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

   
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        
        if (password_verify($password, $user['password'])) {
            session_regenerate_id(true); 
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['name']; 
            
            header("Location: ADMINPAGE.PHP");
            exit();
        } else {
            echo "<script>alert('Invalid Password'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('No user found'); window.location='login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
