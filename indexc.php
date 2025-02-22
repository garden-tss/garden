<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "garden_tss";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM teachers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 7px; border: 1px solid #ddd; text-align: center; }
        th { background: #f4f4f4; }
        a { padding: 5px 10px; text-decoration: none; color: white; border-radius: 5px; }
        .edit { background: green; }
        .delete { background: red; }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['names']; ?></td>
            <td><img src="<?php echo $row['image']; ?>" width="50"></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                <a href="deleted.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
