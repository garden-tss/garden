<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garden_tss";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contao Documentation</title>
    <style>
        :root {
            --orange-primary: rgb(0, 0, 0);
            --dark-bg: #1a1d21;
            --text-color: #333;
            --border-color: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background-color: var(--orange-primary);
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            position: sticky;
            top: 0;
        }

        .sidebar-header {
            padding: 1.5rem;
            flex-shrink: 0;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: white;
        }

        .manual-text {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: white;
        }

        .search-container {
            position: relative;
            margin-bottom: 2rem;
        }

        .search-input {
            width: 100%;
            padding: 0.5rem 2.5rem 0.5rem 1rem;
            border-radius: 4px;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .search-shortcut {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 0.8rem;
            color: white;
        }

        .nav-wrapper {
            flex-grow: 1;
            overflow-y: auto;
            padding: 0 1.5rem 1.5rem 1.5rem;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            padding: 0.5rem 0;
        }

        .nav-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        /* Rest of the styles remain the same */
        .main-content {
            flex-grow: 1;
            padding: 2rem;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            color: #666;
        }

        .breadcrumb a {
            color: #0ea5e9;
            text-decoration: none;
        }

        .edit-button {
            float: right;
            color: #0ea5e9;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        h1 {
            font-size: 2.5rem;
            color: var(--text-color);
            margin-bottom: 1.5rem;
        }

        .content p {
            margin-bottom: 1.5rem;
            line-height: 1.6;
            color: var(--text-color);
        }

        .content ul {
            margin-left: 2rem;
            margin-bottom: 1.5rem;
            line-height: 1.6;
            color: var(--text-color);
        }

        .navigation-arrows {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            pointer-events: none;
            padding: 0 1rem;
        }

        .arrow {
            width: 40px;
            height: 40px;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            pointer-events: auto;
        }

        .arrow-prev {
            float: left;
        }

        .arrow-next {
            float: right;
        }
        .nav-menu a:hover{
          color: #001aff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        button {
            padding: 2px 5px;
            margin: 2px;
            cursor: pointer;
            border: 0px;
            margin-top: 10px;
            background-color: red;
        }
        button:hover{
            background-color:rgb(89, 255, 0);
            

        }
        .TABLE{
            margin-left: -50px;
            font-size: 9px;
        }
      
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="./image/muh.jpg" alt="" width="50px" height="50px" style="margin-left: 50px; border-radius: 50%;">
            <div class="logo">Admin</div>
            <div class="manual-text">Muhoza Pacifique</div>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search...">
                <span class="search-shortcut">Search</span>
            </div>
        </div>
        <div class="nav-wrapper">
            <nav>
                <ul class="nav-menu">
                <li class="nav-item"><a href="STUDENTREPORT.php"><strong>Students</strong></a></li>
                    <li class="nav-item"><a href="teacherReport.php"><strong>Teachers</strong></a></li>
                    <li class="nav-item"><a href="Admin Login.php"><strong>Admin Login</strong></a></li>
                    <li class="nav-item"><a href="#"><strong>Announcement</strong></a></li>
                    <li class="nav-item"><a href=""><strong>Settings</strong></a></li>
                    <li class="nav-item"><a href="login.php"><strong>Log out</strong></a></li>
                </ul>
            </nav>
        </div>
    </aside>
    
    <main class="main-content">
        
    </main>
    <div class="TABLE">
        

    <script>
       function deleteStudents(studentId) {
    if (confirm("Are you sure you want to delete this student?")) {
        window.location.href = "delete.php?id=" + studentId;
    }
}
    </script>

    <h2>Student Dashboard</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Date of Birth</th>
            <th>Student ID</th>
            <th>Parent Names</th>
            <th>City</th>
            <th>Province</th>
            <th>Country</th>
            <th>Results</th>
            <th>Level</th>
            <th>Study Way</th>
            <th>Course Date</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['date_of_birth']; ?></td>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['parent_names']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['province']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['results']; ?></td>
                <td><?php echo $row['level']; ?></td>
                <td><?php echo $row['study_way']; ?></td>
                <td><?php echo $row['course_date']; ?></td>
                <td>
                    <a style="padding: 5px 16.5px;background-color: #001aff; margin: 2px;color:beige ;font-family: Verdana, Geneva, Tahoma, sans-serif;  " href="update.php?id=<?php echo $row['student_id']; ?>"><strong>Edit</strong></a>
                    <button onclick="deleteStudents(<?php echo $row['student_id']; ?>)">Delete</button>
                </td>
            </tr>
        <?php } ?>
    </table>

    </div>
     

    
</body>
</html>