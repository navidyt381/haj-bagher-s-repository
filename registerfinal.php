<?php
include("up.php");
$name=$_POST["firstname"];
$family=$_POST["lastname"];
$email=$_POST["email"];
$pass=$_POST["password"];
$repass=$_POST["repassword"];
$conn=mysqli_connect("localhost","root","","pars novin db");
$reslut=mysqli_query($conn,"INSERT INTO `table`(`name`, `family`, `email`, `password`, `repassword`) VALUES ('$name','$family','$email','$pass','$repass');");
mysqli_close($conn);
if($reslut==true){
?>
<p>ثبت نام با موفقیت انجام شد.</p>
<?php
}else{
?>
<p>ثبت نام انجام نشد.</p>
<?php
}
?>
<?php
include("down.html");
?>