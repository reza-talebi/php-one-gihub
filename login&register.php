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

            <form action="/" method="post">

               <div class="top-row">
                  <div class="field-wrap">
                     <label>
                        UserName<span class="req">*</span>
                     </label>
                     <input type="text" required autocomplete="off" />
                  </div>
               </div>

               <div class="field-wrap">
                  <label>
                     Email Address<span class="req">*</span>
                  </label>
                  <input type="email" required autocomplete="off" />
               </div>

               <div class="field-wrap">
                  <label>
                     Set A Password<span class="req">*</span>
                  </label>
                  <input type="password" required autocomplete="off" />
               </div>

               <button type="submit" class="button button-block" />Get Started</button>

            </form>

         </div>

         <div id="login">
            <h1>Welcome Back!</h1>

            <form action="/" method="post">

               <div class="field-wrap">
                  <label>
                     Email Address<span class="req">*</span>
                  </label>
                  <input type="email" required autocomplete="off" />
               </div>

               <div class="field-wrap">
                  <label>
                     Password<span class="req">*</span>
                  </label>
                  <input type="password" required autocomplete="off" />
               </div>

               <p class="forgot"><a href="#">Forgot Password?</a></p>

               <button class="button button-block" />Log In</button>

            </form>

         </div>

      </div><!-- tab-content -->

   </div> <!-- /form -->
</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/sign.js"></script>

</html>