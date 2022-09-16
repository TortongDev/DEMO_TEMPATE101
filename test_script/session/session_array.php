<?php
   session_start();
   // Page was not reloaded via a button press
   if (!isset($_POST['add']) ) {
       $_SESSION['attnum'] = 1; // Reset counter
    
   }
//    unset($_SESSION['attnum']);
//    unset($_SESSION['shope']);
?>

<form method='post'>

<input name='add' type="submit" value='101'>
<input name='add' type="submit" value='102'>
<input name='add' type="submit" value='103'>
<input name='add' type="submit" value='104'>
<input name='add' type="submit" value='105'>
<input name='add' type="submit" value='+'>
</form>
<?php 
    echo $_SESSION['attnum']++;
    echo "<br>";
    $_SESSION['shope'] = array();
   $intt = $_SESSION['attnum'];
    for ($i=0; $i < $intt;$i++) { 
        $_SESSION['shope'] = array(
            $_POST['add'][$i]
        );
    }
    print_r($_SESSION['shope']);
?>
