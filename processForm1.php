<?php
session_start();

$SESSION['passengerFN']=$_post['firstname'];
$_SESSION['passengerSN']=$_POST['surname'];

if (isset($_POST['luggage'])){
    $_SESSION['luggage']=1;
    header("Location: luggage.html");
}

else{
    $_SESSION['luggage']=0;
    header("Location: finalstep.php");
}
?>