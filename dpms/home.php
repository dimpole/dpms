<?php

include("config.php");
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/home.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body>
        
        <header class="myheader">

                    <div class="logo" style="padding-left: 60px; height:49px;">
                        <img  style="width:60px; height:60px; margin-bottom:10px;" src="image/logo1.png">
                        <img style="width:70px; height:70px; margin-top:5px;" src="image/svcc1.png">
                    </div>


                <div class="navbar">

                    <ul class="nav_links">
                        <li><a href="home.php"><i class='bx bx-home-alt icon ico'></i>Home</a></li>
                        <li><a href="entrance.php"><i class='bx bx-no-entry'></i>Entrance</a></li>
                        <li><a href="exit.php"><i class='bx bx-exit'></i>Exit</a></li>
                        <li><a href="violators.php"><i class='bx bx-history'></i>Violators</a></li>
                        <!-- <li><a href="#"><i class='bx bx-log-out'></i>Logout</a></li> -->
                    </ul>

                        <button class="toggle-btn" onclick="toggleSidebar()">
                            <i class='bx bx-menu toggle'></i>
                        </button>
                </div>       
        </header>
        
            <div class="image" style="padding-top:70px;">
                <img src="image/parking3.png">
            </div>



                        <div class="sideNav">
                            <div class="sidebar">

                                            <div class="logoo" style="padding-left:50px; padding-bottom: 10px; ">
                                                <img src="image/logo1.png">
                                            </div>
                        
                                <div class="menuSidebar">
                                    <ul class="menuSidebar-links">

                                        <li class="link">
                                            <a href="home.php">
                                                <i class='bx bx-home-alt icon ico'></i>
                                                <span>Home</span>
                                            </a>
                                        </li>

                                        <li class="link">
                                            <a href="entrance.php">
                                                <i class='bx bx-no-entry'></i>
                                                <span>Entrance</span>
                                            </a>
                                        </li>

                                        <li class="link">
                                            <a href="exit.php">
                                                <i class='bx bx-exit'></i>
                                                <span>Exit</span>
                                            </a>
                                        </li>

                                        <li class="link">
                                            <a href="record.php">
                                                <i class='bx bx-history'></i>
                                                <span>Violators</span>
                                            </a>
                                        </li>

                                        <li class="link logout">
                                            <a href="logoutform.php">
                                                <i class='bx bx-log-out'></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                            <script>
                                function toggleSidebar() {
                                var sidebar = document.querySelector('.sidebar');
                                var content = document.querySelector('.content');
                                document.querySelector('.sidebar').classList.toggle('active');
                                content.classList.toggle('content-expanded');
		                        }
                            </script>

</body>
</html>