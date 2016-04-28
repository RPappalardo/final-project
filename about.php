<!DOCTYPE html>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link href="css/index.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

<link href="css/about.css" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>

  <nav class="amber" role="navigation">
      <div class="nav-wrapper container">
              <li>
                <a href="index.php">Home</a>
              </li>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
      <div class="container">
          <div class="header center orange-text">;-)</div>

      </div>
  </div>

  <div class="debug">
    <label> <a href="game.php"> Play Now!</a></label>
  </div>
  <div class="demo__info">
    Brought to you by Nick and Rachel ;)
  </div>

  <div class="parallax">
    <div id="group1" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class ="title">Oh hai! We give you the time, place, and setting</div>
      </div>
    </div>
    <div id="group2" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">These robots are sent to the NüL to get updated and rebooted every 5 years.</div>
      </div>
      <div class="parallax__layer parallax__layer--back">
        <div class="title">The future begins with the OZ5.0 assembly line of robots.</div>
      </div>
    </div>
    <div id="group3" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">....or is he?</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">You will play as RB, a standard issue bot </div>
      </div>
    </div>
    <div id="group4" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Why does he need a reboot if he's happy just as he is?</div>
      </div>

      <div class="parallax__layer parallax__layer--deep">
        <div class="title">While one day refilling his oil can, he overhears mention of a "system update" down one of the halls.</div>
      </div>
    </div>
    <div id="group5" class="parallax__group">
      <div class="parallax__layer parallax__layer--fore">
        <div class="title">But there's a device that can turn him off at the snap of a finger.</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Only thing left is escape</div>
      </div>
    </div>
    <div id="group6" class="parallax__group">
      <div class="parallax__layer parallax__layer--back">
        <div class="title">Rather than using this universal button on RB, effectively turning off every robot in the building, crippling production, they decide to try to get close enough to our robot to turn him off manually with a different device.</div>
      </div>
      <div class="parallax__layer parallax__layer--base">
        <div class="title">Help RB escape the assembly line!</div>
      </div>
    </div>
    <div id="group7" class="parallax__group">
      <div class="parallax__layer parallax__layer--base">


        <div class="title">Play the Game, Or Else!</div>

<!--beginning of footer part-->
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
                            <li><a class="white-text" href="contactus.php">Email Us</a>
                            </li>
                            <li><a class="white-text" href="https://github.com/RPappalardo/final-project">Github</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
<!--end of footer part-->

<!--materialize-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<!--other-->
  <script>
    var debugInput = document.querySelector("input");
    function updateDebugState() {
        document.body.classList.toggle('debug-on', debugInput.checked);
    }
    debugInput.addEventListener("click", updateDebugState);
    updateDebugState();
  </script>

  <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-10812217-1', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>
