<?php
include("up.php");

$id = $_GET["id"];
$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_array($result);
mysqli_close($connect);
?>
    <main class="container my-5">
        <h2 class="text-center mb-4">ویرایش محصول</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="product_edit_action.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">عنوان محصول</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">قیمت</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>">
                    </div>
                    <button type="submit" class="btn btn-success w-100">ذخیره تغییرات</button>
                </form>
            </div>
        </div>
    </main>
<?php
include("down.html");
?>