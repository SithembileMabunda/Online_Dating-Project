<!DOCTYPE html>
<html>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>

<?php
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $folder = "./images";
    $image_path = $_FILES["fileToUpload"]["tmp_name"];
    $image_name = basename($_FILES["fileToUpload"]["name"]);
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"]))
    {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else
        {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if (!file_exists($folder))
    {
        mkdir($target_dir);
    }
    
    // Check if file already exists
    if (file_exists($target_file))
    {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0)
    {
        echo "Sorry, your file was not uploaded.";
    
    // if everything is ok, try to upload file
    }
    else
    {
        if (move_uploaded_file($image_path, $target_file))
        {
            echo "The image ".$image_name." has successfully been uploaded.";
        }
        else
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>