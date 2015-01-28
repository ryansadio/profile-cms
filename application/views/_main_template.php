<?php
/**
 * This is the main template.
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
    <title>Voodoo Works - Profile CMS</title>

    <!-- CSS  -->
    <link href="../../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
<nav class="grey lighten-5" role="navigation">
    <div class="container">
        <div class="nav-wrapper"><a id="logo-container" href="/" class="brand-logo green-sea-text">
                <img src="../../assets/images/logo1.png">
            </a>
        </div>
    </div>
</nav>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        {content}
        <br><br>
    </div>
</div>


<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            Made by
            <a class="green-sea-text text-lighten-3" href="#">Alan Lai</a>,
            <a class="green-sea-text text-lighten-3" href="http://bensoer.com">Ben Soer</a>, and
            <a class="green-sea-text text-lighten-3" href="http://ryansadio.com">Ryan Sadio</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../assets/materialize/js/materialize.js"></script>
<script src="../../assets/materialize/js/init.js"></script>

</body>
</html>