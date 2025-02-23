<?php
// Step 1: Database connection settings
$servername = "localhost"; // Your server name (usually localhost)
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "garden_tss";    // Your database name

// Step 2: Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Get the search name from the form (if submitted)
$searchName = '';
if (isset($_GET['searchName'])) {
    $searchName = $_GET['searchName']; // Get the input from the form
}

// Step 4: Prepare the SQL query if search name is provided
if ($searchName) {
    $sql = "SELECT ID, NAMES, CLASS, TRADE, POSITION, REPORT FROM performance WHERE NAMES LIKE ?";
    $stmt = $conn->prepare($sql);

    // Bind the parameter and execute the query
    $searchTerm = "%" . $searchName . "%"; // Adding wildcards for partial matching
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GARDEN TSS</title>
    <link rel="icon" type="image/png" href="./image/logo.jpg">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            padding: 20px;
            background-color:rgba(18, 219, 246, 0.51);
        }

        .header {
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            position: fixed;
            width: 100%;
            z-index: 100;
            margin-top: -20px;
            margin-left: -20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .logo img {
            height: 40px;
        }

        .nav {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            position: relative;
            transition: color 0.3s;
        }

        .nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ff4b4b;
            transition: width 0.3s;
        }

        .nav a:hover::after {
            width: 100%;
        }

        .search-container {
            display: flex;
        }

        .search-input {
            flex: 1;
            padding: 15px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px 0 0 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .search-button {
            padding: 15px 25px;
            background-color: #00e5cc;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .search-button:hover {
            background-color: #00d4bd;
        }

        .search-icon {
            width: 20px;
            height: 20px;
            fill: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            width: 900px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .card h2 {
            color: #3498db;
            margin-top: 0;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        .icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
            text-align: center;
        }

        .download-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .download-button:hover {
            background-color: #0056b3;
        }



        
    </style>
</head>
<body>
    <?php
        include("test.php")
    ?>

    <br><br><br>
    <!-- Search Form -->
    <form action="" method="get">
        <div class="search-container">
            <input type="text" class="search-input" name="searchName" placeholder="Search for Student" value="<?php echo htmlspecialchars($searchName); ?>">
            <button class="search-button" type="submit">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39zM11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"/>
                </svg>
            </button>
        </div>
    </form>

    <br><br><br><br><br><br>

    <div class="container">
        <h1>Student Performance Reports</h1>
        <div class="card-container">
            <?php
                // Display results if search term is provided
                if ($searchName) {
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='card'>";
                            echo "<h2>" . $row['NAMES'] . "</h2>";
                            echo "<p><strong>Class:</strong> " . $row['CLASS'] . "</p>";
                            echo "<p><strong>Trade:</strong> " . $row['TRADE'] . "</p>";
                            echo "<p><strong>Position:</strong> " . $row['POSITION'] . "</p>";
                            // Display the report card image
                            $reportImage = $row['REPORT'];
                            echo "<p><strong>Report Card:</strong><br><img src='data:image/jpeg;base64," . base64_encode($reportImage) . "' alt='Report Card Image' style='width:100%;  max-width:900px; height: 100%;' /></p>";
                            echo "<a href='data:image/jpeg;base64," . base64_encode($reportImage) . "' download class='download-button'>Download Report Card</a>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p>No records found for the search name: $searchName</p>";
                    }
                }
            ?>
        </div>
    </div>

    <br><br>
 
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
