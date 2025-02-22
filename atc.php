<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GARDEN TSS</title>
    <link rel="icon" type="image/png" href="./image/logo.jpg">
    <link rel="stylesheet" href="style.css">
    <style>
         .slideshow-container {
            max-width: 1000px;
            height: 500px;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .slides {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide.active {
            opacity: 1;
        }

        /* Navigation Arrows */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 16px;
            color: white;
            font-size: 24px;
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
            user-select: none;
            transition: 0.3s ease;
            z-index: 2;
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Dots Navigation */
        .dots-container {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }

        .dot {
            width: 12px;
            height: 12px;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .dot.active {
            background-color: white;
        }

        /* Caption */
        .caption {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            text-align: center;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            font-size: 18px;
            z-index: 2;
        }
    </style>
</head>

<body>
<?php
    include("test.php")
   ?>
    <section class="hero">
        <h1>WELCOME TO ATC </h1>
        <p style="color: white;"> The Automobile Technology (ATC) Department at garden tss focuses on educating students about the design, manufacturing, maintenance, and repair of vehicles. This department provides both theoretical and practical knowledge on automobile mechanics, electrical systems, and modern vehicle technologies, preparing students for careers in the automotive industry</p>
        
    </section>

 

    <section class="features">
        <ul class="feature-list">
            <h2>Key Areas of Study in the ATC Department</h2><br>
            <li>
                <h3>1. Fundamentals of Automobile Technology</h3>
                <p>→ Introduction to the history and evolution of automobiles. <br>
                → Understanding vehicle classifications (passenger cars, trucks, motorcycles). <br>
                → Basics of automotive engineering and design.</p>
            </li>
            <li>
                <h3>2. Engine Technology & Powertrain Systems</h3>
                <p> → Internal combustion engine (ICE) operation: petrol vs. diesel engines. <br>
                → Engine components: pistons, crankshafts, camshafts, valves, etc <br>
                → Engine tuning, performance enhancement, and troubleshooting.</p>
            </li>
            <li>
                <h3>3. Vehicle Electrical & Electronic Systems</h3>
                <p>→ Battery, alternator, and charging systems. <br>
                →  Ignition systems (traditional vs. electronic ignition). <br>
                →  Sensors, control units, and onboard diagnostics (OBD). <br>
                →     Hybrid and electric vehicle (EV) power systems..</p>
            </li>
            <li>
                <h3>4.Advanced Automotive Technologies</h3>
                <p>→ Hybrid and electric vehicle (EV) technology. <br>
                → Autonomous driving systems and ADAS (Advanced Driver-Assistance Systems). <br>
                →  Vehicle connectivity and IoT-based smart car systems..</p>
            </li>
        </ul>
        <div class="feature-image">
            <img src="./images of garden/atc1.jpeg" alt="Focus Device and Mobile App" style="max-width: 400px;">
        </div>
    </section>


    <div class="slideshow-container">
        <div class="slides">
            <div class="slide active">
                <img src="./images of garden/act6.jpeg" alt="Nature 1">
                <div class="caption">Beautiful Landscape</div>
            </div>
            <div class="slide">
                <img src="./images of garden/atc3.jpeg" alt="Nature 2">
                <div class="caption">Mountain View</div>
            </div>
            <div class="slide">
                <img src="./images of garden/atc4.jpeg" alt="Nature 3">
                <div class="caption">Ocean Sunset</div>
            </div>
            <div class="slide">
                <img src="./images of garden/atc5.jpeg" alt="Nature 4">
                <div class="caption">Forest Path</div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="prev" onclick="changeSlide(-1)">❮</div>
        <div class="next" onclick="changeSlide(1)">❯</div>

        <!-- Dots Navigation -->
        <div class="dots-container">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
            if (index >= slides.length) index = 0;
            if (index < 0) index = slides.length - 1;

            // Update slides
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');

            // Update dots
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');

            currentIndex = index;
        }

        function changeSlide(direction) {
            showSlide(currentIndex + direction);
        }

        function currentSlide(index) {
            showSlide(index);
        }

        // Auto advance slides
        setInterval(() => changeSlide(1), 5000);
    </script>









    <section class="faq">
        <h2>Importance of the ATC (Automobile Technology) Department</h2>
        <div class="faq-item">
            <h3>1.Prepares Students for the Automotive Industry</h3>
            <p>Equips students with the technical skills required for careers in vehicle design, repair, and servicing.</p>
        </div>
        <div class="faq-item">
            <h3>2.Encourages Problem-Solving and Technical Thinking</h3>
            <p>Helps students develop analytical and mechanical problem-solving skills.</p>
        </div>
        <div class="faq-item">
            <h3>3.Supports Innovation in Vehicle Technology</h3>
            <p>Provides knowledge of modern automotive trends like EVs, automation, and AI-powered vehicles.</p>
        </div>
    </section>
    <?php
   include("footer.php")
   ?>

</body>
</html>