<?php

    include("config.php");
        session_start();

        if(isset($_POST['submit'])){

            // $name = mysqli_real_escape_string ($conn, $_POST['name']);
            $email = mysqli_real_escape_string ($conn, $_POST['email']);
            $pass = md5($_POST['password']);
            // $cpass = md5($_POST['cpassword']);

            $select = " SELECT * FROM `regform` WHERE email = '$email' && password = '$pass' ";

            $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0){
                    
                    $row = mysqli_fetch_array($result);
                    header('location:home.php');
                    
                }else{
                    $error[]= 'incorrect email or password!';
                };

        };
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>

        <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <style>
        form i{
            position: absolute;
            top: 50%;
            transform: translateY(-12%);
            color: #999;
            font-size: 23px;
            transition: all 0.2s ease;
        }

        input:is(:focus, :valid) ~ i{
            color: #4070f4;
        }

        form  i.showHidePw{
            right: 30px;
            cursor: pointer;
            padding: 4px;
            margin: 0 59px;
            
        }
    </style>
</head>
<body>
    
        <header class="myheader">
            
            <div class="logo">
                <img src="image/logo1.png" alt="">
            </div>
            
        </header>

    <div class="form-container">
        
        <div class="image">
            <img src="image/parking3.png">
        </div>

        <form method="post" style="margin-bottom:70px; margin-right:25px;">
            <h3>ADMINISTRATOR LOGIN</h3>
    
            <?php
            
                if (isset($error)) {
                    foreach($error as $error){
                        echo '<span class = "error-msg">'.$error.'</span>';
                    };
                };
            
            ?>

            <input type="email" name="email" id="email" placeholder="enter your email" autocomplete="off" required>
            
            
            <input type="password" name="password" id="password" class="password" placeholder="enter your password" autocomplete="off" required>
            <i class="uil uil-eye-slash showHidePw" style="background-repeat: no-repeat;"></i>
        
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="regform.php">register now</a></p>

        </form>

    </div>

    <script>
        pwShowHide = document.querySelectorAll(".showHidePw"),
        pwFields = document.querySelectorAll(".password");

         //   js code to show/hide password and change icon
         pwShowHide.forEach(eyeIcon =>{
                    eyeIcon.addEventListener("click", ()=>{
                        pwFields.forEach(pwField =>{
                            if(pwField.type ==="password"){
                                pwField.type = "text";

                                pwShowHide.forEach(icon =>{
                                    icon.classList.replace("uil-eye-slash", "uil-eye");
                                })
                            }else{
                                pwField.type = "password";

                                pwShowHide.forEach(icon =>{
                                    icon.classList.replace("uil-eye", "uil-eye-slash");
                                })
                            }
                        }) 
                    })
                })
                
    </script>

</body>
</html>