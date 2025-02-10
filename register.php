<?php
include("up.php");
?>

    <main class="container my-5">
        <h2 class="text-center mb-4">ثبت‌نام در فروشگاه نوین پارس</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="registerfinal.php" method="post">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">نام</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="نام خود را وارد کنید" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">فامیل</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="نام خانوادگی خود را وارد کنید" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="مثالparsnovin@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" required>
                    </div>
                    <div class="mb-3">
                        <label for="repassword" class="form-label">تکرار رمز عبور</label>
                        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="تکرار رمز عبور" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">ثبت‌نام</button>
                </form>
            </div>
        </div>
    </main>
<?php
include("down.html");
?>
