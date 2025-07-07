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


/* Login Container */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #f0f4f8, #dfe9f3);
    padding: 20px;
    position: relative;
}

/* Background Overlay (optional blur instead of dark overlay) */
.login-container::before {
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

/* Login Card */
.login-card {
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

.login-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

/* Login Form */
.login-form {
    flex: 1;
    padding: 60px 40px;
    background: #ffffff;
}

.login-form h4 {
    font-size: 30px;
    font-weight: 700;
    color: #333;
    margin-bottom: 30px;
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
    background: linear-gradient(90deg,rgb(20, 21, 21),rgb(83, 117, 204));
    color: #fff;
    border: none;
    padding: 14px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    width: 100%;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-orange:hover {
    background: linear-gradient(90deg, #ff6a3d, #fca16d);
}

.text-center a {
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
}

.text-center a:hover {
    text-decoration: underline;
}

/* Login Side */
.login-side {
    flex: 1;
    background: linear-gradient(135deg,rgb(20, 21, 21), #6c63ff);
    padding: 60px 40px;
    color: #fff;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.login-side img {
    max-width: 200px;
    margin-bottom: 25px;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.4));
}

.login-side h5 {
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
}

.footer-links a:hover {
    text-decoration: underline;
    opacity: 1;
}

/* Alerts */
.alert {
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 20px;
    font-size: 14px;
}

/* Responsive */
@media (max-width: 768px) {
    .login-card {
        flex-direction: column;
        max-width: 95%;
    }

    .login-form,
    .login-side {
        padding: 40px 30px;
    }

    .login-side img {
        max-width: 150px;
    }
}

@media (max-width: 576px) {
    .login-form h4 {
        font-size: 24px;
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

<div class="login-container">
    <div class="login-card">
        <div class="login-form">
            <?php include('message.php'); ?>
            <h4 class="mb-4">Login Into Your Account</h4>
            <form action="logincode.php" method="POST">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input name="email" type="email" placeholder="Email Address" class="form-control" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input name="password" type="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button name="login_btn" type="submit" class="btn btn-orange">Log In</button>
                </div>
                <div class="text-center">
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="login-side">
            <img src="assets/images/updated.png" alt="Soroti University Logo">
            <h5>Internship Management System</h5>
            <a href="#" class="google-btn">
                <img src="https://www.google.com/favicon.ico" alt="Google Logo">
                Sign in with Soroti University Email
            </a>
            <div class="footer-links">
                <a href="#">English (en)</a> | <a href="#">Cookies Notice</a> | <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>