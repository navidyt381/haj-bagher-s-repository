<?php include("header.html"); 
$connect=mysqli_connect("localhost","root","","pars novin db");
$result=mysqli_query($connect,"SELECT * FROM `table`");
mysqli_close($connect);

$row=mysqli_fetch_array($result);
?>

<p>شهر ها</p>
<select name="" id="">
    <?php 
    while ($row)
    {
    ?>
    <option value="0"><?php echo($row["city"]); ?></option>
    <?php 
    $row=mysqli_fetch_array($result);
    }
    ?>
</select>

<?php include("footer.html"); ?>