<?php 
include './includes/db.php';

if (!file_exists('uploads/')) {
    mkdir('uploads/', 0755, true);
}

if (isset($_POST["submit"]) && isset($_FILES["image"])) {
    $file = $_FILES["image"];
$path = 'uploads/'.basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $path);

    $names = $_POST['names'];
$query = "INSERT INTO teachers (names, image) VALUES ('$names', '$path')";

if($conn->query($query)){
    echo "done";
    header("Location: teacherReport.php");
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
            transform: translateY(-65%);
            width: 100%;
            padding: 0 1rem;
           margin-top: 300px;
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
 
        .data{
 
  border: 2px solid transparent;
  border-radius: 8px;
  padding: 20px;
  max-width: 300px;
  height: 400px;
  margin: 0 auto;
  animation: border-animation 4s linear infinite;
  background-clip: padding-box;

}

@keyframes border-animation {
  0% {
    border-color: #3498db;
  }
  25% {
    border-color: #e74c3c;
  }
  50% {
    border-color: #2ecc71;
  }
  75% {
    border-color: #f39c12;
  }
  100% {
    border-color: #3498db;
  }
}


.data h2 {
  text-align: center;
  margin-bottom: 20px;
}

.data form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.data input[type="text"],
.data input[type="file"],
.data input[type="submit"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.data input[type="submit"] {
  background-color: #3498db;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s;
}

.data input[type="submit"]:hover {
  background-color: #2980b9;
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
    

    </div>       
    </div>
 <div class="uplaod">
 <div class="teachers" style="   margin-top: -300px; width:400px ">
<div class="mmm" style="margin-top: 310px; margin-left:-80px">
    <div class="data"  >
    <h2>upload image</h2>
   <form method="post" enctype="multipart/form-data">
        <input type="text" name="names" required>
        <input type="file" name="image" required>
        <input type="submit" value="upload" name="submit">
    </form>
    </div>
 </div>
</div>
   <div class="div" style="margin-left: 340px; margin-top: -420px; width:640px">
   <?php
include("indexc.php")
?>
   </div>

    
</body>
</html>

