<?php
include("up.php");
?>
    <main class="container my-5">
        <h2 class="text-center mb-4">افزودن محصول جدید</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="product_add_action.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">عنوان محصول</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="عنوان محصول">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">قیمت</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="قیمت به تومان">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">تصویر محصول</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-success w-100">افزودن محصول</button>
                </form>
            </div>
        </div>
    </main>
<?php
include("down.html");
?>
