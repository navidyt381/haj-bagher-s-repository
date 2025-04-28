<?php
include("up.php");
$name = $_POST["firstname"];
$family = $_POST["lastname"];
$email = $_POST["email"];
$pass = $_POST["password"];
$repass = $_POST["repassword"];
$conn = mysqli_connect("localhost", "hajbag_root", "Nn123456*", "hajbag_parsnovindb");
$reslut = mysqli_query($conn, "INSERT INTO `users`(`name`, `family`, `email`, `password`, `repassword`) VALUES ('$name','$family','$email','$pass','$repass');");
mysqli_close($conn);
if($reslut == true){
?>
<p class="backing">ثبت نام با موفقیت انجام شد.</p>
<a class="backing" href="index.php"><button class="btn btn-primary mt-3">بازگشت به صفحه اصلی</button></a>
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
