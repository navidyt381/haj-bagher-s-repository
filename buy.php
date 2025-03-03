<?php
include("up.php");
?>

    <main class="container my-5">
        <h2 class="text-center mb-4">پارس نوین فروشگاه قطعات کامپیوتر</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">نام قطعه</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="مثال: کارت گرافیک">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">قیمت (به تومان)</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="مثال: 1000000">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">تعداد</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="مثال: 2">
                    </div>
                    <button type="submit" class="btn btn-success w-100">ثبت</button>
                </form>
            </div>
        </div>
    </main>
<?php
include("down.html");
?>
