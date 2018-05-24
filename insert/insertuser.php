<?php 

$con = mysqli_connect('localhost', 'root', '', 'jobportal');

$user = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['repassword'];

if($user != ""){

    if($pass == $cpass){

        $query = "select * from user where UserName = '{$user}'";

        $res = mysqli_query($con, $query);
    
        if(mysqli_num_rows($res) == 0){
    
            $query = "INSERT INTO `user` (`UserId`,`UserName`, `Password`)
            VALUES (NULL, '{$user}', '{$pass}');";
    
            $res = mysqli_query($con, $query);
    
            if($res){
                
                session_start();
                $_SESSION['signup'] = 'success';
    
                echo "success";
            }
                
            else
                echo "Signup failed";
    
        }
    
        else
        echo "Username taken";

    }

    else{
        echo "Password's don't match";
    }

}

else
echo "Enter a username";

?>