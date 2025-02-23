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

        .hero {
            background-color: #00205B;
            color: white;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
            min-height: 400px;
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: slideIn 0.8s ease-out;
        }

        .hero p {
            font-size: 1.1rem;
            max-width: 600px;
            animation: fadeIn 1s ease-out 0.3s both;
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            object-fit: cover;
            animation: scaleIn 1.2s ease-out;
        }

        .orange-shape {
            position: absolute;
            left: -5%;
            bottom: -50%;
            width: 500px;
            height: 500px;
            background-color: #FF6B00;
            border-radius: 50%;
            animation: shapeFloat 8s ease-in-out infinite;
        }

        .cards-container {
            max-width: 1200px;
            margin: -50px auto 2rem;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 3;
        }

        .card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            animation: cardSlideUp 0.6s ease-out backwards;
        }

        .card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .card:nth-child(3) {
            animation-delay: 0.4s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-icon {
            width: 48px;
            height: 48px;
            margin-bottom: 1.5rem;
            color: #00205B;
        }

        .card h2 {
            color: #00205B;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .card p {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .contact-link {
            color: #FF6B00;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-weight: 500;
            transition: transform 0.2s ease;
        }

        .contact-link:hover {
            transform: translateX(5px);
        }

        .contact-link::after {
            content: '→';
            margin-left: 0.5rem;
        }

        .help-link {
            color: #FF6B00;
            text-decoration: none;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes scaleIn {
            from {
                transform: scale(1.1);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes cardSlideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes shapeFloat {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(5deg);
            }
        }

        @media (max-width: 768px) {
            .hero-image {
                display: none;
            }
            
            .hero {
                padding: 3rem 1.5rem;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .cards-container {
                padding: 0 1rem;
                margin-top: -30px;
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
    include("test.php")
   ?>
    <section class="hero">
        <div class="orange-shape"></div>
        <div class="hero-content">
            <h1>Contact us</h1>
            <p>Got a question? You might find the answer in our <a href="#" class="help-link">Help centre</a>. Otherwise, reach to us</p>
        </div>
        <img src="./image/pc.jpeg" alt="Customer service team" class="hero-image">
    </section>

    <div class="cards-container">
        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
              </svg>
            </svg>
            <h2>Our email</h2>
            <p><p>✉️ Email: gardentvetschool2022@gmail.com</p>.</p>
            
        </div>

        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
              </svg>
            <h2>our numbers</h2>
            <p>   <p>📞 Tel. No.: +250 78-845-0496</p>
            
        </div>

        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
              </svg>
            <h2>Our location</h2>
            <p>Country: Rwanda <br>
            📍 Address: VH38+3F, Rukira <br> Province: East <br> District: Ngoma</p>
          
            
        </div>
    </div>
    <?php
   include("footer.php")
   ?>
</body>
</html>