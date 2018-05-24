<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user;

if(session_status() == PHP_SESSION_NONE) 
session_start();

if(isset($_SESSION['user']))
$user = $_SESSION['user'];

else
echo "You need to be logged in to add your resume!";


if($con){

    $fullname = $_POST['fullname'];
    $title = $_POST['title'];
    $deg = $_POST['degree'];
    $uni = $_POST['university'];
    $cgpa = $_POST['cgpa'];
    $workexp = $_POST['workexp'];
    $additionalinfo = $_POST['additionalinfo'];
    $location = $_POST['location'];

    $currentTimeString = date("h:i:A - Y/m/d");
    $currentTime = time();

    $query = "select * from resume where CandidateId = '{$user}'";

    $res = mysqli_query($con, $query);

    if(mysqli_num_rows($res) == 0){

        $query = "INSERT INTO `resume` (`ResumeId`, `CandidateId`, `FullName`, `Title`, `Degree`, `University`, `Cgpa`, `WorkExperience`, `AdditionalInformation`, `Location`, `ListingTime`, `ListingTimeString`) 
        VALUES (NULL, '{$user}', '{$fullname}', '{$title}', '{$deg}', '{$uni}', '{$cgpa}', '{$workexp}', '{$additionalinfo}', '{$location}', '{$currentTime}','{$currentTimeString}');
        ";
    }

    else{

        $query = "
        UPDATE resume
        SET `FullName` = '{$fullname}', `Title`= '{$title}', `Degree`= '{$deg}', `University`= '{$uni}', `Cgpa`= '{$cgpa}', `WorkExperience`= '{$workexp}',
         `AdditionalInformation`= '{$additionalinfo}', `Location`= '{$location}', `ListingTime`= '{$currentTime}', `ListingTimeString`= '{$currentTimeString}' 
        WHERE CandidateId = '{$user}';

        ";
    }

    

    $res = mysqli_query($con, $query);

    if($res){
        echo "success";
    }

    else{
        echo $query;
    }
}

else{
    echo "error db";
}


?>
