<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garden TSS Navigation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            padding-top: 70px; /* Add padding to account for fixed navbar */
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 5%;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .navbar.hidden {
            transform: translateY(-100%);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: #333;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        .logo span {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
            list-style: none;
        }

        .nav-links li a, .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 1rem;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links li a::after, .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #FFB800;
            transition: width 0.3s ease;
        }

        .nav-links li a:hover::after, .nav-links a:hover::after {
            width: 100%;
        }

        .trades-dropdown {
            position: relative;
            display: inline-block;
        }

        .trades-dropdown select {
            appearance: none;
            background-color: transparent;
            border: none;
            padding: 0 1em 0 0;
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            cursor: pointer;
            line-height: inherit;
            outline: none;
        }

        .trades-dropdown::after {
            content: "▼";
            font-size: 0.8em;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .login-btn {
            background-color: #FFB800;
            color: #000;
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .login-btn:hover {
            background-color: #FFA500;
            transform: scale(1.05);
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
            padding: 0.5rem;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background-color: #333;
            transition: 0.3s;
        }

        @media (max-width: 968px) {
            .menu-toggle {
                display: flex;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background-color: white;
                flex-direction: column;
                padding: 1rem;
                gap: 1rem;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .login-btn {
                margin-top: 1rem;
            }
        }

        /* Add some content for scrolling */
        .content {
            height: 2000px;
            padding: 20px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="logo">
            <img src="./image/logo.jpg" alt="Garden TSS Logo">
            <span>Garden TSS</span>
        </a>

        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li class="trades-dropdown">
                <select id="navbar" onchange="location = this.value;">
                    <option value="#">Trades Offered</option>
                    <option value="sod.php">SOD</option>
                    <option value="bdc.php">BDC</option>
                    <option value="atc.php">AUT</option>
                </select>
            </li>
            <li><a href="StudentP.php">Student Performance</a></li>
            <li><a href="announcement.php">Announcements</a></li>
            <li><a href="registration.php">Register</a></li>
            <li>
                <a href="login.php"><button class="login-btn">Login</button></a>
            </li>
        </ul>
    </nav>
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }

        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.classList.add('hidden');
            } else {
                navbar.classList.remove('hidden');
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>