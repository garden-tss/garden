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
    $query = "SELECT * FROM teachers WHERE id=$id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['names'];
    $image = $_POST['image'];

    $update = "UPDATE teachers SET names='$name', image='$image' WHERE id=$id";
    
    if ($conn->query($update) === TRUE) {
        header("Location: teacherReport.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>
    <h2>Edit Record</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="names" value="<?php echo $row['names']; ?>"><br>
        Image URL: <input type="file" name="image" value="<?php echo $row['image']; ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
