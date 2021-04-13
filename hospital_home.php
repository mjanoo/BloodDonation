<?php
session_start();
if(isset($_SESSION["email"])){
    $session_email = $_SESSION["email"];
} else{
    session_destroy();
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Donation</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
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
                                             <a class="btn btn-success  " href="profile.php" role="button" >My Profile</a>
                                         </li> 
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
        
<table class="table table-striped table-hover">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Blood Group</th>
        <th>County</th>
        <th>Location</th>
        <th>Contact</th>

    </tr>
    <?php
    require_once 'connection.php';

    //Prepare select query
    $select_products = "SELECT * FROM `users`";
    //Execute the products select query
    $products = mysqli_query($conn, $select_products);

    while ($row = mysqli_fetch_assoc($products)){
        $id = $row['id'];
        $name = $row['name'];
        $bloodgroup = $row['bloodgroup'];
        $county = $row['county'];
        $location = $row['location'];
        $pnumber = $row['pnumber'];

        echo "<tr>
             <td>$id</td>
             <td>$name</td>
             <td>$bloodgroup</td>
             <td>$county</td>
             <td>$location</td>
             <td>$pnumber</td>
             
             </tr>";
            }
    ?>
</table>

</body>
</html>