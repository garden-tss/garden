<?php
$servername = "localhost";
$username = "root"; 
$password = "";      
$dbname = "garden_tss";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstName = $_POST['FirstName'];
$middleName = $_POST['MiddleName'];
$lastName = $_POST['LastName'];
$dateOfBirth = $_POST['DateOfBirth'];
$studentID = $_POST['StudentID'];
$parentNames = $_POST['ParentNames'];
$city = $_POST['City'];
$province = $_POST['Province'];
$country = $_POST['Country'];
$results = $_POST['Results'];
$email = $_POST['Email'];
$course = $_POST['Course'];
$level = $_POST['Level'];
$studyWay = $_POST['StudyWay'];
$courseDate = $_POST['CourseDate'];
$comments = $_POST['Comments'];

$sql = "SELECT COUNT(*) FROM students WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if ($count > 0) {
    echo " <script >alert ('This  number is already taken.'); window.location='registration.php';</script> ";
}
else{
$sql1 = "INSERT INTO students (first_name, middle_name, last_name, date_of_birth, student_id, parent_names, city, province, country, results, email, course, level, study_way, course_date, comments)
VALUES ('$firstName', '$middleName', '$lastName', '$dateOfBirth', '$studentID', '$parentNames', '$city', '$province', '$country', '$results', '$email', '$course', '$level', '$studyWay', '$courseDate', '$comments')";

if ($conn->query($sql1) === TRUE) {
   
    header("Location: popup.php"); 
    exit();
} else {
   
    echo " <script >alert ('error'); window.location='sod.php';</script> ";
}
}
?>


