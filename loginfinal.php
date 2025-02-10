<?php
include("up.php");
$name=$_POST["name"];
$password=$_POST["password"];
$link=mysqli_connect("localhost","root","","test db");
$result=mysqli_query($link,"SELECT `name`, `password` FROM `table test` WHERE `name`='navid' and `password` = '1234';");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row) {
    $_SESSION["login"]=true;
?>
<script>
    location.replace("index.php");
</script>
<?php
}else{
?>
<p>نام کاربری یا رمز عبور صحیح نیست</p>
<?php
}
?>
<?php
include("down.html");
?>