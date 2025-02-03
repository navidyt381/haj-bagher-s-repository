<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>فروشگاه نوین پارس</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="container">
        <div class="col">
            <header>
                <div class="background">
                    <h1 id="h1">فروشگاه نوین پارس</h1>
                    <nav>
                        <a href="#">خانه</a>
                        <a href="#">درباره ما</a>
                        <a href="#">خدمات</a>
                        <li><a class="aof" href="buy.html">خرید</a></li>
                        <a href="register.php">ثبت نام</a>
                    </nav>
                </div>
            </header>
            <div id="login">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pars novin db";

                $connection = mysql_connect ($servername, $username, $password, $dbname);


                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $password_user = $_POST["password"];
                $repassword = $_POST["repassword"];

                    if ($password_user != $repassword) {
                        echo "رمز عبور با تکرار آن برابر نیست!";
                    } else {
                        $sql = "INSERT INTO `table`(`name`, `family`, `email`, `password`, `repassword`) VALUES ('$firstname', '$lastname', '$email', '$password_user', '$repassword')";

                    }
                
                ?>
            </div>
        </div>
    </div>
</body>
<footer>
    <p>© 2024 تمامی حقوق پارس نوین محفوظ است.</p>
</footer>
</html>
