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

        body {
            line-height: 1.6;
            background-color: rgba(127, 255, 212, 0.6);
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
            animation: fadeIn 1s ease-out;
            border: 1px solid black;
            border-radius: 5px;
        }

        .contact-info {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 4px;
            transition: transform 0.3s ease;
        }

        .contact-info:hover {
            transform: translateY(-5px);
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
            animation: slideInFromBottom 1s ease-out;
        }

        h1, h2 {
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .section {
            margin-bottom: 30px;
            transition: background-color 0.3s ease;
        }

        .section:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
            animation: fadeIn 1s ease-out 0.5s both;
        }

        .staff-card {
            border: 1px solid #000000;
            padding: 20px;
            border-radius: 4px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .staff-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgb(3, 194, 51);
        }

        .staff-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 15px;
            transition: filter 0.3s ease;
        }

        .staff-card:hover .staff-image {
            filter: brightness(1.1);
        }

        .staff-name {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        ul {
            list-style-position: inside;
            margin-bottom: 15px;
        }

        li {
            margin-bottom: 8px;
            transition: transform 0.2s ease;
        }

        li:hover {
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .header, .main-content {
                grid-template-columns: 1fr;
            }
            
            .staff-grid {
                grid-template-columns: 1fr;
            }
        }

        .headers {
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            position: fixed;
            width: 100%;
            z-index: 100;
            margin-left: -50px;
            margin-top: -20px;
            animation: slideInFromTop 0.5s ease-out;
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
            transition: transform 0.3s ease;
        }

        .logo:hover img {
            transform: scale(1.1);
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
            transition: transform 0.3s, background-color 0.3s;
        }

        .buy-now:hover {
            transform: translateY(-2px);
            background-color: #ffca2c;
        }

        #navbar {
            border: 0px;
            transition: background-color 0.3s;
        }

        #navbar:hover {
            background-color: #f0f0f0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInFromBottom {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes slideInFromTop {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
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

        .contact-infom p {
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.3s ease;
        }

        .contact-infom p:hover {
            transform: translateX(10px);
        }

        .map-container {
            max-width: 100%;
            height: 200px;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            overflow: hidden;
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
        button{
            background-color: black;
            color: white;
            border-radius: 10px;
            border: 0px;
        }
        button:hover{
            background-color: blue;
        }

    </style>
</head>
<body>

<?php
    include("test.php")
   ?>
    <div class="section">
        <h2>Legal Representer</h2>
        <div class="staff-card">
            <h2>Legal Representer</h2>
            <img src="./image/rugambage.PNG" alt="Director General" class="staff-image">
            <div class="staff-name">Mr. RUGAMBAGE André</div>
            <p>Garden TSS was found in 2012 and since then, 
                Garden TSS is striving to provide the practical and 
                technical skills needed on the labor market in different 
                trades and options.</p>
        </div>
        <div class="staff-card">
            <img src="./image/protg.jpg" alt="Staff Member 3" class="staff-image">
            <div class="staff-name">Mrs. MUKAMUGEMA Emerance</div>
            <p>Advisor of Garden TSS</p>
        </div>
    </div>

    <div class="staff-grid">
        <div class="staff-card">
            <img src="./images of garden/Mr. HAKUZIMANA.jpeg" alt="Staff Member 1" class="staff-image">
            <div class="staff-name">Mr. HAKUZIMANA Jean Claude</div>
            <p>The school Manager of Garden TSS</p>
        </div>
        <div class="staff-card">
            <img src="./images of garden/Mr. MASEZERANO Issac.jpeg" alt="Staff Member 2" class="staff-image">
            <div class="staff-name">Mr. MASEZERANO Issac</div>
            <p>Director of Studies at Garden TSS</p>
        </div>
        <div class="staff-card">
            <img src="./images of garden/Mrs. MUKANDAYISABYE Emilienne.jpeg" alt="Staff Member 3" class="staff-image">
            <div class="staff-name">Mrs. MUKANDAYISABYE Emilienne</div>
            <p>Secretary of Garden TSS</p>
        </div>
    </div>
    <br><br>
        <div>
            <h1>SCHOOL VISION</h1>
            <p> To raise youth with employable skills, prefossional competences and job creation opportunities</p>
        </div>
<br><br>
    <div class="main-content">
        <div class="section">
            <h2>SCHOOL MISSION</h2>
            <p>To equip trainees with skills that helps them to compete at labor market</p>
            <br>
            <h2>VALUES</h2>
            <ul>
                <p>To succed at Garden TSS, trainees needs to possess:</p>
                <li>INNOVATION</li>
                <li>TEAM WORK</li>
                <li>EFFICIENCY</li>
                <li>DISCIPLINE</li>
            </ul>
        </div>
    </div>
    <?php
   include("footer.php")
   ?>
</body>
</html>