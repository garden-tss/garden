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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            padding: 80px 0;
            background-color: #5648FF;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero-text h1 span {
            color: #a89fff;
        }

        .hero-image {
            flex: 1;
            max-width: 500px;
        }

        .hero-image img {
            width: 100%;
            border-radius: 8px;
        }

        .partners {
            margin-top: 40px;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .partners img {
            height: 30px;
            filter: brightness(0) invert(1);
            opacity: 0.7;
        }

        /* About Section */
        .about {
            padding: 80px 0;
        }

        .about-container {
            display: flex;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            flex: 1;
        }

        .about-image img {
            width: 100%;
            border-radius: 8px;
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .about-card {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .about-card h3 {
            margin-bottom: 10px;
        }

        .browse-btn {
            display: inline-block;
            padding: 12px 24px;
            background: #5648FF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 20px;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: #f9f9f9;
            text-align: center;
        }

        .services h2 {
            margin-bottom: 50px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .service-card {
            padding: 30px;
            border-radius: 8px;
            background: green;
            color: white;
            transition: transform 0.3s;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
           
        }

        .service-card:nth-child(2) {
            background: #5648FF;
            color: white;
        }

        .service-card img {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .hero-content, .about-container {
                flex-direction: column;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .partners {
                flex-wrap: wrap;
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
        
    
       


.header {
  
  animation: slideDown 0.5s ease-out;
}

@keyframes slideDown {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(0);
  }
}

.hero-text h1 {

  animation: fadeInLeft 1s ease-out;
}

.hero-text p {
  animation: fadeInLeft 1s ease-out 0.3s backwards;
}

.partners {
  
  animation: fadeInUp 1s ease-out 0.6s backwards;
}

.hero-image img {
  
  animation: fadeInRight 1s ease-out;
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.about-image img {
 
  transition: transform 0.3s ease;
}

.about-image img:hover {
  transform: scale(1.05);
}

.about-card {
  
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(5, 255, 5, 0.9);
}


.service-card {
  
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgb(0, 0, 0);
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

       .footer {
    width: 100%;
    background-color: #1a2937;
    color: #ffffff;
    height: 300px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-nav {
   
    margin-bottom: 40px;
}

.footer-section {
    flex: 1;
    margin-right: 20px;
}

.footer-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 500;
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin-bottom: 12px;
}

.footer-section ul li a {
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
    opacity: 0.8;
    transition: opacity 0.2s;
}

.footer-section ul li a:hover {
    opacity: 1;
}




.about-image {
    width: 100%;
    height: 400px;
    position: relative;
    overflow: hidden;
}

.about-image img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transform: translateX(100%);
    animation: slideWithPause 24s linear infinite;  /* 4s per image × 6 images */
}

/* 4 second intervals between starts (1.5s pause + 2.5s transition) */
.about-image img:nth-child(1) { animation-delay: 0s; }
.about-image img:nth-child(2) { animation-delay: 4s; }
.about-image img:nth-child(3) { animation-delay: 8s; }
.about-image img:nth-child(4) { animation-delay: 12s; }
.about-image img:nth-child(5) { animation-delay: 16s; }
.about-image img:nth-child(6) { animation-delay: 20s; }

@keyframes slideWithPause {
    0% {
        opacity: 0;
        transform: translateX(100%);
    }
    5% {
        opacity: 1;
        transform: translateX(0);
    }
    /* Pause for 1.5 seconds (from 5% to 40%) */
    40% {
        opacity: 1;
        transform: translateX(0);
    }
    90% {
        opacity: 1;
        transform: translateX(-100%);
    }
    91%, 100% {
        opacity: 1;
        transform: translateX(-100%);
    }
}
    </style>
</head>
<body>
<?php
    include("test.php")
   ?>
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>WELCOME TO SOFTWARE  <span> Development</span>!!</h1>
                <p>The Software Development (SOD) Department at Garden tss focuses on equipping students with the knowledge, skills, and tools necessary for creating software applications, websites, and digital solutions.</p>
                <div class="partners">
                <a href="https://www.facebook.com/rugambageandre.gardentvetschool?__tn__=%3C" style="color: #f5f5f5;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                 <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                 </svg></a>
                <a href="" style="color: #f5f5f5;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></a>
                  <a href="" style="color: #f5f5f5;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                   <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                   </svg>
                  </a>
                 <a href="" style="color: #f5f5f5;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                 <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                  </svg></a>
                </div>
            </div>
            <div class="hero-image">
                <img src="./images of garden/l4sod.jpeg" alt="Website creation platform">
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container about-container">
            <div class="about-image">
                <img src="./images of garden/sod2.jpeg" alt="Our team at work">
                <img src="./images of garden/sod3.jpeg" alt="Our team at work">
                <img src="./images of garden/sod4.jpeg" alt="Our team at work">
                <img src="./images of garden/sod5.jpeg" alt="Our team at work">
                <img src="./images of garden/sod6.jpeg" alt="Our team at work">
                <img src="./images of garden/sod7.jpeg" alt="Our team at work">
            </div>
            <div class="about-content">
                <h2>Key Areas of Study in the SOD Department</h2>
                <div class="about-card">
                    <h3>Fundamentals of Software Development</h3>
                    <p><ul>
                        <li>Introduction to computers and software development.</li>
                        <li>Understanding software development life cycles (SDLC).</li>
                        <li>Basics of algorithms and problem-solving techniques.</li>
                    </ul></p>
                </div>
                <div class="about-card">
                    <h3>Programming Languages</h3>
                    <p><ul>
                        <li>Python (for general-purpose programming and AI).</li>
                        <li>Java (for mobile apps and enterprise solutions).</li>
                        <li>C++ (for game development and system programming).</li>
                        <li>JavaScript (for web development).</li>
                    </ul></p>
                </div>
               
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Software Development</h2>
            <div class="services-grid">
                <div class="service-card">
                   
                    <h3>Web Development</h3>
                    <p><ul>
                        <li>Frontend development (HTML, CSS, JavaScript).</li>
                        <li>Backend development (Node.js, PHP, or Python with Django/Flask).</li>
                        <li>Database management (MySQL, MongoDB, Firebase).</li>
                    </ul></p>
                </div>
                <div class="service-card">
                    <h3>Software Design and Development</h3>
                    <p><ul>
                        <li>Object-Oriented Programming (OOP) concepts.</li>
                        <li>Software architecture and design patterns.</li>
                        <li>Testing and debugging techniques.</li>
                    </ul></p>
                </div>
                <div class="service-card">
                    <h3>Database Management and Data Structures</h3>
                    <p><ul>
                        <li>SQL and NoSQL databases for data storage.</li>
                        <li>Data structures (arrays, linked lists, trees, stacks, queues).</li>
                        <li>Efficient algorithms for data processing.</li>
                    </ul></p>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
    <div class="footer-content">
        <nav class="footer-nav">
            <div class="footer-section">
                <h2>Location</h2>
                <ul>
                    <li><a href=""><strong>Country: </strong>Rwanda</a></li>
                    <li><a href="#"><strong>Address:</strong> VH38+3F, Rukira</a></li>
                    <li><a href="#"><strong>Provence:</strong> Eastern</a></li>
                    <li><a href=""><strong>District: </strong>Ngoma</a></li>
                   
                </ul>
            </div>
            <div class="footer-section" style="margin-left: 350px; margin-top:-200px">
                <h2>social Media</h2>
                <ul>
                <div class="partnerss">
                <a href="https://www.facebook.com/rugambageandre.gardentvetschool?__tn__=%3C" style="color: #f5f5f5;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                 <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                 </svg></a> Facebook <br><br>
                <a href="" style="color: #f5f5f5;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg></a> Twitter <br><br>
                  <a href="" style="color: #f5f5f5;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                   <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                   </svg>   
                  </a> Instagram
                  <br><br>
                 <a href="" style="color: #f5f5f5;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                 <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                  </svg></a> +250 78-845-0496
                </div>
                </ul>
            </div>
        
        </nav>
 
        <div class="map-container">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.6180446782364!2d30.566456055126128!3d-2.1473370886913172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c4cb37e426c625%3A0x7221b435a93126ba!2sschool!5e1!3m2!1sen!2srw!4v1739020527261!5m2!1sen!2srw"
                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <p style="color: white; "><strong>Copyright © 2025. Garden TSS. All Rights Reserved</strong></p>
        </div>
        </div>
        
    </div>
    
</footer>
</body>
</html>