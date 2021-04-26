<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drive for us</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="images/logo.jpg" />


    <!-- Font Icon -->
    <link rel="stylesheet" href="fontss/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="csss/style.css">

    <!--Addiional Styling-->
    <style>
        body {
          font-size: 14px;
          line-height: 1.8;
          color: #222;
          font-weight: 400;
          font-family: 'Montserrat';
          background-image: url("images/lux.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          -moz-background-size: cover;
          -webkit-background-size: cover;
          -o-background-size: cover;
          -ms-background-size: cover;
          background-position: center center;
          padding: 115px 0;
           }

    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="functions.php" id="signup-form" class="signup-form">
                    <a href="index.php" class="navbar-brand"><img src="images/logo1.png" alt="logo"  title="" width="60px" height="40px"></a>
                        <h2 class="form-title">Drive for us - Fill the form</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="f_name" id="name" placeholder="First Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="l_name" id="name" placeholder="LastName" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="p_number" id="number" placeholder="Phone Number" required/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="t_car" id="car" placeholder="Tacoma Trucks, Toyota Siennas, Hilux Vans, Saloon Cars" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service" required>Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Homepage <a href="index.php">CargSoft</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="jss/main.js"></script>
</body>
</html>