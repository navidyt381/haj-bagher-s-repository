<?php include("header.html");

$id=$_POST["id"];
$name=$_POST["cityname"];

$connect=mysqli_connect("localhost","root","","pars novin db");
$result=mysqli_query($connect,"UPDATE `table` SET `city`='$name' WHERE id='$id'");
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