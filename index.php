<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Practice</title>
  <link rel="stylesheet" href="bootstrap3/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap3/all.min.css">
  <link rel="stylesheet" href="registration.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">

    <div class="content">

      <form method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="first_name">
          </div>

          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="last_name">
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email">
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone_no">
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass">
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="c_pass">
          </div>

        </div>

        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>

      </form>

    </div>


  </div>

</body>


<?php

  $con = mysqli_connect("localhost","root","","registration_form");

  if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $pass = md5($_POST['pass']);
    $c_pass = md5($_POST['c_pass']);


    if($pass != $c_pass){
      echo("<script>alert('Please Enter Same Password')</script>");
      echo("<script>window.open('index.php','_self')</script>");
    }else{

      $insert_data = "INSERT INTO  registration_data (first_name,last_name,email,phone_no,pass) VALUES('$first_name','$last_name','$email','$phone_no','$pass')";
      $run_data = mysqli_query($con,$insert_data);

      if($run_data){
        echo("<script>alert('Registration Complete')</script>");
        echo("<script>window.open('index.php','_self')</script>");
      }else{
        echo("<script>alert('Something Went Wrong!')</script>");
      echo("<script>window.open('index.php','_self')</script>");
      }

    }
  }


 ?>

</html>