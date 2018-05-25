<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user;

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user']))
$user = $_SESSION['user'];

else
echo "You need to be logged in to apply!";

$fullname = "asd";
$email = "asdad";
$reason = "asdad";
$listingid = 12;

$query = "select * from job_application where CandidateUserName = '{$user}' and ListingId = {$listingid}";

$res = mysqli_query($con, $query);

if(mysqli_num_rows($res) == 0){

    $query = "INSERT INTO `job_application` (`ApplicationId`,`CandidateUserName`, `ListingId`,`FullName`, `Email`, `Reason`)
    VALUES (NULL, '{$user}', {$listingid},'{$fullname}', '{$email}','{$reason}');";

    $res = mysqli_query($con, $query);

    if($res){
        echo "Signup successful";
    }
        
    else
        echo $query;

}

else
echo "Already applied";

?>

