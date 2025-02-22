<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background-color:rgba(18, 219, 246, 0.51);
            padding: 2rem;
            min-height: 100vh;
            display: flex;
            justify-content: center;
        }

        .form-container {
            margin-top: 50px;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            color: #333;
            margin-bottom: 1.5rem;
        }

        .section {
            margin-bottom: 2rem;
        }

        .form-row {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .form-group {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        input, select, textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #0099ff;
            box-shadow: 0 0 0 3px rgba(0, 153, 255, 0.1);
        }

        .courses-table {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 1rem;
            margin-top: 0.5rem;
        }

        .courses-header {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr auto;
            gap: 1rem;
            margin-bottom: 0.5rem;
        }

        .add-record {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: #f0f0f0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-record:hover {
            background: #e0e0e0;
        }

        .register-btn {
            background: #0099ff;
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s, transform 0.2s;
        }

        .register-btn:hover {
            background: #0088ee;
            transform: translateY(-1px);
        }

        .required {
            color: #ff4444;
        }

        /* Animation for form fields */
        input, select, textarea {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }
        .header {
            margin-top: -50px;
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
        
    </style>
</head>
<body>
<?php
    include("test.php")
   ?>
    
<div class="form-container">
        <h1 align="center">Student Registration Form</h1>
        <form action="submit_form.php" method="post">
            <div class="section">
                <h2>Student Information</h2>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="First Name" required name="FirstName">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Middle Name" name="MiddleName">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" required name="LastName">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="date" required name="DateOfBirth">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Student ID" required name="StudentID">
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Address</h2>
                <div class="form-group">
                    <input type="text" placeholder="Parent Names" required name="ParentNames">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="City" required name="City">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="State / Province" required name="Province">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" placeholder="Country" required name="Country">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="National Exam Results" required name="Results">
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Contact Information</h2>
                <div class="form-group">
                    <input type="number" placeholder=" Phone number" required name="Email">
                </div>
            </div>

            <div class="section">
                <h2>Courses <span class="required">*</span></h2>
                <div class="courses-table">
                    <div class="courses-header">
                        <select required name="Course">
                            <option value="">Select Course</option>
                            <option value="SOD">SOD</option>
                            <option value="ATC">ATC</option>
                            <option value="BDC">BDC</option>
                        </select>
                        <select required name="Level">
                            <option value="">Select Level</option>
                            <option value="Level 3">Level 3</option>
                            <option value="Level 4">Level 4</option>
                            <option value="Level 5">Level 5</option>
                        </select>
                        <select required name="StudyWay">
                            <option value="">Select Way of Study</option>
                            <option value="External">External</option>
                            <option value="Internal">Internal</option>
                        </select>
                        <input type="date" required name="CourseDate">
                    </div>
                </div>
            </div>

            <div class="section">
                <textarea placeholder="Comments" name="Comments"></textarea>
            </div>

            <button type="submit" class="register-btn">REGISTER</button>
        </form>
</body>
</html>