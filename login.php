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
<header class="container-fluid ">

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
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#hospitals">Hospitals</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#receivers">User</a>
                 </li>
            </ul>

                <div class="tab-content">
                   <div class="tab-pane container active" id="hospitals">
                    <form action="hlogin_controller.php" method="post">
                      <div class="form-group">
                        <label  class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Email</label>
                        <input type="email" class="form-control" placeholder="User email" name="email">
                      </div>

                       <div class="form-group">
                        <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password">
                      </div>                      
                      <input type="submit" name="btn_hlogin" value="Login" class="btn btn-primary btn-block mb-4">
                    </form>
                   </div>

                  <div class="tab-pane container fade" id="receivers">
                      <form action="login_controller.php" method="post">
                      <div class="form-group">
                        <label  class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Email</label>
                        <input type="email" class="form-control" placeholder="User email" name="email">
                      </div>

                       <div class="form-group">
                        <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">User Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password">
                      </div>                      
                      <input type="submit" name="btn_login" value="Login" class="btn btn-primary btn-block mb-4">
                    </form>
                  </div>
                </div>
                   <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
        </div>
    </div>
</div>

</body>
</html>

