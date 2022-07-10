<?php require('connection.php');?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/boxicons.min.css">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/sign_in.css">
    

    <title>Login Page</title>
</head>

<body>
<!-- <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50"> -->

    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-md-auto gap-2">
            <li class="nav-item rounded">
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill me-2"></i>Home</a>
            </li>
            <li class="nav-item rounded">
              <a class="nav-link" href="#"><i class="bi bi-people-fill me-2"></i>About</a>
            </li>
            <li class="nav-item rounded">
              <a class="nav-link" href="#"><i class="bi bi-telephone-fill me-2"></i>Contact</a>
            </li>
            <li class="nav-item dropdown rounded">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Profile</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Account</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <div class="vh-100 d-flex justify-content-center align-items-center"> -->



    <!-- <div class="row"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    LOGIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                    <form method="POST" action="login_register.php">
                        <!-- <form> -->
                            <div class="form-group">
                                <!-- <input type="text" placeholder="E-mail or Username" name="admin_id"> -->
                                <input type = "text" class="form-control-label form-control" placeholder="USERNAME" name="user_id">
                                <!-- <input type = "text" class="form-control-label form-control" placeholder="PASSWORD" name="password"> -->
                                <!-- <input type="text" class="form-control"> -->
                            </div>
                            <div class="form-group">
                            <input type = "password" class="form-control-label form-control" placeholder="PASSWORD" name="password">

                                <!-- <label class="form-control-label" placeholder="Password" name="password">PASSWORD</label> -->
                                <!-- <input type="password" class="form-control" i> -->
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <!-- <label><input type="checkbox" name = "option1" value="Option 1">Login as User</label> -->
                                <!-- <label><input type="checkbox" name = "option1" value="Option 1">Login as Admin</label> -->
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="admin_login" id="flexCheckDefault" name="admin_login">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Login as Admin
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="user_login" id="flexCheckChecked" name="user_login">
                                  <label class="form-check-label" for="flexCheckChecked">
                                    Login as User
                                  </label>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" value='true' class="btn btn-outline-primary" name="submitted">LOGIN</button>
                                    <!-- <button type="submit" class="btn btn-outline-primary">ADMIN LOGIN</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

        


</body>
</html>