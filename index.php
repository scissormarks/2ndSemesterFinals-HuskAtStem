<!doctype html>
<?php ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Frontpage - HuskAtStem</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"> <!--Loads the popular font 'Roboto' from Google Fonts-->
        <link href="stylesheet/style.css" rel="stylesheet"> <!--Loads the stylesheet-->
        
    </head>
    <body>
        <nav>
            <? require_once('navigation.php');?> <!--Loads the navigation from a seperate file-->
        </nav>
        
        <main class="wrapper">
            <? require_once('content.php');?> <!--PUT CONTENT HERE-->
        </main>
        
        <footer>
            <? require_once('footer.php');?> <!--Loads the footer from a seperate file-->
        </footer>
        <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
        <script src='js/main.js'></script>
    </body>
</html>