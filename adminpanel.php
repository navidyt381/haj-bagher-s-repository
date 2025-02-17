<?php
include("up.php");

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "SELECT * FROM products");
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
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text text-success"><?php echo $row['price']; ?> تومان</p> 
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