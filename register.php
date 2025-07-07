<?php 
session_start();

if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "You are already logged in";
    }
    header("Location: index.php");
    exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?> 

<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /* Register Container */
    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: linear-gradient(135deg, #f0f4f8, #dfe9f3);
        padding: 20px;
        position: relative;
    }

    /* Background Overlay */
    .register-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(3px);
        background: rgba(255, 255, 255, 0.2);
        z-index: 1;
    }

    /* Register Card */
    .register-card {
        display: flex;
        width: 100%;
        max-width: 1000px;
        border-radius: 20px;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        background: #ffffff;
        overflow: hidden;
        position: relative;
        z-index: 2;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .register-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
    }

    /* Register Form */
    .register-form {
        flex: 1;
        padding: 60px 40px;
        background: #ffffff;
    }

    .register-form h4 {
        font-size: 30px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
        text-align: center;
    }

    .register-form h5 {
        font-size: 16px;
        font-weight: 500;
        color: #555;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-group {
        position: relative;
        margin-bottom: 30px;
    }

    .form-group input {
        width: 100%;
        padding: 14px 15px 14px 45px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        background-color: #f9f9f9;
    }

    .form-group input:focus {
        outline: none;
        border-color: #007bff;
        background: #fff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
    }

    .form-group i {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #777;
        font-size: 18px;
    }

    .btn-orange {
        background: linear-gradient(90deg, rgb(20, 21, 21), rgb(83, 117, 204));
        color: #fff;
        border: none;
        padding: 14px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        width: 100%;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn-orange:hover {
        background: linear-gradient(90deg, #ff6a3d, #fca16d);
        transform: scale(1.05);
    }

    .text-center a {
        color: #007bff;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .text-center a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Register Side */
    .register-side {
        flex: 1;
        background: linear-gradient(135deg, rgb(20, 21, 21), #6c63ff);
        padding: 60px 40px;
        color: #fff;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .register-side img {
        max-width: 200px;
        margin-bottom: 25px;
        filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.4));
        animation: pulse 2s infinite ease-in-out;
    }

    .register-side h5 {
        font-size: 22px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .google-btn {
        background: #ffffff;
        color: #444;
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 500;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .google-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    .google-btn img {
        height: 22px;
        margin-right: 12px;
    }

    /* Footer Links */
    .footer-links {
        margin-top: 25px;
        font-size: 14px;
    }

    .footer-links a {
        color: #eee;
        text-decoration: none;
        margin: 0 8px;
        opacity: 0.9;
        transition: opacity 0.3s ease;
    }

    .footer-links a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    /* Alerts */
    .alert {
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 14px;
        background: rgba(255, 99, 132, 0.1);
        border: 1px solid #ff6384;
        color: #d32f2f;
    }

    .alert-success {
        background: rgba(40, 167, 69, 0.1);
        border: 1px solid #28a745;
        color: #1b5e20;
    }

    /* Animations */
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .register-card {
            flex-direction: column;
            max-width: 95%;
        }

        .register-form,
        .register-side {
            padding: 40px 30px;
        }

        .register-side img {
            max-width: 150px;
        }
    }

    @media (max-width: 576px) {
        .register-form h4 {
            font-size: 24px;
        }

        .register-form h5 {
            font-size: 14px;
        }

        .form-group input {
            font-size: 14px;
            padding: 12px 12px 12px 40px;
        }

        .btn-orange {
            padding: 12px;
            font-size: 15px;
        }
    }
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="register-container">
    <div class="register-card">
        <div class="register-form">
            <?php include('message.php'); ?>
            <h4>Create Your Account</h4>
            <h5>Soroti University - Internship Management System</h5>
            <form action="registercode.php" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input required name="fname" type="text" placeholder="First Name" class="form-control">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input required name="lname" type="text" placeholder="Last Name" class="form-control">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input required name="email" type="email" placeholder="Email Address" class="form-control">
                </div>
                <div class="form-group">
                    <i class="fas fa-id-card"></i>
                    <input required name="student_id" type="text" placeholder="Student ID" class="form-control">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input required name="password" type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input required name="cpassword" type="password" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="form-group">
                    <button name="register_btn" type="submit" class="btn btn-orange">Register Now</button>
                </div>
                <div class="text-center">
                    <a href="login.php">Already have an account? Log In</a>
                </div>
            </form>
        </div>
        <div class="register-side">
            <img src="assets/images/updated.png" alt="Soroti University Logo">
            <h5>Internship Management System</h5>
            <a href="#" class="google-btn">
                <img src="https://www.google.com/favicon.ico" alt="Google Logo">
                Sign up with Soroti University Email
            </a>
            <div class="footer-links">
                <a href="#">English (en)</a> | <a href="#">Cookies Notice</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms</a>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>