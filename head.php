<?php
    $path='./z/';
    $dir = new DirectoryIterator($path);
    $dir_count = 0;
    foreach ($dir as $fileinfo) {
        if ($fileinfo->isDir() && !$fileinfo->isDot()) {
            $dir_count++;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101233231-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-101233231-2');
        </script>
        <title>URL Shortener | <?php echo $title; ?></title>
        <link rel="icon" type="image/png" href="logo.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:800" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="URL Shortener is a link tracking platform. When you enter a desired URL, you get a 'Shortened' version of it which can be used to share across platforms like email, websites, etc. When this 'Shortened' link is clicked, it's usage is measured and saved on the server and the user is redirected to the original link." />
    </head>
    <body>
        <nav class="header">
            <div class="nav-wrapper blue-grey darken-3">
                <a href="./" class="brand-logo logo-font">URL Shortener</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="<?php echo $home ?>"><a href="./"><i class="material-icons left">home</i>Home</a></li>
                    <li class="<?php echo $track ?>"><a href="track.php"><i class="material-icons left">track_changes</i>Track</a></li>
                    <li class="<?php echo $about ?>"><a href="about.php"><i class="material-icons left">info</i>About</a></li>
                    <li class="<?php echo $help ?>"><a href="help.php"><i class="material-icons left">help</i>Help</a></li>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="side-nav fixed">
            <li><img src="logo.png" class="logo-img"></li>
            <li><div class="divider"></div></li>
            <li class="center-align"><h6>Current Active Links : <b><?php echo $dir_count; ?></b></h6></li>
            <li><div class="divider"></div></li>
            <li class="<?php echo $home ?>"><a href="./"><i class="material-icons">home</i>Home</a></li>
            <li class="<?php echo $track ?>"><a href="track.php"><i class="material-icons">track_changes</i>Track</a></li>
            <li class="<?php echo $about ?>"><a href="about.php"><i class="material-icons">info</i>About</a></li>
            <li class="<?php echo $help ?>"><a href="help.php"><i class="material-icons">help</i>Help</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons blue-grey-text text-darken-3">menu</i></a>
        <div class="main">