<?php
include("header.html");
$connect=mysqli_connect("localhost","root","","pars novin db");
$result=mysqli_query($connect,"SELECT * FROM `table`");
mysqli_close($connect);

$row=mysqli_fetch_array($result);
?>
<p>
<a href="city_add.php"><button>افزودن</button></a>
لیست شهر ها
</p>
<?php 
while($row){
?>
<p>
    <a href="city_delete.php?id=<?php echo($row["id"]);?>"><button>حذف</button></a>
    <a href="city_edit.php?id=<?php echo($row["id"]);?>"><button>ویرایش</button></a>
    <?php echo($row["city"]);?>
</p>
<?php
$row=mysqli_fetch_array($result);
}
include("footer.html");
?>