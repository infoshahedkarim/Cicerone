<?php
session_start();
require 'db_connection.php';

/*===================== contactus page=======================*/

if(isset($_POST['contact_send_mgs']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO contactus (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Message sent successfully";
        header("Location: contact.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Message Failed";
        header("Location: contact.php");
        exit(0);
    }
}

/*=====================test case=======================*/

if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: test1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: test1.php");
        exit(0);
    }
}

/*======================== Register/ signup ============================*/

if (isset($_POST["register"])) {
    $fullName = $_POST["fullname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];
    
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    
    if (empty($fullName) OR  empty($contact) OR empty($email) OR empty($address) OR empty($password) OR empty($passwordRepeat)) {
     array_push($errors,"All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     array_push($errors, "Email is not valid");
    }
    if (strlen($password)<8) {
     array_push($errors,"Password must be at least 8 character long");
    }
    if ($password!==$passwordRepeat) {
     array_push($errors,"Password does not match");
    }
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
     array_push($errors,"Email already exists!");
    }
    if (count($errors)>0) {
     foreach ($errors as  $error) {
        $_SESSION['message'] = "<div class='alert alert-danger'>$error</div>";
     }
    }else{
     
     $sql = "INSERT INTO users (fullname, contact, email, address, password) VALUES ('$fullName','$contact', '$email', '$address', '$passwordHash')";
     $query_run = mysqli_query($con, $sql);

     if($query_run)
    {
        $_SESSION['message'] = "Signup was successfully";
        header("Location: login_signup.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Signup Failed";
        header("Location: login_signup.php");
        exit(0);
    }
    }
   
 }

/*================== Booking ==========================*/

 if(isset($_POST['booking']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $partners = mysqli_real_escape_string($con, $_POST['partners']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $destination = mysqli_real_escape_string($con, $_POST['destination']);
    $code = mysqli_real_escape_string($con, $_POST['code']);
    

    $query = "INSERT INTO booking (name,email,phone,partners,date,destination,code) VALUES ('$name','$email','$phone','$partners','$date','$destination','$code')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] ="Booking was successful";
        header("Location: Booking.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Booking failed";
        header("Location: Booking.php");
        exit(0);
    }
}

/*================== Login ==========================*/

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
     
     $sql = "SELECT * FROM users WHERE email = '$email'";
     $result = mysqli_query($con, $sql);
     $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
     if ($user) {
         if (password_verify($password, $user["password"])) {
             session_start();
             $_SESSION["user"] = "yes";
             $_SESSION['message'] ="Login in successful";
             header("Location: admin_dashboard.php");
             die();
         }else{
            $_SESSION['message'] ="Password does not match";
            header("Location: login.php");
         }
     }else{
        $_SESSION['message'] ="Email does not match";
        header("Location: login.php");
     }
 }

 /*================== Login ==========================*/


 if(isset($_POST['update_booking']))
 {
     
 
     $name = mysqli_real_escape_string($con, $_POST['name']);
     $email = mysqli_real_escape_string($con, $_POST['email']);
     $phone = mysqli_real_escape_string($con, $_POST['phone']);
     $partners = mysqli_real_escape_string($con, $_POST['partners']);
     $date = mysqli_real_escape_string($con, $_POST['date']);
     $destination = mysqli_real_escape_string($con, $_POST['destination']);
     $code = mysqli_real_escape_string($con, $_POST['code']);
 
     $query = "UPDATE booking SET name='$name', email='$email', phone='$phone', partners= '$partners', date='$date', destination='$destination', code='$code' WHERE phone='$phone' ";
     $query_run = mysqli_query($con, $query);
 
     if($query_run)
     {
         $_SESSION['message'] = "Booking Updated Successfully";
         header("Location: update_booking.php");
         exit(0);
     }
     else
     {
         $_SESSION['message'] = "Booking Not Found";
         header("Location: update_booking.php");
         exit(0);
     }
 
 }





?>