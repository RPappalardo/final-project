<!DOCTYPE html>

<?php require("includes/databaseconnect.php");
?>

<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <title>NüL</title>

    <!-- CSS  -->
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />




    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no' />
     <meta charset='utf-8'>
     <link rel="stylesheet" type="text/css" href="styles.css" media="screen">
     <title>Application Title</title>
     <script src="playcanvas-stable.min.js"></script>
     <script>
         SCENE_PATH = "12346.json";
         CONTEXT_OPTIONS = {
             'alpha': false,
             'preserveDrawingBuffer': false
         };
     </script>





</head>

<body>
    <nav class="amber" role="navigation">
        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <li>
                  <a href="index.php">Home</a>
                </li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.php">Home</a>
                </li>
                <li><a href="loginpage.php">Login</a>
                </li>
                <li><a href="registerpage.php">Register</a>
                </li>
                <li><a href="game.php">Demo</a>
                </li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
    </div>



    <script src="__start__.js"></script>
        <script src="__loading__.js"></script>




<div class="fl">
  <center> <iframe src="http://playcanvas.com/editor/scene/424681/launch" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" width="800" height="500" ></iframe></center>
  <br>
 <center><button id="fullscreeniframe" class="btn-large waves-effect waves-light orange">Click Here to Make the Game Fullscreen</button></center>
</div>
<br>
<script>
(function(window, document){
        var $ = function(selector,context){return(context||document).querySelector(selector)};

        var iframe = $("iframe"),
            domPrefixes = 'Webkit Moz O ms Khtml'.split(' ');

        var fullscreen = function(elem) {
            var prefix;
            // Mozilla and webkit intialise fullscreen slightly differently
            for ( var i = -1, len = domPrefixes.length; ++i < len; ) {
              prefix = domPrefixes[i].toLowerCase();

              if ( elem[prefix + 'EnterFullScreen'] ) {
                // Webkit uses EnterFullScreen for video
                return prefix + 'EnterFullScreen';
                break;
              } else if( elem[prefix + 'RequestFullScreen'] ) {
                // Mozilla uses RequestFullScreen for all elements and webkit uses it for non video elements
                return prefix + 'RequestFullScreen';
                break;
              }
            }

            return false;
        };
        // Webkit uses "requestFullScreen" for non video elements
        var fullscreenother = fullscreen(document.createElement("iframe"));

        if(!fullscreen) {
            alert("Fullscreen won't work, please make sure you're using a browser that supports it and you have enabled the feature");
            return;
        }

        $("#fullscreeniframe").addEventListener("click", function(){
            // iframe fullscreen and non video elements in webkit use request over enter
            iframe[fullscreenother]();
        }, false);
    })(this, this.document);
    </script>












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
                        <li><a class="white-text" href="settings.php">Subtitles</a>
                        </li>
                        <li><a class="white-text" href="settings.php">Audio</a>
                        </li>
                        <li><a class="white-text" href="settings.php">Gameplay</a>
                        </li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="contactus.php">Email Us</a>
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
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>
