<?php include("header.html");

$name=$_POST["cityname"];

$connect=mysqli_connect("localhost","root","","pars novin db");
$result=mysqli_query($connect,"INSERT INTO `table`(`city`) VALUES ('$name')");
mysqli_close($connect);

if ($result===true){
    echo("ذخیره شد");
}else{
    echo("ذخیره نشد");
}
include("footer.html");
?>