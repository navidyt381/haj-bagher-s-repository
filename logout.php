<?php
include("up.php");
unset($_SESSION["login"]);
?>
<script>
    location.replace("index.php");
</script>
<?php
include("down.html");
?>