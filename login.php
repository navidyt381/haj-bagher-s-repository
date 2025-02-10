<?php
include("up.php");
?>
<div class="container mt-5">
    <form action="loginfinal.php" method="post" class="col-md-6 offset-md-3">
        <div class="mb-3">
            <label for="name" class="form-label">نام</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="نام">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">کلمه عبور</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="کلمه عبور">
        </div>
        <button type="submit" class="btn btn-success">ثبت نام</button>
    </form>
</div>
<?php
include("down.html");
?>