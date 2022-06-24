<?php
   session_start();
    if(isset($_POST['ceck'])){
        $_SESSION['ceck'] = "Ada";
    }
    echo $_SESSION['ceck'];
?>

<form action="ceck.php" method="POST">
    <input type="submit" name="ceck" value="Ceck">
</form>
