<?php
session_start();
if(isset($_SESSION["email"])){
    $session_email = $_SESSION["email"];
}
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Donation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 

    
</head>
<body>
	 <header class="continer-fluid ">

            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="assets/images/logo.jpg" alt="">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                         
                                        <li class="nav-item">
                                             <a class="btn btn-success  " href="logout.php" role="button" > Logout</a>
                                         </li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<div class="container">

        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form method="get" action="" style="margin-top:10px; ">
                <label class="font-weight-bolder">Select Blood Group:</label>
                <select name="search" class="form-control">
                <option><?php echo @$_GET['search']; ?></option>
                <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br>
                <a href="#" class="btn btn-info mr-4"> Reset</a>
                <input type="submit" name="submit" class="btn btn-info" value="search">
            </form>
        </div>
        
        <table class="table text-center table-bordered table-responsive table-striped" >
            <th colspan="8" class="title">Blood Donors</th>
                <tr>                    
                    <th>#</th>
                    <th>Donor Name</th>
                    <th>Blood Group</th>
                    <th>County</th>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>                    
                </tr>
                <div>
                    <?php
                    require_once 'connection.php';

                    //Prepare select query
                    $result = "SELECT * FROM `users`";
                    //Execute the products select query
                    $products = mysqli_query($conn, $result);

                    if ($result) {
                        $row =mysqli_num_rows( $products);
                        if ($row) { //echo "<b> Total ".$row." </b>";
                    }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
                }
                ?>
                </div>
                <?php $count =0; while($row = mysqli_fetch_array($products)) { ?>

                <tr>                    
                    <td><?php echo ++$count; ?></td>
                    <td><?php echo ($row['name']); ?></td>
                    <td><?php echo ($row['bloodgroup']); ?></td>
                    <td><?php echo ($row['county']); ?></td>
                    <td><?php echo ($row['location']); ?></td>
                    <td><?php echo ($row['email']); ?></td>
                    <td><?php echo ($row['pnumber']); ?></td>
                    <td><input type="#" name="request" class="btn btn-info btn-sm" value="Request"></td>
                </tr>
                <?php } ?>    
        </table>
</div>
</body>
</html>