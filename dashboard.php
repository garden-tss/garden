<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "user_db";

$conn = new mysqli($host, $user, $pass, $db);;
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
$result = $conn->query("SELECT id, username, email FROM users");
?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>