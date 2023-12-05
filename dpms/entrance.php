<?php

include('config.php');

if (isset($_POST['submit'])) {
    
    date_default_timezone_set("Asia/Manila");

        $date = date("m/d/Y");
        $time = date("h:i A");
        $time_created = $date. " " .$time;

    $parkingslot = trim($_POST['parkingslot']);
    $plateno = trim($_POST['plateno']);
    $owner = trim($_POST['owner']);
    $idno = trim($_POST['idno']);
    $visitorid = trim($_POST['visitorid']);
    $othersid = trim($_POST['othersid']);


    $sql = "INSERT INTO `tbl_entrance` (entrydate, parkingslot_no, plate_no, owner, id_no, visitor_id, other_id) VALUES 
    ('$time_created','$parkingslot', '$plateno', '$owner', '$idno', '$visitorid', '$othersid')";

   
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("User inserted successfully!")</script>'; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrance</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/entrance.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    
            <header class="myheader">

                    <div class="logo" style="padding-left: 60px; height:49px;">
                        <img src="image/logo1.png">
                        <img style="width:70px; height:70px; margin-top:5px;" src="image/svcc1.png">
                    </div>

                <div class="navbar">

                    <ul class="nav_links">
                        <li><a class="nav-link" href="home.php"><i class='bx bx-home-alt icon ico'></i>Home</a></li>
                        <li><a class="nav-link" href="entrance.php"><i class='bx bx-no-entry'></i>Entrance</a></li>
                        <li><a class="nav-link" href="exit.php"><i class='bx bx-exit'></i>Exit</a></li>
                        <li><a class="nav-link" href="violators.php"><i class='bx bx-history'></i>Violators</a></li>
                        <!-- <li><a href="#"><i class='bx bx-log-out'></i>Logout</a></li> -->
                    </ul>

                    <button type="button" class="btn btn-secondary btn-sm toggle-btn" style="margin-bottom:15px; margin-right:2px;" onclick="toggleSidebar()">
                            <i class='bx bx-menu toggle'></i>
                        </button>
                </div>       
        </header>
        
            <!-- <div class="image" style="padding-top:70px;">
                <img src="image/parking3.png">
            </div> -->

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

                        
                        <div style="padding:5px 20px; ">

                            <div class="vehicle" style="text-align:center;">
                                <img style="width:300px; height:300px;" src="image/vehicle.png" >
                            </div>

                            <!-- motorcycle -->
                            <section class="motor">

                                <!-- table -->
                                    <table class="table table-bordered" style="justify-content:center; width: 50%; margin-left:30px;">

                                        <tr style="text-align: center;">
                                            <th colspan="5">MOTORCYCLE</th>
                                        </tr>

                                        <tr style="text-align: center;">
                                            <th colspan="5">Section 1</th>
                                        </tr>

                                        <tr style="text-align: center;">

                                            <th style="height: 45px;">
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="slot1btn" data-bs-whatever="Motor 1">slot 1</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 2">slot 2</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 3">slot 3</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 4">slot 4</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 5">slot 5</button>
                                            </th>
                                        </tr>


                                        <tr style="text-align: center;">

                                            <th style="height: 45px;">
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 6">slot 6</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 7">slot 7</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 8">slot 8</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 9">slot 9</button>
                                            </th>

                                            <th>
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Motor 10">slot 10</button>
                                            </th>
                                        </tr>

                                    </table>

                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                                <div class="modal-dialog">

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Entrance</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            
                                                            <form method="POST">
                                                                <div class="mb-3" style="text-align: center;">
                                                                    <label for="recipient-name" class="col-form-label">Parking Slot:</label>
                                                                    <br>
                                                            <!-- 1 -->
                                                                  <input id="recipient-name" name="parkingslot" style="text-align: center; font-size:20px; background-color:#FFD43F" >
                                                                </div>

                                                                <div class="form-floating mb-3">
                                                            <!-- 2 -->
                                                                    <input type="text" name="plateno" class="form-control" id="floatingplateno" placeholder="Plate No.">
                                                                    <label for="floatingplateno">Plate No:</label>
                                                                </div>
                                                                    
                                                                <div class="mb-3">
                                                            <!-- 3 -->
                                                                    <label class="form-label">Owner:</label>
                                                                    <select name="owner" class="form-select">
                                                                    <option value="" hidden>Select</option>
                                                                    <option value="student">Student</option>
                                                                    <option value="staff">Staff</option>
                                                                    <!-- <option value="visitors">Visitors</option> -->
                                                                    </select>
                                                                </div>

                                                                <div class="form-floating mb-3">
                                                            <!-- 4 -->
                                                                    <input type="text" name="idno" class="form-control" id="floatingidno" placeholder="ID No.">
                                                                    <label for="floatingidno" class="form-label">ID No:</label>
                                                                </div>

                                                                <div id="visitorFields" style="display: none;">

                                                                    <div class="form-group">
                                                                        <h5>Visitor</h5>
                                                            <!-- 5 -->
                                                                        <select name="visitorid" class="form-select" id="visitorSubject">
                                                                            <option value="" hidden>Select</option>
                                                                            <option value="driverlicense">Driver License</option>
                                                                            <option value="votersid">Voters ID</option>
                                                                            <option value="philhealthid">PhilHealth Id</option>
                                                                        </select>
                                                                        <br>

                                                                        <div class=" form-floating mb-3">
                                                            <!-- 6 -->
                                                                            <textarea name="othersid" class="form-control" placeholder="others"></textarea>
                                                                            <label for="floatingothers" class="form-label">Others:</label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-success rounded ml-2" onclick="switchForm('visitor')">Visitor</button>
                                                                    <button type="submit" name="submit" class="btn btn-primary" id="submitbtn"><i class='bx bx-printer'></i> Submit</button>
                                                                    <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                            <!-- sidebar -->
                            <script>
                                function toggleSidebar() {
                                var sidebar = document.querySelector('.sidebar');
                                var content = document.querySelector('.content');
                                document.querySelector('.sidebar').classList.toggle('active');
                                content.classList.toggle('content-expanded');
		                        }
                            </script>

                            <!-- format -->
                            <script>
                                const exampleModal = document.getElementById('exampleModal')
                                    if (exampleModal) {
                                            exampleModal.addEventListener('show.bs.modal', event => {
                                                // Button that triggered the modal
                                                const button = event.relatedTarget
                                                // Extract info from data-bs-* attributes
                                                const recipient = button.getAttribute('data-bs-whatever')
                                                // If necessary, you could initiate an Ajax request here
                                                // and then do the updating in a callback.

                                                // Update the modal's content.
                                                const modalTitle = exampleModal.querySelector('.modal-title')
                                                const modalBodyInput = exampleModal.querySelector('.modal-body input')

                                                modalTitle.textContent = `Entrance ${recipient}`
                                                modalBodyInput.value = recipient
                                            })
                                        }
                            </script>

                            <!-- modal -->
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
                            
                            <!-- visitors -->
                            <script>
                                function switchForm(userType) {
                                    // Show/hide additional fields based on the selected user type
                                    if (userType === 'visitor') {
                                        document.getElementById('visitorFields').style.display = 'block';
                                    } else {
                                        document.getElementById('visitorFields').style.display = 'none';
                                    }
                                }
                            </script>

                            <!-- button -->
                            <script>
                                const submitbtn = document.getElementById('submitbtn');
                                const slot1btn = document.getElementById('slot1btn');

                                submitbtn.addEventListener('click', function onClick() 
                                {
                                    slot1btn.style.backgroundColor ='red';
                                }
                                );
                            </script>
</body>
</html>