<!DOCTYPE html>


<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>NüL</title>

    <!-- CSS  -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="amber" role="navigation">
        <div class="nav-wrapper container"><img width="40" src="..//bigrobologo.jpg">
            <ul class="right hide-on-med-and-down">
                <li>
                  <a href="../public/index.php">Home</a>
                </li>
            </ul>

            <ul id="nav-mobile" class="side-nav  grey darken-4">
              <br>
                <li><a href="../public/index.php" class="white-text">Home</a>
                </li>
                <li><a href="../public/login.php" class="white-text">Login</a>
                </li>
                <li><a href="../public/register.php" class="white-text">Register</a>
                </li>
                <li><a href="../views/game.php" class="white-text">Demo</a>
                </li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
            <br>
            <h1 class="header center orange-text">NüL5.0 Login</h1>
            <div class="row center">
                <h5 class="header col s12 white-text">Presenting, the best game ever!</h5>
            </div>
            <div class="row center">
              <!--  <a href="../views/game.php" id="download-button" class="btn-large waves-effect waves-light orange">Demo</a> -->
            </div>
          
            <br>

        </div>
    </div>



    <div class="container white">
        <div class="section">

          <!--makes snaller or large field-->
          <div class="col s12 m4">
              <div class="icon-block">
                  <h5 class="center">

                    <!--login page-->
          <form action="loginpage.php" method="post">
            <fieldset>
              <div class="form-group">
                  <input class= "field" autocomplete="off" autofocus class="form-control" name="username" placeholder ="User Name" id="username" type="text"/>
              </div>
              <div class="form-group">
                  <input class= "field" autofocus class="form-control" name="password" id="password" type="password" placeholder="Password"/>
              </div>

            </fieldset>
        <div class="section">
</form>
        </div>
    </div>
</div>

<div class="col s12 m4">
        <h5 class="center">

<div class="form-group">
    <button class="btn btn-default" type="submit" name="submit" value="Login">
        <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
        <a href="../views/loggedin.php" class = "white-text"> Log In</a>
    </button>
</div>
</div>
</div>
</div>


<!--footer-->

    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"> Bio</h5>
                    <p class="grey-text text-lighten-4"> Join oZ5.0 on his grand escape! NüL is the next big, exciting puzzle platformer to hit stores and web consoles to date</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="../public/settings.php">Subtitles</a>
                        </li>
                        <li><a class="white-text" href="../public/settings.php">Audio</a>
                        </li>
                        <li><a class="white-text" href="../public/settings.php">Gameplay</a>
                        </li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="../views/contactus.php">Email Us</a>
                        </li>
                        <li><a class="white-text" href="https://github.com/RPappalardo/final-project">Github</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Brought to you by Nick and Rachel ;)
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>

</body>

</html>
