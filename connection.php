<?php
$con=new mysqli('localhost','root','','crudoperation');

if($con){
//    echo "connection succed";
}else{
    die(mysqli_error($con));
}

?>