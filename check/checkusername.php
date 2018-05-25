<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user = $_POST['username'];

if($user != ""){

    $query = "select * from user where UserName = '{$user}'";

    $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res) == 0)
    echo "Username available";

    else
    echo "Username taken";
}

else
    echo "Please enter a username";



?>