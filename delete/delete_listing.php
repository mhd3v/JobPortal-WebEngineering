<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

    if($con){

        $listingid = $_POST['listingid'];
    
        $query = "DELETE FROM `job_listing` where ListingId ={$listingid};";
        $query1 = "DELETE FROM `job_application` where ListingId ={$listingid};";
    
        $res = mysqli_query($con, $query);
        $res1 = mysqli_query($con, $query1);
    
        if($res){
            echo "success";
        }
    
        else{
            echo "Database error!";
        }
    }
    
    else
        echo "error db";
    
}

else
echo "You need to be logged in to delete!";


?>
