<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign In</title>
<link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<div class="container">

    <h2>Sign In</h2>

    
     <div class="message" id="successMsg"></div>
        <div class="error" id="errorMsg"></div>
        <form id="signinForm" class="form active" onsubmit="return handleSignIn(event)" method="post">
            <input type="text" id="signupUsername" placeholder="Username" name="user">
            <input type="password" id="signupPassword" placeholder="Password" required name="password">
            <input type="email" id="signupPassword" placeholder="Email" required name="email">
            <input type="int" id="signupPassword" placeholder="Contact Number" required name="phone">
            <input type="submit" value="Sign Up" name="submit">
           <button><a href="display.php" class="btn1">Check</a></button>


    </form>

</div>

<script src="script.js"></script>


    

 <?php 
    include 'connection_form.php'; 

    if(isset($_POST['submit'])){
        $user=$_POST['user'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

        $insert_query= "insert into sign_form1 (user,password,email,phone)
         values('$user','$password','$email',' $phone')";
          $result= mysqli_query($con, $insert_query);
          if(  $result){
            ?>
            <script>
                alert("insert the data")
            </script>
            <?php
          }
          else {
            ?>
            <script>
                alert("insert not the data")
            </script>
            <?php
          }
    }
   
    ?>