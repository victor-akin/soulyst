<!doctype html>
<html>
<head>
    <title>Soulyst</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo STYLES ;?>index.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo STYLES ;?>vendor/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>  
    <div class="top-banner-content">
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                <li>
                     <nav>
                        <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                            </div>
                        </form>
                        </div>
                    </nav>
                </li>
                <li><a href="<?php echo PROJECT_PATH.'login'; ?>">Login</a></li>
                <li><a href="<?php echo PROJECT_PATH.'home/register'; ?>">Register</a></li>
                </ul>
            </div>
        </nav>
    </div>
  </header>
    <main>
    <div>
    &nbsp

     
                