<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gallery</title>
    <style>
        /* CSS styles go here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 30px;
            text-align: center;

        }
       
        .center {
            display: block;
          margin-left: auto;
            margin-right: auto;
            width: 50%;

        }
        .caption{
            text-align: center;
            font-size: 40px;
        }
           
    
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<?php 
    include "./header.php"
    ?>
    <header>
        <h1>Online Gallery </h1>
        
    </header>

    <section class="caption">
        <p>Wecome to Online Gallery...</p>
    </section>
    <section class="center">
        <img src="./images/ca.jpg" alt="ca.jpg" class="center">
        </section>
    
    <footer>
        &copy; 2024 Online Gallery. All rights reserved.
    </footer>
</body>
</html>