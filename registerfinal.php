<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه نوین پارس</title>
<link rel="stylesheet" href="design.css">
</head>
<body>
    <header>
        <div class="background">
            <h1 id="h1">فروشگاه نوین پارس</h1>
            <nav>
                <a href="#">خانه</a>
                <a href="#">درباره ما</a>
                <a href="#">خدمات</a>
               <li><a class="aof" href="buy.html">خرید</a></li>
               <a href="register.html">ثبت نام</a>
            </nav>
        </div>
 </header>
 <div id="login">
 <?php
 $firstname=$_POST["firstname"];
 $lasname=$_POST["lastname"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $repassword=$_POST["repassword"];

 if($password!=$repassword)
 echo("رمز عبور با تکرار آن برابر نیست!");
else{
    echo($firstname);
    echo($lasname);
    echo($email);
    echo($password);
    echo($repassword);
    echo("ثبت نام شما با موفقیت انجام شد.");
}
 ?>
 </div>
 <footer>
    <p>© 2024 تمامی حقوق پارس نوین محفوظ است.</p>
</footer>
</body>
</html>