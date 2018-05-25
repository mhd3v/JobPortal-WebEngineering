<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user;

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user']))
$user = $_SESSION['user'];

else
echo "You need to be logged in to apply!";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$listingid = (int)$_POST['listingid'];

$query = "select * from job_listing where ListingId = {$listingid} and PosterId = '{$user}'";

$res = mysqli_query($con, $query);

if(mysqli_num_rows($res) == 0){

    $query = "select * from job_application where CandidateUserName = '{$user}' and ListingId = {$listingid}";

    $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res) == 0){

        if($fullname != "" && $email != "" && $reason != ""){

            $query = "INSERT INTO `job_application` (`ApplicationId`,`CandidateUserName`, `ListingId`,`FullName`, `Email`, `Reason`)
            VALUES (NULL, '{$user}', {$listingid},'{$fullname}', '{$email}','{$reason}');";
    
            $res = mysqli_query($con, $query);
    
            if($res){
                echo "success";
            }
                
            else
                echo $query;
        }
        else
            echo "All field are required!";



    } 
    else
        echo "Already applied";  

}

else
    echo "You can't apply to jobs you've listed";

?>