<?php include("header.html");
$id=$_GET['id'];
?>
<form action="city_edit_action.php" method="post">
    <input type="text" name="id" hidden value="<?php echo($id) ?>">
    <input type="text" name="cityname" placeholder="اسم شهر جدید را وارد کنید.">
    <input type="submit" value="ثبت">
</form>
<?php
include("footer.html");
?>