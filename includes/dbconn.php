<?php 
 $con = mysqli_connect('localhost','root', '', 'rmr_online');
 return $con;


if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>