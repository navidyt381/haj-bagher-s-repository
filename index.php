<?php
include("up.php");

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "SELECT * FROM products");
?>
    <main class="container my-4">
        <h2 class="text-center mb-5">به سایت نوین پارس خوش آمدید</h2>

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
                        <p class="card-text text-success"><?php echo $row['price']; ?> </p>
                        <p class="card-text text-success">تومان</p>   
                    </div>
                </div>
            </div>
            <?php
            }
            mysqli_close($connect);
            ?>
        </div>

        <p class="text-start fs-5 mt-4">جهت خرید به بخش خرید مراجعه فرمایید.</p>
    </main>
<?php
include("down.html");
?>
