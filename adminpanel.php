<?php
include("up.php");

$isAdmin = false;
if (isset($_SESSION["login"]) && isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $connect = mysqli_connect("localhost", "root", "", "parsnovindb");
    if ($connect) {
        $query = "SELECT admin FROM users WHERE name='$username'";
        $result = mysqli_query($connect, $query);
        if ($result && $row = mysqli_fetch_array($result)) {
            if ($row["admin"] == 1) {
                $isAdmin = true;
            }
        }
        mysqli_close($connect);
    }
}
$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "SELECT * FROM products");
if  ($isAdmin==false)
?>
    <main class="container my-4">
        <h2 class="text-center mb-5">پنل ادمین</h2>

        <a href="product_add.php"><button class="btn btn-success mb-4">افزودن محصول جدید</button></a>

        <div class="row g-4">
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <?php if(!empty($row['image'])) { ?>
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="تصویر محصول">
                    <?php } ?>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text text-success"><?php echo $row['price']; ?></p> 
                        <p class="card-text text-success">تومان</p>
                        <a href="product_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">ویرایش</a>
                        <a href="product_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">حذف</a>  
                    </div>
                </div>
            </div>
            <?php
            }
            mysqli_close($connect);
            ?>
        </div>
    </main>
<?php
include("down.html");
?>
