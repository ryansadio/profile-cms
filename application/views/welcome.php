<?php
/** This is the default website home page (loads on route "/"). This will tell the user about our site etc and where
 * to login or register */
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

        <!--CONTENT-->
        <div class="row">
            <div class="col s12 m2 l1"><p>&nbsp;</p></div>
            <div class="col s12 m8 l10"><p><div class="row">
                    <div class="col s7 white-text">
                        <h4 class="header">Welcome to Voodoo Works.</h4>
                        <p class="flow-text">
                            Connect with your friends — and other fascinating people.
                            Get in-the-moment updates on the things that interest you.
                            And watch events unfold, in real time, from every angle.
                        </p>
                    </div>
                    <div class="col s5">
                        <div class="card white darken-1">
                            <div class="card-content grey-text">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="username" type="text" class="validate">
                                                <label for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <a class="green-sea-text" href="#">Forgot your password?</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                Don't have an account?
                                                <br><a class="green-sea-text" href="#">Sign up to get started.</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></p></div>
            <div class="col s12 m2 l1"><p>&nbsp;</p></div>
        </div>
        <!--ENDOFCONTENT-->

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