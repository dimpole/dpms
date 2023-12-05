<?php

    include("config.php");
    session_start();

        if(isset($_POST['submit'])){

            $name = mysqli_real_escape_string ($conn, $_POST['name']);
            $email = mysqli_real_escape_string ($conn, $_POST['email']);
            $pass = md5($_POST['password']);
            $cpass = md5($_POST['cpassword']);

            $select = " SELECT * FROM `regform` WHERE email = '$email' && password = '$pass' ";

            $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0){

                    $error[] = 'user already exist!';
                       
                }else{

                    if($pass != $cpass) {
                        $error[] = 'password not matched!';
                    }else{
                        $insert = "INSERT INTO `regform`(name, email, password, cpassword) VALUES('$name', '$email', '$pass', '$cpass')";
                        mysqli_query($conn, $insert);
                        header('location:loginform.php');
                    }

                }


        };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>


     <!-- ===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

    

        <style>

            form .showHidePw{
            position: absolute;
            top: 50%;
            transform: translateY(-12%);
            color: #999;
            font-size: 23px;
            transition: all 0.2s ease;
            }

            input:is(:focus, :valid) ~ .showHidePw{
            color: #4070f4;
            }

            form  i.showHidePw{
            right: 30px;
            cursor: pointer;
            padding: 10px;
            margin: 25px 40px;
            }

            form .showHidePwd{
            position: absolute;
            top: 50%;
            transform: translateY(-12%);
            color: #999;
            font-size: 23px;
            transition: all 0.2s ease;
            }

            form  i.showHidePwd{
            right: 30px;
            cursor: pointer;
            padding: 10px;
            margin: 85px 40px;
            }

            input:is(:focus, :valid) ~ .showHidePwd{
            color: #4070f4;
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

        <form action="" method="post">
            <h3>register now</h3>

            <?php
            
                if (isset($error)) {
                    foreach($error as $error){
                        echo '<span class = "error-msg">'.$error.'</span>';
                    };
                };
            
            ?>

            <input type="name" name="name" id="name"  placeholder="enter your name" autocomplete="off" required>
            <input type="email" name="email" id="email" placeholder="enter your email" autocomplete="off" required>

            <input type="password" name="password" id="password" class="password" placeholder="enter your password" autocomplete="off" required>
            <i class="uil uil-eye-slash showHidePw"></i>

            <input type="cpassword" name="cpassword" id="cpassword" class="passwords" placeholder="confirm your password" autocomplete="off" required>
            <i class="uil uil-eye-slash showHidePwd"></i>
        
            <input type="submit" name="submit" value="Confirm" class="form-btn">

            <p>already have an account? <a href="loginform.php">login now</a></p>

        </form>

    </div>

            <script>
                pwShowHide = document.querySelectorAll(".showHidePw"),
                pwFields = document.querySelectorAll(".password");
                pwShowHidee = document.querySelectorAll(".showHidePwd"),
                pwFieldss = document.querySelectorAll(".passwords");


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
                

                //   js code to show/hide password and change icon
                pwShowHidee.forEach(eyeIcon =>{
                    eyeIcon.addEventListener("click", ()=>{
                        pwFieldss.forEach(pwField =>{
                            if(pwField.type ==="password"){
                                pwField.type = "text";

                                pwShowHidee.forEach(icon =>{
                                    icon.classList.replace("uil-eye-slash", "uil-eye");
                                })
                            }else{
                                pwField.type = "password";

                                pwShowHidee.forEach(icon =>{
                                    icon.classList.replace("uil-eye", "uil-eye-slash");
                                })
                            }
                        }) 
                    })
                })

            </script>

                
                
            
</body>
</html>