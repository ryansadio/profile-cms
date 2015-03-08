<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Voodoo - {$title}</title>
    {include file="_favicon.tpl"}

    <!-- CSS  -->
    <link href="../../../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../../assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
<nav class="grey lighten-5" role="navigation">
    <div class="container">
        <div class="nav-wrapper">
            <a id="logo-container" href="/" class="brand-logo green-sea-text">
                <img src="../../../assets/images/logo1.png">
            </a>
            
            {* If logged in, show name and logout buttons. *}
            <div class="">
                <ul class="right hide-on-med-and-down green-sea-text">
                    <li class="waves-red"><a href="#" class="green-sea-text ">Log out</a></li>
                </ul>
                <span class="green-sea-text right">Hello {$name}!</span>
            </div>

        </div>
    </div>
</nav>


<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>