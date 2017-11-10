<?php
$result = mysqli_query($conn, "SELECT * FROM images ORDER BY views DESC");
while ($img = mysqli_fetch_assoc($result)) {
    echo "<div class='thumbnail'><a href='show.php?img=".$img['id']."' target='_blank'><img src='img/thumbnail/tn_".$img['name']."'></a><p>Views: ".$img['views']."</p></div> ";
}