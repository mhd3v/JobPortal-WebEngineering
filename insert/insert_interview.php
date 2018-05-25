<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user;

$candidateusername = $_POST['candidateusername'];

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user'])){

    $user = $_SESSION['user'];

    $fullname = $_POST['fullname'];
    $cname = $_POST['cname'];
    $message = $_POST['message'];

    $candidateusername = $_POST['candidateusername'];

    $query = "select * from interview where EmployerId = '{$user}' and CandidateId = '{$candidateusername}'";

    $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res) == 0){

        $query = "INSERT INTO `interview` (`InterviewId`, `EmployerId`, `EmployerFullName`, `Message`,`CompanyName`, `CandidateId`) VALUES (NULL, '{$user}', '{$fullname}',
        '{$message}', '{$cname}', '{$candidateusername}');";

        $res = mysqli_query($con, $query);

        if($res){
            echo "success";
        }
            
        else
            echo "Failed to send invite";

    }

    else
        echo "Invite already sent to this user";
}

else
    echo "You need to be logged in to send interview!";
