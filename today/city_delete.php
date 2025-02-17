<?php include("header.html");

$id=$_GET["id"];

$connect=mysqli_connect("localhost","root","","pars novin db");
$result=mysqli_query($connect,"DELETE FROM `table` WHERE id='$id'");
mysqli_close($connect);

if ($result===true){?>
    <script>
        location.replace("city.php");
    </script>
    <?php
}else{
    echo("ذخیره نشد");
}
include("footer.html");
?>