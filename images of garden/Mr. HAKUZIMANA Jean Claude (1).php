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

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./image/bdc2.jpeg);
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 10%;
            color: white;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #f7941d;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-weight: bold;
            margin-top: 20px;
        }

        .about {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
            padding: 60px 10%;
            background: white;
        }
     .about img{
        height: 100%;
     }
        .logo {
            max-width: 300px;
            justify-self: end;
        }

        .services {
            padding: 60px 10%;
            background: #f5f5f5;
        }

        .services h2 {
            margin-bottom: 30px;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .service-card {
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .service-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .bottom-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            padding: 60px 10%;
            gap: 40px;
        }

        .news h3, .jobs h3 {
            color: #f7941d;
            margin-bottom: 20px;
        }

        .news-item, .job-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        @media (max-width: 768px) {
            .about {
                grid-template-columns: 1fr;
            }
            .service-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .bottom-section {
                grid-template-columns: 1fr;
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


        /* First, add these keyframe animations */
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

@keyframes scaleIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.scroll-hidden {
    opacity: 0;
    visibility: hidden;
}

.scroll-animate {
    animation-duration: 1s;
    animation-fill-mode: both;
}

.fade-in-up {
    animation-name: fadeInUp;
}

.fade-in-left {
    animation-name: fadeInLeft;
}

.fade-in-right {
    animation-name: fadeInRight;
}

.scale-in {
    animation-name: scaleIn;
}


.about {
    opacity: 0;
    visibility: hidden;
}

.services {
    opacity: 0;
    visibility: hidden;
}

.service-card {
    opacity: 0;
    visibility: hidden;
}

.bottom-section {
    opacity: 0;
    visibility: hidden;
}

.service-card:nth-child(1) { animation-delay: 0.2s; }
.service-card:nth-child(2) { animation-delay: 0.4s; }
.service-card:nth-child(3) { animation-delay: 0.6s; }
.service-card:nth-child(4) { animation-delay: 0.8s; }


    </style>
</head>
<body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
            rect.bottom >= 0
        );
    }

    
    function animateOnScroll() {
        
        const about = document.querySelector('.about');
        if (isInViewport(about) && !about.classList.contains('scroll-animate')) {
            about.classList.add('scroll-animate', 'fade-in-up');
            about.style.opacity = '1';
            about.style.visibility = 'visible';
        }

        
        const services = document.querySelector('.services');
        if (isInViewport(services) && !services.classList.contains('scroll-animate')) {
            services.classList.add('scroll-animate', 'fade-in-up');
            services.style.opacity = '1';
            services.style.visibility = 'visible';
           
            const cards = services.querySelectorAll('.service-card');
            cards.forEach(card => {
                card.classList.add('scroll-animate', 'scale-in');
                card.style.opacity = '1';
                card.style.visibility = 'visible';
            });
        }

      
        const bottomSection = document.querySelector('.bottom-section');
        if (isInViewport(bottomSection) && !bottomSection.classList.contains('scroll-animate')) {
            bottomSection.classList.add('scroll-animate', 'fade-in-up');
            bottomSection.style.opacity = '1';
            bottomSection.style.visibility = 'visible';
        }
    }


    animateOnScroll();

    window.addEventListener('scroll', animateOnScroll);
});
</script>
<header class="header">
        <div class="logo">
            <img src="./image/logo.jpg" alt="BeSchool Logo">
            Garden TSS
        </div>
        <nav class="nav">
            <a href="#">Home</a>
            <select id="navbar" onchange="location = this.value;">
                <option value="#">Trades Offered</option>
               <option value="sod.php">SOD</option>
               <option value="bdc.php">BDC</option>
               <option value="atc.php">AUT</option>
               
           </select>
           <a href="StudentP.php">Student Performance </a>
           <a href="announcement.php">Announcements</a>
            <a href="registration.php">Register</a>
            
            <a href="login.php" class="buy-now">login</a>
        </nav>
    </header>
    <section class="hero">
        <h1>WELCOME TO BUILDING CONSTRUCTION</h1>
        <p>This department provides a broad foundation in various engineering principles, including civil, electrical, and software engineering</p>
        <a href="#" class="cta-button">Engineering</a>
    </section>

    <section class="about">
        <div class="about-content">
            <h2>BUILDING CONSTRUCTION </h2><br>
            <p><strong>Role:</strong> This department provides a broad foundation in various engineering principles, including civil, electrical, and software engineering. It covers problem-solving, design, and innovation in different fields of engineering.</p><br>
             <p><strong>Importance: </strong>It equips students with analytical and technical skills applicable to multiple industries, fostering creativity, critical thinking, and a strong foundation for future specialization.</p>
            <a href="#" class="cta-button">Thank you</a>
        </div>
        <img src="./image/shef.jpg" alt="Pioneer Construction Logo" class="logo">
    </section>

    <section class="services">
        <h2>SERVICES</h2>
        <div class="service-grid">
            <div class="service-card">
                <img src="./image/bcd3.jpeg" alt="Site Development">
                <h3> Planning and Design</h3>
                <p>Site selection and analysis
                 Architectural design
                 Structural design
                  Building codes and regulations
                  Estimation and budgeting</p>
            </div>
            <div class="service-card">
                <img src="./image/bdc2.jpeg" alt="Open Pit Mining">
                <h3> Site Preparation</h3>
                <p>Land clearing
                   Excavation
                   Soil testing
                Leveling and grading</p>
            </div>
            <div class="service-card">
                <img src="./image/school.jpg" alt="Heavy Civil Construction">
                <h3> Foundation</h3>
                <p>Shallow foundations (footings, raft, slab-on-grade)
                   Deep foundations (piles, piers, caissons)
                    Waterproofing and drainage</p>
            </div>
            <div class="service-card">
                <img src="./image/pc.jpeg" alt="Reclamation">
                <h3> Building Services</h3>
                <p>Electrical systems
                Plumbing and water supply
                HVAC (Heating, Ventilation, and Air Conditioning)
                Fire safety systems</p>
            </div>
        </div>
    </section>

    <section class="bottom-section">
        <div class="news">
            <h3>Key Areas of Study in the Engineering Department</h3>
            <div class="news-item">
                <h4>Fundamentals of Engineering(BDC)</h4><br>
                <p>1. Introduction to different branches of engineering (civil,   mechanical, electrical, etc.). <br>
                 2. Basic scientific principles (physics, chemistry, and mathematics) applied in engineering. <br>
                 3. Engineering ethics and professional responsibility.</p>
            </div>
            <div class="news-item">
                <h4>Safety First: New Initiatives Launched</h4> <br>
                <p>The Engineering Department at Garden tss Secondary School plays a crucial role in providing students with a strong foundation in engineering principles, problem-solving techniques, and hands-on technical skills.</p>
            </div>
        </div>
        <div class="jobs">
            <h3>Exterior and Landscaping</h3>
            <div class="job-item">
                <h4>Pavements and pathways</h4>
                <p>Gardens and green spaces</p>
            </div>
            <div class="job-item">
                <h4>Fencing and security systems</h4>
                <p>Plumbing and water supply</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h2>Connect With Us</h2>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/footerr.PNG-f4uvoUGzx1ScoyuhTzkLJw70zTXzA0.png" alt="Twitter">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/footerr.PNG-f4uvoUGzx1ScoyuhTzkLJw70zTXzA0.png" alt="Facebook">
                    </a>
                </div>
            </div>
            <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h2>Connect With Us</h2>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/footerr.PNG-f4uvoUGzx1ScoyuhTzkLJw70zTXzA0.png" alt="Twitter">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/footerr.PNG-f4uvoUGzx1ScoyuhTzkLJw70zTXzA0.png" alt="Facebook">
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h2>Contact Us</h2>
                <div class="contact-info">
                    <p>📍 Address: VH38+3F, Rukira</p>
                    <p>📞 Tel. No.: (250) 78-845-0496</p>
                    <p>✉️ Email: gardentvetschool2022@gmail.com</p>
                </div>
            </div>

            <div class="footer-section">
                <h2>Visit Us</h2>
                <div class="map-container">
                    <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.6180446782364!2d30.566456055126128!3d-2.1473370886913172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c4cb37e426c625%3A0x7221b435a93126ba!2sschool!5e1!3m2!1sen!2srw!4v1739020527261!5m2!1sen!2srw"
                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Copyright © 2025. Garden TSS. All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>