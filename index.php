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
            font-family: Arial, sans-serif;
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

        .hero {
            min-height: 100vh;
            background-image: url(SCHOOL_TSS.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            padding: 0 5%;
        
        }

        .hero-content {
            max-width: 600px;
            margin-left: 25%;
            animation: fadeIn 1s ease-out;
        }

        .welcome {
            color: yellow;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .title {
            font-size: 4rem;
            color: white;
            margin-bottom: 1.5rem;
        }

        .description {
            color: aqua;
            margin-bottom: 2rem;
            line-height: 1.6;
            font-weight: bold;
        }

        .learn-more {
            display: inline-block;
            padding: 1rem 2rem;
            background: #ff4b4b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .learn-more:hover {
            transform: translateY(-2px);
        }

        .cta-buttons {
            position: absolute;
            bottom: 5%;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 2rem;
            animation: slideUp 1s ease-out;
        }

        .cta-button {
            padding: 1rem 2rem;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: transform 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
        }

        .teachers {
            background: #ff4b4b;
        }

        .classes {
            background: #ffc107;
        }

        .contact {
            background: white;
            color: #333;
            border: 1px solid #ddd;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        #navbar{
         border: 0px;
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
    </style>
</head>
<body>
   <?php
    include("test.php");
   ?>
    <center>
    <main class="hero">
        <div class="hero-content">
            <p class="welcome">WELCOME TO GARDEN TSS WEBSITE</p>
            <h1 class="title">GARDEN TSS</h1>
            <p class="description">A Technical Secondary School based in Kibungo-Ngoma. We offer technical skills needed on the labor market</p>
           
        </div>
    </center>
        <div class="cta-buttons">
            <a href="teacher.php" class="cta-button teachers">
                Our teachers →
            </a>
            <a href="about.php" class="cta-button classes">
                About us →
            </a>
            <a href="contact.php" class="cta-button contact">
                Contact us →
            </a>
        </div>
    </main>
  
   <?php
   include("footer.php")
   ?>
  
</body>
</html>