<?php
session_start();
if(isset($_SESSION["email"])){
    $session_email = $_SESSION["email"];
} else{
    session_destroy();
    header("location:index.php");
}
if(isset($_GET["my_id"])){
//Received the data passed on url
    $received_name = $_GET["my_name"] ;    
    $received_county = $_GET["my_county"] ;
    $received_location = $_GET["my_location"] ;
    $received_pnumber = $_GET["my_pnumber"] ;
    $received_id = $_GET["my_id"] ;
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
<div class="container" style="width:450px; margin: 0 auto;">

    <form action="update_controller.php" method="post" style="border-radius:3px; margin-top:50px; padding: 15px; box-shadow: 0px 0px 2px;">
        <h1>Update Profile</h1>
        <input type="hidden"  name="id" value="<?php echo $received_id; ?>">
        <input type="text"  class="form-control" placeholder="update my_name" name="name" value="<?php echo $received_name;?>" readonly> <br><br>
        <input type="text" class="form-control" placeholder="update my_county" name="county" value="<?php echo $received_county;?>"> <br><br>
        <input type="text" class="form-control" placeholder="update my_location" name="location" value="<?php echo $received_location; ?>"> <br><br>
        <input type="text" class="form-control" placeholder="update my_pnumber" name="pnumber" value="<?php echo $received_pnumber; ?>"> <br><br>
        <input type="submit" value="update" class="btn-primary btn-block" name="btn_update">

    </form>
</div>

</body>
</html>
