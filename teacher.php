<?php

include './includes/db.php';


$query = "SELECT * FROM  teachers";

$data = $conn->query($query)->fetch_all();
// print_r($data);
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
            padding: 2rem;
            background-color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            color: #2A9D8F;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        p {
            color: #666;
            margin-bottom: 2rem;
        }

        h2 {
            color: #2A9D8F;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            contain: layout inline-size;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            aspect-ratio: 4/3;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item::after {
            content: 'trainer';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: rgba(42, 157, 143, 0.9);
            color: white;
            text-align: center;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover::after {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1rem;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
<?php
    include("test.php")
   ?>
    <div class="container">


    
        <h1>GARDEN TSS TEACHERS</h1>
        <p>As we have different trades and options in Garden TSS, there are teachers who help students in their academic progress</p>
        
        <h2>Trainers</h2>
        
        <div class="gallery">
            <?php foreach($data as $row): ?>
            <a href="" class="gallery-item" style="text-decoration: none;">
                <h3>Tr.<br> <?= $row[1] ?> </h3>
                <img src="<?= $row[2] ?>" alt="Coach website design 1">
                
            </a>
            <?php endforeach ?>

    
        </div>
    </div>
</body>
</html>