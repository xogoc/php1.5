<?php
require "config.php";
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
require "modules/functions.php";
require "modules/upload.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php1.5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        require "modules/gallery.php";
        ?>
    </div>
    <div><?=$message?></div>
    <form enctype="multipart/form-data" action="index.php" method="POST">
        <div>
            <label for="file">Choose image to upload</label>
            <input name="img" id="file" type="file">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
<?php
mysqli_close($conn);
?>