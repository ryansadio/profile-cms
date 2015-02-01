<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>{$title}</title>
    {include file="_favicon.tpl"}

    <!-- CSS  -->
    <link href="../../../assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../../assets/materialize/css/style_profile.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container padded">
            <br><br>
            <div class="row center">
                <img src="{$image}" alt="" class="circle responsive-img">
            </div>
            <h2 class="header center white-text">{$name}</h2>
            <h5 class="header center light">{$job}</h5>
            <br>
            <h5 class="header center light">{$email}</h5>
            <br><br>
        </div>
    </div>
    <div class="parallax {$base_colour}"><!--<img src="../../assets/images/background1.jpg" alt="Unsplashed background img 2">--></div>
</div>

<nav class="{$accent_colour}" role="navigation">
    <div class="container">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s4 center active">
                    <a href="/profile/{$profile_name}">Home</a>
                </div>
                <div class="col s4 center">
                    <a href="/profile/{$profile_name}/projects">Projects</a>
                </div>
                <div class="col s4 center">
                    <a href="/profile/{$profile_name}/resume">Resume</a>
                </div>
            </div>
        </div>
    </div>
</nav>


<!--CONTENT-->
<div class="container">
    <div class="section">