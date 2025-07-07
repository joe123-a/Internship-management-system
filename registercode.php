<?php 
session_start();
include('../config/dbcon.php');

if(isset($_POST['register_btn'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);  // New field

    // Debugging: Print the student_id to check if it's correct
    echo "Student ID (from form): " . $student_id . "<br>";  // Print the student ID

    // Check if password and confirm password match
    if($password == $confirm_password) {
        // Check if email already exists in the database
        $checkemail = "SELECT email FROM userss WHERE email=?";
        $stmt = mysqli_prepare($con, $checkemail);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) > 0) {
            $_SESSION['message'] = "Email already exists";
            header('Location: register.php');
            exit(0);
        } else {
            // Insert user data into the database
            $user_query = "INSERT INTO userss (fname, lname, email, password, student_id) 
                           VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $user_query);
            mysqli_stmt_bind_param($stmt, 'sssss', $fname, $lname, $email, $password, $student_id);

            if(mysqli_stmt_execute($stmt)) {
                // Store student_id in session
                $_SESSION['student_id'] = $student_id;

                $_SESSION['message'] = "Registered successfully";
                header('Location: login.php');
                exit(0);
            } else {
                $_SESSION['message'] = "Something went wrong during registration";
                echo "Error during registration: " . mysqli_error($con); // Print the error if any
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Password and confirm password do not match";
        header('Location: register.php');
        exit(0);
    }
} else {
    header('Location: register.php');
    exit(0);
}
?>
