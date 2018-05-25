<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $cnewpass= $_POST['cnewpass'];

    $user = $_SESSION['user'];

    $query = "select * from user where UserName = '{$user}' and Password = '{$oldpass}'";

    $res = mysqli_query($con,$query);

    if($oldpass != "" && $newpass != "" && $cnewpass != ""){

        if(mysqli_num_rows($res) == 1){

            if($newpass == $cnewpass){
    
                $query = "update `user` set `Password` = '{$newpass}' where UserName = '{$user}'";
                $res = mysqli_query($con, $query);
    
                if($res)
                echo "success";
    
                else
                echo "db error";
    
            }
            else{
                echo "Updated passwords don't match";
            }
    
    
        }
        else{
            echo "Incorrect old password";
        }

    }

    else
    echo "Fill all fields";

}
else
    echo "Not logged in";



?>