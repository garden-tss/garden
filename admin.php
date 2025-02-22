<?php 
include 'includes/db.php';
if(!isset($_GET['teacher_id'])){
    die();
}
$id = $_GET['teacher_id'];
$query = "SELECT * FROM teachers WHERE id = $id";

$data = $conn->query($query)->fetch_row();


if (!file_exists('uploads/')) {
    mkdir('uploads/', 0755, true);
}

if (isset($_POST["submit"]) && isset($_FILES["image"])) {
    $file = $_FILES["image"];
$path = 'uploads/'.basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $path);

    $names = $_POST['names'];
$query = "UPDATE `teachers` SET `names` = '$names', `image` = '$path' WHERE `teachers`.`id` = $id;";

if($conn->query($query)){
    echo "done";
    header("Location: teacher.php");
}else {
    echo "Failed";

}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['teacher_id'])){
?>
<img src="<?= $data[2] ?>" alt="">
<form method="post" enctype="multipart/form-data">
<input type="text" name="names" value="<?= $data[1] ?>">
<input type="file" name="image">
<input type="submit" value="update" name="submit">
</form>
<?php
die();
}
?>

<table border="2">
    <th></th>
</table>
</body>
</html>