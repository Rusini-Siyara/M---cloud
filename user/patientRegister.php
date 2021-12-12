
<?php

session_start();
header('location:PationForum.php');

$fu_name = $_POST['full_name'];
$email = $_POST['email'];
$user_name = $_POST['username'];
$phone = $_POST['mobile'];
$nId = $_POST['nId'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$about = $_POST['about'];
$gender = $_POST['gender'];
$pass = $_POST['password'];


// Database connection
$conn = new mysqli('mysql://b839617a54151e:c42a9797@us-cdbr-east-04.cleardb.com/heroku_40c31dad5866879?reconnect=true','b839617a54151e','c42a9797','heroku_40c31dad5866879');

$sql = "SELECT * FROM patient WHERE NationalId = '$nId'";			
$result = mysqli_query($conn,$sql);
    
$num = mysqli_num_rows($result);



    if($gender != '-1'){	


                    if($num == 1){

                        $sql = "SELECT * FROM patient WHERE NationalId = '$nId' AND full_name = '$fu_name'";			
                        $result = mysqli_query($conn,$sql);
                            
                        $num = mysqli_num_rows($result);

                        if($num == 1){

                            echo "User already registered!";


                        }else{


                            $query = "UPDATE `patient` SET full_name = '$fu_name',email = '$email',mobile_number = '$phone',username = '$user_name',gender = '$gender',address = '$address',birth = '$birth',about = '$about' , password = '$pass' WHERE nId = '$nId'";


                            $result = mysqli_query($conn,$query);


                        }

                        
                    }else{

                        echo "ID Not inserted yet";
                    }
            
                }else{
                    header('location:PationForum.php');
                    echo "gender null";

                }

    

?>





