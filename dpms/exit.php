<?php

include('config.php');

function fetchData() {
    global $conn;
    $sql = "SELECT * FROM tbl_entrance";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        echo "no data";
        return [];
    }
}

$data = fetchData();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exit</title>

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
                        <!-- <li><a href="record.php"><i class='bx bx-history'></i>Record</a></li> -->
                        <!-- <li><a href="#"><i class='bx bx-log-out'></i>Logout</a></li> -->
                    </ul>

                        <button type="button" class="btn btn-secondary btn-sm toggle-btn" style="margin-bottom:15px; margin-right:10px;" onclick="toggleSidebar()">
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

                                        <!-- <li class="link">
                                            <a href="record.php">
                                                <i class='bx bx-history'></i>
                                                <span>Record</span>
                                            </a>
                                        </li> -->

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

                        <div style="padding:100px 20px; ">

                            <div class="m-4">

                                <?php if (!empty($data)): ?>
                                    <table class="table table-bordered table-hover" >
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>#</th>
                                                <th>Entry Date and Time</th>
                                                <th>Parking Slot</th>
                                                <th>Plate No</th>
                                                <th>Owner</th>
                                                <th>ID No</th>
                                                <th>Visitor ID</th>
                                                <th>Others ID</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody style="text-align:center">
                                            <?php foreach ($data as $row): ?>
                                                <?php 
                                                    $id = isset($row['id']) ? $row['id'] : '';
                                                    ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['entrydate']; ?></td>
                                                    <td><?php echo $row['parkingslot_no']; ?></td>
                                                    <td><?php echo $row['plate_no']; ?></td>
                                                    <td><?php echo $row['owner']; ?></td>
                                                    <td><?php echo $row['id_no']; ?></td>
                                                    <td><?php echo $row['visitor_id']; ?></td>
                                                    <td><?php echo $row['other_id']; ?></td>
                                                    <td >
                                                        <button type="button" class="btn btn-danger"><a href="entrance.php?user_id=<?php echo $row['id']; ?>" class="nav-link"> Not Available </a></button>
                                                    </td>
                                                    
                                                </tr>

                                                

                                            <?php endforeach; ?>

                                        </tbody>

                                        
                                    </table>
                                            <?php else: ?>
                                                <p>No data available.</p>
                                            <?php endif; ?>    
                                            
                                                
                                                    <nav aria-label="Page navigation example" >
                                                        <ul class="pagination" style="justify-content: end;">
                                                            <li class="page-item disabled">
                                                            <a class="page-link">Previous</a>

                                                            </li>

                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">11</a></li>
                                                            <!-- <li class="page-item"> -->
                                                            <a class="page-link" href="#">Next</a>
                                                            </li>
                                                        </ul> 
                                                    </nav>
                                                

                            </div>
                        </div>
                        
                                 <!-- Sidebar -->
                            <script>
                                function toggleSidebar() {
                                var sidebar = document.querySelector('.sidebar');
                                var content = document.querySelector('.content');
                                document.querySelector('.sidebar').classList.toggle('active');
                                content.classList.toggle('content-expanded');
		                        }
                            </script>


                                    <!-- Pagination -->
                            <script>
                                @mixin pagination-size($padding-y, $padding-x, $font-size, $border-radius) {
                                --#{$prefix}pagination-padding-x: #{$padding-x};
                                --#{$prefix}pagination-padding-y: #{$padding-y};
                                @include rfs($font-size, --#{$prefix}pagination-font-size);
                                --#{$prefix}pagination-border-radius: #{$border-radius};
                                }
                            </script>

                            <!-- modal -->
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>