<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "user_db";

$conn = new mysqli($host, $user, $pass, $db);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id='$id'");
    $user = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET username='$username', email='$email' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: Admin Login.php");
    }
}
?>
<form method="POST" style="
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    background-color: #fff;
    font-family: Arial, sans-serif;
">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div style="
        margin-bottom: 15px;
    ">
        <input type="text" name="username" value="<?php echo $user['username']; ?>" required style="
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        ">
    </div>
    <div style="
        margin-bottom: 15px;
    ">
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required style="
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        ">
    </div>
    <button type="submit" style="
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.2s;
    ">
        Update
    </button>
</form>
