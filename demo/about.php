<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Gallery</title>
    <style>
        /* Add CSS styles here for page layout and design */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        h1, h2 {
            text-align: center;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .caption {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    include "./header.php"
    ?>
    <div>
        <h1>About Us Gallery</h1>
    </div>
    <div class="container">
        <section class="gallery">
            <img src="./images/nature.jpg" alt="nature.jpg">
            <img src="./images/logo.jpg" alt="logo.jpg">
            <img src="./images/gallery.jpg" alt="gallery.jpg">
            <!-- Add more images here -->
        </section>
        <section class="caption">
            <p><i>"Welcome to our online gallery, where creativity knows no bounds. Explore captivating artworks from talented artists worldwide. Let each piece ignite your imagination and evoke emotions beyond words. Dive into a world of beauty, expression, and inspiration. Enjoy the journey...</i></p>
        </section>
    </div>
</body>
</html>
