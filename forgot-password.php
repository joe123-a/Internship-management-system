<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .forgot-password-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url('assets/images/campus-bg.jpg') no-repeat center center/cover;
        position: relative;
        padding: 20px;
    }

    .forgot-password-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .forgot-password-box {
        background: #fff;
        padding: 40px 30px;
        max-width: 500px;
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        position: relative;
        z-index: 2;
    }

    .forgot-password-box h4 {
        font-size: 26px;
        margin-bottom: 15px;
        font-weight: 600;
        color: #333;
    }

    .forgot-password-box p {
        font-size: 15px;
        color: #666;
        margin-bottom: 25px;
    }

    .form-group {
        position: relative;
        margin-bottom: 25px;
    }

    .form-group input {
        width: 100%;
        padding: 12px 15px 12px 40px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: #f97500;
        box-shadow: 0 0 5px rgba(249, 117, 0, 0.3);
    }

    .form-group i {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #999;
    }

    .btn-orange {
        background: linear-gradient(90deg, #f97500, #ff9f43);
        color: #fff;
        border: none;
        padding: 14px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        width: 100%;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-orange:hover {
        background: linear-gradient(90deg, #dd5e00, #e68a00);
    }

    .back-to-login {
        margin-top: 20px;
        text-align: center;
    }

    .back-to-login a {
        color: #f97500;
        text-decoration: none;
        font-size: 14px;
    }

    .back-to-login a:hover {
        color: #dd5e00;
        text-decoration: underline;
    }
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="forgot-password-container">
    <div class="forgot-password-box">
        <?php include('message.php'); ?>
        <h4>Forgot Password?</h4>
        <p>Enter your registered email address and we'll send you instructions to reset your password.</p>
        <form action="send-reset-link.php" method="POST">
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
            </div>
            <button type="submit" name="reset_password_btn" class="btn btn-orange">Send Reset Link</button>
        </form>
        <div class="back-to-login">
            <a href="login.php"><i class="fas fa-arrow-left"></i> Back to Login</a>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
