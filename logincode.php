<?php
session_start();
include('../config/dbcon.php');

if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Query to select user by email
    $query = "SELECT * FROM userss WHERE email='$email' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        // Fetching user data
        $user = mysqli_fetch_assoc($query_run);

        // Checking if the password matches
        if ($password == $user['password']) {
            // Storing user data in session
            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = $user['role_as'];
            $_SESSION['student_id'] = $user['id']; // This stores the student ID

            // Storing full name and email in session
            $_SESSION['auth_user'] = [
                'user_id' => $user['id'],
                'user_name' => $user['fname'] . ' ' . $user['lname'],
                'user_email' => $user['email'],
            ];

            // Check user role and redirect accordingly
            if ($user['role_as'] == '1') {  // Admin
                $_SESSION['message'] = "Welcome to the dashboard";
                header("Location: student/index.php");
                exit(0);
            } else {  // Regular user
                $_SESSION['message'] = "You are logged in successfully";
                header("Location: index.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Invalid email or password";
            header("Location: login.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Invalid email or password";
        header("Location: login.php");
        exit(0);
    }
}


?>
