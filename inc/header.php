<?php require "php/config.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="css/app.css" rel="stylesheet"/>
        <title>Mon Animal</title>
    </head>
    <body>
        
        <header>
        <!-- <div class="menu"> -->
        <nav class="navbar">
            <img class="logo" src="img/logo.png" alt="logo lune"/>
                <ul class="liste">
                    <?php foreach ($nav as $value){
                        echo '<li>
                                <a href = "'.$value.'.php">
                                '.$value.'
                                </a>
                            </li>'
                    ;} 
                    ?>
                </ul>
            <!-- </div> -->
        </nav> 
        
        </header>
