<?php
if(!$_GET['img']) die("No image to show");
require "config.php";
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
$id=intval($_GET['img']);
mysqli_query($conn, "UPDATE images SET views=views+1 WHERE id=$id LIMIT 1");
$result = mysqli_query($conn, "SELECT * FROM images WHERE id=$id LIMIT 1");
$img = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php1.5 - <?=$img['name']?></title>
</head>
<body>
    <figure>
        <p><img src="<?=$img['path'].$img['name']?>" alt="" /></p>
        <figcaption>
            <?="Name: ".$img['name']."<br>Views: ".$img['views']?>
        </figcaption>
    </figure>
</body>
</html>
<?php
mysqli_close($conn);
?>