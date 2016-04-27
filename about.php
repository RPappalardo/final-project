<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link href="css/index.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />


<style>

  /* Parallax base styles
  --------------------------------------------- */

  .parallax {
    height: 500px; /* fallback for older browsers */
    height: 100vh;
    overflow-x: hidden;
    overflow-y: scroll;
    -webkit-perspective: 300px;
    perspective: 300px;
  }

  .parallax__group {
    position: relative;
    height: 500px; /* fallback for older browsers */
    height: 100vh;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }

  .parallax__layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .parallax__layer--fore {
    -webkit-transform: translateZ(90px) scale(.7);
    transform: translateZ(90px) scale(.7);
    z-index: 1;
  }

  .parallax__layer--base {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    z-index: 4;
  }

  .parallax__layer--back {
    -webkit-transform: translateZ(-300px) scale(2);
    transform: translateZ(-300px) scale(2);
    z-index: 3;
  }

  .parallax__layer--deep {
    -webkit-transform: translateZ(-600px) scale(3);
    transform: translateZ(-600px) scale(3);
    z-index: 2;
  }


  /* Debugger styles - used to show the effect
  --------------------------------------------- */

  .debug {
    position: fixed;
    top: 0;
    left: .5em;
    z-index: 999;
    background: rgba(0,0,0,.85);
    color: #fff;
    padding: .5em;
    border-radius: 0 0 5px 5px;
  }
  .debug-on .parallax__group {
    -webkit-transform: translate3d(800px, 0, -800px) rotateY(30deg);
    transform: translate3d(700px, 0, -800px) rotateY(30deg);
 }
  .debug-on .parallax__layer {
    box-shadow: 0 0 0 2px #000;
    opacity: 0.9;
  }
  .parallax__group {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
  }


  /* demo styles
  --------------------------------------------- */

  body, html {
     max-width: 100%;
    overflow-x: hidden;
  }

  body {
    font: 100% / 1.5 Arial;
  }

  * {
    margin:0;
    padding:0;
  }

  .parallax {
    font-size: 200%;
  }

   /* centre the content in the parallax layers */
  .title {
    text-align: center;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }



  /* style the groups--------------------------------------------- */

  #group1 {
    z-index: 5; /* slide over group 2 */
  }
  #group1 .parallax__layer--base {
    background: rgb(255,140,0);
  }

  #group2 {
    z-index: 3; /* slide under groups 1 and 3 */
  }
  #group2 .parallax__layer--back {
    background: rgb(123,210,102);
  }

  #group3 {
    z-index: 4; /* slide over group 2 and 4 */
  }
  #group3 .parallax__layer--base {
    background: rgb(153,216,101);
  }

  #group4 {
    z-index: 2; /* slide under group 3 and 5 */
  }
  #group4 .parallax__layer--deep {
    background: rgb(184,223,101);
  }

  #group5 {
    z-index: 3; /* slide over group 4 and 6 */
  }
  #group5 .parallax__layer--base {
    background: rgb(214,229,100);
  }

  #group6 {
    z-index: 2; /* slide under group 5 and 7 */
  }
  #group6 .parallax__layer--back {
    background: rgb(245,235,100);
  }

  #group7 {
    z-index: 3; /* slide over group 7 */
  }
  #group7 .parallax__layer--base {
    background: rgb(255,140,0);
  }


  /*--------------------------------------------- */
  .demo__info {
    position: absolute;
    z-index:100;
    bottom: 1vh;
    top: auto;
    font-size:80%;
    text-align:center;
    width: 100%;
  }
</style>
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
    <label> <a href="http://playcanvas.com/editor/scene/424681/launch"> Play</a></label>
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
