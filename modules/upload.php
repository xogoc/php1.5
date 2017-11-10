<?php
if($_FILES['img']) {
    if (!preg_match("/^image\/.+$/", $_FILES['img']['type'])) {
        $message = "Error: wrong file type!";
    } elseif ($_FILES['img']['error']) {
        $message = "Error " . $_FILES['img']['error'];
    } else {
        $name = friendlyName($_FILES['img']['name']);
        $path = "img/";
        $size = $_FILES['img']['size'];
        if (move_uploaded_file($_FILES['img']['tmp_name'], $path.$name)) {
            $message = "Image uploaded successfully!";
            mysqli_query($conn, "INSERT INTO images (name, path, size) VALUES ('$name', '$path', $size)");
            create_thumbnail($path.$name, $path."thumbnail/tn_".$name, 160, 120);
        } else {
            $message = "Error while uploading image!";
        }
    }
}