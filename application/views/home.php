<?php
/**
 * This is the homepage view which displays the users "Home" page to their profile site.
 * @package	profile-cms
 * @author	Voodoo Works Dev Team
 * @copyright	Copyright (c) 2015 - 2016, Voodoo Works (-)
 * @copyright	Copyright (c) 2015 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @since	Version 0.0.1
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');
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

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="mdi-image-flash-on"></i></h2>
                    <h5 class="center">Speeds up development</h5>

                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="mdi-social-group"></i></h2>
                    <h5 class="center">User Experience Focused</h5>

                    <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="mdi-action-settings"></i></h2>
                    <h5 class="center">Easy to work with</h5>

                    <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                </div>
            </div>
        </div>

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