<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');
//name="categories[]" value="Accounting"
if($con){

    $categories = "";
    $com = "aasd";
    $jt = "a";
    $jd = "asdasda";

    $catList = array("asd","asd");

    foreach($catList as $cat){
        $categories = $cat.",".$categories;
    }

    $currentTimeString = date("h:i:A - Y/m/d");
    $currentTime = time();

    $query = "INSERT INTO `job_listing` (`ListingId`, `Company`, `JobTitle`, `JobDescription`, `Location`, `JobCategory`, `Salary`, `Experience`, `ListingTimeString`, `ListingTime`)
    VALUES (NULL, '{$com}', '{$jt}', '{$jd}', NULL, '{$categories}', NULL, NULL, '{$currentTimeString}', '{$currentTime}');";
    
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
