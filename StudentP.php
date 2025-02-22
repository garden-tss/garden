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

  
        .footer {
           
           background-color: #000000f1;
           color: white;
           padding: 40px 20px;
           animation: fadeIn 1s ease-in;
       }

       .footer-content {
           max-width: 1200px;
           margin: 0 auto;
           display: grid;
           grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
           gap: 40px;
       }

       .footer-section {
           opacity: 0;
           transform: translateY(20px);
           animation: slideUp 0.5s ease forwards;
       }

       .footer-section:nth-child(1) { animation-delay: 0.2s; }
       .footer-section:nth-child(2) { animation-delay: 0.4s; }
       .footer-section:nth-child(3) { animation-delay: 0.6s; }

       .footer-section h2 {
           font-size: 24px;
           margin-bottom: 20px;
           position: relative;
           padding-bottom: 10px;
       }

       .footer-section h2::after {
           content: '';
           position: absolute;
           left: 0;
           bottom: 0;
           width: 50px;
           height: 2px;
           background: white;
           transform: scaleX(0);
           transform-origin: left;
           animation: lineGrow 0.5s ease forwards 1s;
       }

       .social-icons {
           display: flex;
           gap: 15px;
       }

       .social-icons a {
           background: white;
           width: 40px;
           height: 40px;
           border-radius: 50%;
           display: flex;
           align-items: center;
           justify-content: center;
           transition: transform 0.3s ease, background-color 0.3s ease;
       }

       .social-icons a:hover {
           transform: translateY(-5px) rotate(360deg);
           background-color: #f0f0f0;
       }

       .social-icons img {
           width: 20px;
           height: 20px;
       }

       .contact-info p {
           margin: 10px 0;
           display: flex;
           align-items: center;
           gap: 10px;
           transition: transform 0.3s ease;
       }

       .contact-info p:hover {
           transform: translateX(10px);
       }

       .map-container {
           width: 100%;
           height: 200px;
           border-radius: 8px;
           overflow: hidden;
           transition: transform 0.3s ease;
       }

       .map-container:hover {
           transform: scale(1.02);
       }

       .copyright {
           text-align: center;
           margin-top: 40px;
           padding-top: 20px;
           border-top: 1px solid rgba(255, 255, 255, 0.1);
           animation: fadeIn 1s ease forwards 1.2s;
           opacity: 0;
       }

       @keyframes fadeIn {
           from { opacity: 0; }
           to { opacity: 1; }
       }

       @keyframes slideUp {
           from {
               opacity: 0;
               transform: translateY(20px);
           }
           to {
               opacity: 1;
               transform: translateY(0);
           }
       }

       @keyframes lineGrow {
           from { transform: scaleX(0); }
           to { transform: scaleX(1); }
       }

       @media (max-width: 768px) {
           .footer-content {
               grid-template-columns: 1fr;
               text-align: center;
           }

           .footer-section h2::after {
               left: 50%;
               transform: translateX(-50%) scaleX(0);
           }

           .social-icons {
               justify-content: center;
           }

           .contact-info p {
               justify-content: center;
           }
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

        .buy-now {
            background: #ffc107;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .buy-now:hover {
            transform: translateY(-2px);
        }
        #navbar{
         border: 0px;
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
        form{
            margin-top: 100px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
            animation: fadeInDown 1s ease-out;
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
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            animation: fadeInUp 1s ease-out;
        }

        .card:hover {
            transform: translateY(-10px);
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
            animation: bounce 2s infinite;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
<?php
    include("test.php")
   ?>
    <br><br><br>
    <form action="" method="get">
    <div class="search-container">
        
        <input type="text" class="search-input" placeholder="Search your students">
        <button class="search-button" type="submit">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39zM11 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"/>
            </svg>
        </button>
    
    </div>

 <br><br><br><br><br><br>
 <div class="container">
        <h1>Keys to Student Success</h1>
        <div class="card-container">
            <div class="card">
                <span class="icon">📚</span>
                <h2>Effective Study Habits</h2>
                <p>Develop a consistent study routine and use active learning techniques like the Pomodoro method. Break down complex topics into smaller, manageable chunks and review material regularly. Create a dedicated study space free from distractions.</p>
            </div>

            <div class="card">
                <span class="icon">⏰</span>
                <h2>Time Management</h2>
                <p>Master the art of balancing academics with other activities. Use digital tools to track assignments and deadlines. Prioritize tasks effectively and avoid procrastination by setting specific goals for each study session.</p>
            </div>

            <div class="card">
                <span class="icon">🤝</span>
                <h2>Active Participation</h2>
                <p>Engage actively in class discussions and group projects. Don't hesitate to ask questions when concepts aren't clear. Form study groups with peers and participate in academic support programs offered by your institution.</p>
            </div>
        </div>
    </div>
   <div class="h" style="margin-top: 40px">
   <?php
   include("footer.php")
   ?>
   </div>
  
</body>
</html>






















































