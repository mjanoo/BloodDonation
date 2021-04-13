<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../library/js/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>    

<style>
    body{
        background: url(assets/images/img-back.jpg) no-repeat center ;
        background-size: cover;
        min-height: 0;
        height: 530px;
      }

</style>
 
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#about">About Us</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-success   bounceInUp" href="register.php" role="button" > Become a Donor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-success   bounceInUp" href="login.php" role="button" > Sign In</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row justify-content-center" style="margin-top: 30px;">
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
        <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#receivers">User</a>
                </li>
            </ul>
         <div class="tab-content">

         <div class="tab-pane container active" id="hospitals">
            <form action="hregister_controller.php" method="post" >
                <div class="form-group">
                    <input type="text" class="form-control mb-3" placeholder="Hospital name" name="name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control mb-3" placeholder="Hospital email" name="email" required="">
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control mb-3" placeholder="Hospital phone number" name="pnumber" required="">
                </div>
                 <div class="form-group">
                <select class="form-control mb-3" name="county" id="">
                    <option disabled="" selected=""">Select County</option>
                    <option value='Baringo'>Baringo</option>
                    <option value='Bomet'>Bomet</option>
                    <option value='Bungoma'>Bungoma</option>
                    <option value='Busia'>Busia</option>
                    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                    <option value='Embu'>Embu</option>
                    <option value='Garissa'>Garissa</option>
                    <option value='Homa Bay'>Homa Bay</option>
                    <option value='Isiolo'>Isiolo</option>
                    <option value='Kajiado'>Kajiado</option>
                    <option value='Kakamega'>Kakamega</option>
                    <option value='Kericho'>Kericho</option>
                    <option value='Kiambu'>Kiambu</option>
                    <option value='Kilifi'>Kilifi</option>
                    <option value='Kirinyaga'>Kirinyaga</option>
                    <option value='Kisii'>Kisii</option>
                    <option value='Kisumu'>Kisumu</option>
                    <option value='Kitui'>Kitui</option>
                    <option value='Kwale'>Kwale</option>
                    <option value='Laikipia'>Laikipia</option>
                    <option value='Lamu'>Lamu</option>
                    <option value='Machakos'>Machakos</option>
                    <option value='Makueni'>Makueni</option>
                    <option value='Mandera'>Mandera</option>
                    <option value='Marsabit'>Marsabit</option>
                    <option value='Meru'>Meru</option>
                    <option value='Migori'>Migori</option>
                    <option value='Mombasa'>Mombasa</option>
                    <option value='Murang'a'>Murang'a</option>
                    <option value='Nairobi City'>Nairobi City</option>
                    <option value='Nakuru'>Nakuru</option>
                    <option value='Nandi'>Nandi</option>
                    <option value='Narok'>Narok</option>
                    <option value='Nyamira'>Nyamira</option>
                    <option value='Nyandarua'>Nyandarua</option>
                    <option value='Nyeri'>Nyeri</option>
                    <option value='Samburu'>Samburu</option>
                    <option value='Siaya'>Siaya</option>
                    <option value='Taita-Taveta'>Taita-Taveta</option>
                    <option value='Tana River'>Tana River</option>
                    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                    <option value='Trans Nzoia'>Trans Nzoia</option>
                    <option value='Turkana'>Turkana</option>
                    <option value='Uasin Gishu'>Uasin Gishu</option>
                    <option value='Vihiga'>Vihiga</option>
                    <option value='West Pokot'>West Pokot</option>
                    <option value='wajir'>wajir</option>
                </select>
            </div>
              <div class="form-group">
                    <input type="text" class="form-control" placeholder="Hospital location" name="location" required="">
                </div>
                 <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter password" name="password" required minlength="6">
                </div>               
                 
                  <input type="submit" name="btn_rreg" value="Register" class="btn btn-primary btn-block mb-4">
                </form>
         </div>


       <div class="tab-pane container fade" id="receivers">

         <form action="register_controller.php" method="post" >
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control mb-3" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control mb-3" placeholder="Enter phone number" name="pnumber">
            </div>
            <div class="form-group">
                <select class="form-control mb-3" name="bloodgroup" id="">
                    <option disabled="" selected=""">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="0+">0+</option>
                    <option value="0-">0-</option>
                </select>
            </div>
           <div class="form-group">
                <select class="form-control mb-3" name="county" id="">
                    <option disabled="" selected=""">Select County</option>
                    <option value='Baringo'>Baringo</option>
                    <option value='Bomet'>Bomet</option>
                    <option value='Bungoma'>Bungoma</option>
                    <option value='Busia'>Busia</option>
                    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                    <option value='Embu'>Embu</option>
                    <option value='Garissa'>Garissa</option>
                    <option value='Homa Bay'>Homa Bay</option>
                    <option value='Isiolo'>Isiolo</option>
                    <option value='Kajiado'>Kajiado</option>
                    <option value='Kakamega'>Kakamega</option>
                    <option value='Kericho'>Kericho</option>
                    <option value='Kiambu'>Kiambu</option>
                    <option value='Kilifi'>Kilifi</option>
                    <option value='Kirinyaga'>Kirinyaga</option>
                    <option value='Kisii'>Kisii</option>
                    <option value='Kisumu'>Kisumu</option>
                    <option value='Kitui'>Kitui</option>
                    <option value='Kwale'>Kwale</option>
                    <option value='Laikipia'>Laikipia</option>
                    <option value='Lamu'>Lamu</option>
                    <option value='Machakos'>Machakos</option>
                    <option value='Makueni'>Makueni</option>
                    <option value='Mandera'>Mandera</option>
                    <option value='Marsabit'>Marsabit</option>
                    <option value='Meru'>Meru</option>
                    <option value='Migori'>Migori</option>
                    <option value='Mombasa'>Mombasa</option>
                    <option value='Murang'a'>Murang'a</option>
                    <option value='Nairobi City'>Nairobi City</option>
                    <option value='Nakuru'>Nakuru</option>
                    <option value='Nandi'>Nandi</option>
                    <option value='Narok'>Narok</option>
                    <option value='Nyamira'>Nyamira</option>
                    <option value='Nyandarua'>Nyandarua</option>
                    <option value='Nyeri'>Nyeri</option>
                    <option value='Samburu'>Samburu</option>
                    <option value='Siaya'>Siaya</option>
                    <option value='Taita-Taveta'>Taita-Taveta</option>
                    <option value='Tana River'>Tana River</option>
                    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                    <option value='Trans Nzoia'>Trans Nzoia</option>
                    <option value='Turkana'>Turkana</option>
                    <option value='Uasin Gishu'>Uasin Gishu</option>
                    <option value='Vihiga'>Vihiga</option>
                    <option value='West Pokot'>West Pokot</option>
                    <option value='wajir'>wajir</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control mb-3" placeholder="Enter location" name="location">
            </div>
            <div class="form-group">
                <input type="password" class="form-control mb-3" placeholder="Enter password" name="password" required minlength="6">
            </div>         
          
          <input type="submit" name="btn_reg" value="Register" class="btn btn-primary btn-block mb-4">
           </form>
        </div>
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
</body>
</html>
