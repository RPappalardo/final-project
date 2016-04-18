

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>NüL</title>

    <!-- CSS  -->
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="amber" role="navigation">
        <div class="nav-wrapper container"><img width="40" src="bigrobologo.jpg">
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
              <li><a href="index.php">Home</a>
              </li>
              <li><a href="loginpage.php">Login</a>
              </li>
              <li><a href="registerpage.php">Register</a>
              </li>
              <li><a href="http://playcanvas.com/editor/scene/424681/launch">Demo</a>
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
                <a href="http://playcanvas.com/editor/scene/424681/launch" id="download-button" class="btn-large waves-effect waves-light orange">Demo</a>
            </div>
            <br>
            <br>

        </div>
    </div>



    <div class="container white">
        <div class="section">
          <form action="loginpage.php" method="post">
            <fieldset>
              <div class="form-group">
                  <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
              </div>
              <div class="form-group">
                  <input class="form-control" name="password" placeholder="Password" type="password"/>
              </div>
              <div class="form-group">
                  <button class="btn btn-default" type="submit">
                      <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                      Log In
                  </button>
              </div>
            </fieldset>
        <div class="section">

        </div>
    </div>
</div>


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
                        <li><a class="white-text" href="#!">Subtitles</a>
                        </li>
                        <li><a class="white-text" href="#!">Audio</a>
                        </li>
                        <li><a class="white-text" href="#!">Gameplay</a>
                        </li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Email Us</a>
                        </li>
                        <li><a class="white-text" href="#!">Github</a>
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
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>
