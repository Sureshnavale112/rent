<?php

date_default_timezone_set('Asia/Kolkata');
      $date=date('d-m-Y');
     $time=date('h:ia');
?>


<?php
require('../connect.php');
if(isset($_POST['login'])){


$username = $_POST['username'];




$query = "SELECT * FROM $usertype WHERE username='$username' && password='$password' ";
$run = mysqli_query($db,$query);
$data = mysqli_fetch_array($run);
if(mysqli_num_rows($run) >0){
$_SESSION['isUserLoggedIn']=true;
$_SESSION['username'] = $_POST['username'];


echo "
<script>window.location.href = 'index.php?home=true';</script>";

}else{


echo "'";
echo "
<script>
";

echo "
Swal.fire({
position: 'center',
icon: 'error',
title: ' Incorrect Username or Password ',
showConfirmButton: false,

})";

echo "</script>";


echo "
<script>
window.setTimeout(function () {
window.location.href = 'login.php';
}, 2000);</script>";


}
}

?>