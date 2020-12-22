<?php

include "include/DBconfig.php";
// ------------sign up
if (isset($_POST['insert_sign_up'])) {
   $userName_sign = $_POST['username_sign_up'];
   $password_sign = $_POST['password_sign_up'];
   $email_sign = $_POST['email_sign_up'];
   $sql = "INSERT INTO `users` (`username`,`email`,`password`) VALUES ('$userName_sign','$email_sign','$password_sign')";
   $tbl = mysqli_query($con, $sql);
   header("location:user-panel/panel.php?user=$email_sign");
}
// ------------sign up


// ------------login
if (isset($_POST['submit_login'])) {
   $email_login = $_POST['email_login'];
   $password_login = $_POST['password_login'];
   $sql = "SELECT * FROM `users` WHERE `email`='$email_login' AND `password`='$password_login'";
   $tbl = mysqli_query($con, $sql);
   $row = mysqli_num_rows($tbl);

if(empty($row)){
   echo "<script>alert('تمام فیلد ها را پر کنید ')</script>";
   
}else{
   if(!$row==0){
      header("location:user-panel/panel.php?user=$email_login");
   }else{
      echo "<script>alert('همچین نام کاربری وجود ندارد')</script>";
   }
}
}
// ------------login

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <title></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/sign.css" rel="stylesheet">
</head>

<body>
   <div class="form">

      <ul class="tab-group">
         <li class="tab active"><a href="#signup">Sign Up</a></li>
         <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
         <div id="signup">
            <h1>Sign Up for Free</h1>

            <form  method="post">

               <div class="top-row">
                  <div class="field-wrap">
                     <label>
                        UserName<span class="req">*</span>
                     </label>
                     <input type="text" required autocomplete="off" name="username_sign_up" />
                  </div>
               </div>

               <div class="field-wrap">
                  <label>
                     Email Address<span class="req">*</span>
                  </label>
                  <input type="email" required autocomplete="off" name="email_sign_up" />
               </div>

               <div class="field-wrap">
                  <label>
                     Set A Password<span class="req">*</span>
                  </label>
                  <input type="password" required name="password_sign_up" />
               </div>

               <button type="submit" name="insert_sign_up" class="button button-block" />Get Started</button>

            </form>

         </div>

         <div id="login">
            <h1>Welcome Back!</h1>

            <form  method="post">

               <div class="field-wrap">
                  <label>
                     Email Address<span class="req">*</span>
                  </label>
                  <input type="email" required autocomplete="off" name="email_login" />
               </div>

               <div class="field-wrap">
                  <label>
                     Password<span class="req">*</span>
                  </label>
                  <input type="password" required autocomplete="off" name="password_login" />
               </div>

               <p class="forgot"><a href="#">Forgot Password?</a></p>

               <input type="submit" value="Log In" name="submit_login" class="button button-block" />

            </form>

         </div>

      </div><!-- tab-content -->

   </div> <!-- /form -->
</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/sign.js"></script>

</html>