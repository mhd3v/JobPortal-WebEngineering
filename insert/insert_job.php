<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');
//name="categories[]" value="Accounting"
if($con){

    $categories = "";
    $com = $_POST['company'];
    $jt = $_POST['title'];
    $jd = $_POST['description'];
    $sal = $_POST['salary'];
    $saltype = $_POST['salarytype'];
    $location = $_POST['location'];

    $catList = $_POST['categories'];

    foreach($catList as $cat){
        $categories = $cat.",".$categories;
    }

    $currentTimeDate = date("Y/m/d");

    $currentTimeString = date("h:i:A - Y/m/d");
    $currentTime = time();

    $query = "INSERT INTO `job_listing` (`ListingId`, `Company`, `JobTitle`, `JobDescription`, `Location`, `JobCategory`, `Salary`, `SalaryType`, `Experience`, `ListingTimeString`, `ListingTime`)
    VALUES (NULL, '{$com}', '{$jt}', '{$jd}', '{$location}', '{$categories}', {$sal}, '{$saltype}', NULL,'{$currentTimeString}', '{$currentTime}');";

    $res = mysqli_query($con, $query);

    if($res){
        echo "data inserted";
    }

    else{
        echo $query;
    }
}

else{
    echo "error db";
}


?>
