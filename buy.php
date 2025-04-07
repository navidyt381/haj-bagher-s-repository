<?php
include("up.php");
?>

<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow">
        <div class="card-header bg-success text-white text-center">
          <h2 class="mb-0">پارس نوین فروشگاه قطعات کامپیوتر</h2>
        </div>
        <div class="card-body">
          <form method="POST" action="but.php">
            <div class="mb-3">
              <label for="name" class="form-label">نام قطعه:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="مثال: کارت گرافیک" required>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">قیمت (به تومان):</label>
              <input type="number" class="form-control" id="price" name="price" placeholder="مثال: 1000000" required>
            </div>
            <div class="mb-3">
              <label for="quantity" class="form-label">تعداد:</label>
              <input type="number" class="form-control" id="quantity" name="quantity" placeholder="مثال: 2" required>
            </div>
            <button type="submit" class="btn btn-success w-100">ثبت سفارش</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include("down.html");
?>