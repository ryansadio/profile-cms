<?php
/** This is the resume view which displays the users "Resume" page to thier profile site */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="../../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../assets/materialize/css/style_profile.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container padded">
            <br><br>
            <div class="row center">
                <img src="../../assets/images/me.jpg" alt="" class="circle responsive-img">
            </div>
            <h2 class="header center white-text">Ben Soer</h2>
            <h5 class="header center light">Web Developer</h5>
            <br>
            <h5 class="header center light">ben@soer.com</h5>
            <br><br>
        </div>
    </div>
    <div class="parallax midnight_blue"><!--<img src="../../assets/images/background1.jpg" alt="Unsplashed background img 2">--></div>
</div>

<nav class="" role="navigation">
    <div class="container">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s4 center active">
                    <a href="/">Home</a>
                </div>
                <div class="col s4 center">
                    <a href="#">Projects</a>
                </div>
                <div class="col s4 center">
                    <a href="#">Resume</a>
                </div>
            </div>
        </div>
    </div>
</nav>


<!--CONTENT-->
<div class="container">
    <div class="section">
<!--Test i am another comment-->
        <object width="100%" height="1000px" data="../../assets/pdfs/Untitled.pdf"></object>

    </div>
</div>
<!--ENDOFCONTENT-->


<footer class="page-footer midnight_blue">
    <div class="container center">
        <div class="row">

            <div class="col s4">
                <p>&nbsp;</p>
            </div>

            <div class="col s1">
                <a href="#"><img src="../../assets/images/linkedin2.png" width="46"></a>
            </div>

            <div class="col s1">
                <a href="#"><img src="../../assets/images/social71.png" width="46"></a>
            </div>

            <div class="col s1">
                <a href="#"><img src="../../assets/images/social92.png" width="46"></a>
            </div>

            <div class="col s1">
                <a href="#"><img src="../../assets/images/share6.png" width="46"></a>
            </div>

            <div class="col s4">
                <p>&nbsp;</p>
            </div>

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="#">Voodoo Works.</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../assets/materialize/js/materialize.js"></script>
<script src="../../assets/materialize/js/init_profile.js"></script>

</body>
</html>