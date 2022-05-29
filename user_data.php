<?php

header("data1:this is a boy");

$userdata = array();
 // storing
 $file = 'userdata.csv';
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
   
    $fullname = $_POST['fname']??'';
    $email = $_POST['email']??'';
    $dob = $_POST['date']??'';
    $gender = $_POST['gender']??'';
    $country = $_POST['country']??'';

    // gets the info in case of validation error
    $_SESSION["name"] = $fullname;
    $_SESSION["email"] = $email;
    $_SESSION["dob"] = $dob;
    $_SESSION["gender"] = $gender;
    $_SESSION["country"] = $country;


    if (empty($fullname)){
        header('Location:'.'index.php');
        $_SESSION["error"] = "username can not be empty";
        
    }else{
         if( empty($email)){
             header('Location:'.'index.php');
             $_SESSION["error"] = "Enter your email";
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               header('Location:'.'index.php');
                $_SESSION["error"] = "Invalid email format";
            }else{
                      if (empty($dob)){
                header('Location:'.'index.php');
                $_SESSION["error"] = "Please choose your date of birth";
            }else{
                if (empty($gender)){
                    header('Location:'.'index.php');
                    $_SESSION["error"] = "No gender selected";
                }else{
                    if (empty($country)){
                        header('Location:'.'index.php');
                        $_SESSION["error"] = "please choose your country";
                    }else{
                        $_SESSION["error"] = "";
                        $_SESSION["name"] = '';
                        $_SESSION["email"] = '';
                        $_SESSION["dob"] = '';
                        $_SESSION["gender"] = '';
                        $_SESSION["country"] = '';
                    }
                }
            }
              }
        
        }
    }
   
  


$userdata = array('Name'=>$fullname,'email'=>$email,  'Date of Birth' =>$dob,  'Gender' => $gender, 'Country' => $country);
// var_dump($userdata);


file_put_contents($file,
"<?php\n\$my_array = "
  .var_export($userdata, true)
.";\n?>
"

);

print_r($my_array);


}else{
echo 'this is not a post request';
}


?>
