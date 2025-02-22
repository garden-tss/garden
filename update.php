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
    $student_id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE student_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $date_of_birth = $_POST['date_of_birth'];
    $parent_names = $_POST['parent_names'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $results = $_POST['results'];
    $level = $_POST['level'];
    $study_way = $_POST['study_way'];
    $course_date = $_POST['course_date'];

    $sql = "UPDATE students SET first_name=?, last_name=?, email=?, course=?, date_of_birth=?, parent_names=?, city=?, province=?, country=?, results=?, level=?, study_way=?, course_date=? WHERE student_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssi", $first_name, $last_name, $email, $course, $date_of_birth, $parent_names, $city, $province, $country, $results, $level, $study_way, $course_date, $student_id);

    
    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully!'); window.location='STUDENTREPORT.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.2);
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 10px;
            }

            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <h2>Update Student</h2>
    <form method="POST" action="">
        <input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>">
        
        <div class="form-row">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" name="first_name" value="<?php echo $student['first_name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="last_name" value="<?php echo $student['last_name']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" value="<?php echo $student['email']; ?>" required>
            </div>
            <div class="form-group">
                <label>Course:</label>
                <input type="text" name="course" value="<?php echo $student['course']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" name="date_of_birth" value="<?php echo $student['date_of_birth']; ?>" required>
            </div>
            <div class="form-group">
                <label>Parent Names:</label>
                <input type="text" name="parent_names" value="<?php echo $student['parent_names']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>City:</label>
                <input type="text" name="city" value="<?php echo $student['city']; ?>" required>
            </div>
            <div class="form-group">
                <label>Province:</label>
                <input type="text" name="province" value="<?php echo $student['province']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Country:</label>
                <input type="text" name="country" value="<?php echo $student['country']; ?>" required>
            </div>
            <div class="form-group">
                <label>Results:</label>
                <input type="text" name="results" value="<?php echo $student['results']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Level:</label>
                <input type="text" name="level" value="<?php echo $student['level']; ?>" required>
            </div>
            <div class="form-group">
                <label>Study Way:</label>
                <input type="text" name="study_way" value="<?php echo $student['study_way']; ?>" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Course Date:</label>
                <input type="date" name="course_date" value="<?php echo $student['course_date']; ?>" required>
            </div>
        </div>

        <button type="submit">Update Student Information</button>
    </form>
</body>
</html>
