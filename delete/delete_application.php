<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user;

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

    if($con){
    
        $appid = $_POST['appid'];
    
        $query = "DELETE FROM `job_application` where ApplicationId ={$appid};";
    
        $res = mysqli_query($con, $query);
    
        if($res){
            echo "success";
        }
    
        else{
            echo "Database error!";
        }
    }
    
    else{
        echo "error db";
    }
    
}

else
echo "You need to be logged in to delete!";


?>
