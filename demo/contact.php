<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            text-align: center;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .file-upload-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .file-upload-label {
            position: relative;
            cursor: pointer;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
        }
        .file-upload-input {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        .upload-button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .upload-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php include "./header.php"; ?>
    <div class="container">
        <h2>Upload Image</h2>
        <form action="upload_image.php" method="post" enctype="multipart/form-data" class="file-upload-form">
            <label for="image" class="file-upload-label" id="image-label">
                <span>Choose an image</span>
                <input type="file" name="image" id="image" class="file-upload-input" onchange="updateLabel(this)">
            </label>
            <input type="submit" value="Upload" name="submit" class="upload-button">
        </form>
    </div>

    <script>
        function updateLabel(input) {
            var label = input.closest('.file-upload-label');
            var fileName = input.files[0].name;
            label.querySelector('span').innerText = fileName;
        }
    </script>
</body>
</html>
