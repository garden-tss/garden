<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Popup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .popup {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            animation: fadeIn 0.5s ease-out;
        }

        .popup h2 {
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .popup p {
            color: #333;
            margin-bottom: 20px;
        }

        .close-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .close-btn:hover {
            background-color: #45a049;
        }

        .tick-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="popup">
        <svg class="tick-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle cx="26" cy="26" r="25" fill="#4CAF50"/>
            <path fill="none" stroke="#ffffff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        <h2>You are registered!</h2>
        <p>Thank you for registering with us.</p>
   <a href="index.php">    <button class="close-btn" onclick="this.parentElement.style.display='none';">Close</button></a>
    </div>
</body>
</html>