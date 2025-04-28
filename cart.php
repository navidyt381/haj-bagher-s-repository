<?php
include("up.php");
?>

<main class="container my-5">
    <h2 class="text-center mb-4">سبد خرید شما</h2>
    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<table class="table table-bordered">';
        echo '<thead>
                <tr>
                    <th>تصویر</th>
                    <th>عنوان محصول</th>
                    <th>قیمت (تومان)</th>
                    <th>تعداد</th>
                    <th>جمع</th>
                    <th>عملیات</th>
                </tr>
              </thead>';
        echo '<tbody>';
        $total = 0;
        foreach ($_SESSION['cart'] as $product) {
            $subtotal = (float)$product['price'] * $product['quantity'];
            $total += $subtotal;
            echo '<tr>';
            echo '<td>';
            if (!empty($product['image'])) {
                echo '<img src="' . $product['image'] . '" alt="تصویر محصول" style="max-width: 80px;">';
            } else {
                echo 'بدون تصویر';
            }
            echo '</td>';
            echo '<td>' . $product['title'] . '</td>';
            echo '<td>' . $product['price'] . '</td>';
            echo '<td>' . $product['quantity'] . '</td>';
            echo '<td>' . $subtotal . '</td>';
            echo '<td><a href="remove_from_cart.php?id=' . $product['id'] . '" class="btn btn-danger btn-sm">حذف</a></td>';
            echo '</tr>';
        }
        echo '<tr>
                <td colspan="4" class="text-end"><strong>مبلغ کل:</strong></td>
                <td colspan="2"><strong>' . $total . ' تومان</strong></td>
              </tr>';
        echo '</tbody>';
        echo '</table>';
        echo '<a href="checkout.php" class="btn btn-success">تکمیل خرید</a>';
    } else {
        echo '<p class="text-center">سبد خرید شما خالی است.</p>';
    }
    ?>
</main>

<?php
include("down.html");
?>
