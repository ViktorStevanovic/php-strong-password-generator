<?php
session_start();
?>

<h1>
    Your password is: <br>
</h1>
<p> <?php echo $_SESSION['password'] ?>
</p>