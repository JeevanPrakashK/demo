<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registered";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete image if delete button is clicked
if(isset($_POST["delete"])) {
    $image_id = $_POST["image_id"];
    $sql = "DELETE FROM images WHERE id = $image_id";

    if ($conn->query($sql) === TRUE) {
        // echo "Image deleted successfully.";
        echo "<script>" . "alert('Image deleted successfully.')" . "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Upload image if form is submitted
if(isset($_POST["submit"])) {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $sql = "INSERT INTO images (image) VALUES ('$file')";

    if ($conn->query($sql) === TRUE) {
        // echo "Image uploaded successfully.";
        echo "<script>" . "alert('Image uploaded successfully')" . "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve images from the database
$sql = "SELECT id, image FROM images";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
        }

        .gallery img {
            margin: 10px;
            max-width: 500px;
            max-height: 400px;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include "./header.php" ?>
  
    <div class="gallery">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="gallery-item">';
                echo '<form method="post" action="'.$_SERVER["PHP_SELF"].'">';
                echo '<input type="hidden" name="image_id" value="'.$row['id'].'">';
                echo '<button type="submit" class="delete-button" name="delete">X</button>';
                echo '</form>';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" />';
                echo '</div>';
            }
        } else {
            echo "<p>No images found.</p>";
        }
        ?>
    </div>
</body>
</html>
