<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration

    </title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">

    <link rel="stylesheet" href="styles.css">
</head>
<?php
session_start();


?>


<body class="px-0 px-md-5">
    <div class="container d-flex align-content-center justify-content-center px-0  px-md-3">
        <div class="container-fluid w-75 rounded mx-- my-5 p-0 p-sm-3 bg-white shadow
        "><h1 class="mx-4 ms-sm-5 mt-5 mb-4 ">User Registeration Form</h2>
      
           <?php 
           if (isset($_SESSION['error'])&&!empty($_SESSION['error']))
           {
               echo ' <div class="mx-5 mx-sm-5 mb-3 p-1 text-center   border border-danger bg-white text-danger fw-2 fs-6 rounded">'. $_SESSION['error'] . '</div>';
            }
           ?>
       <br>
            <form action="user_data.php" method="post" class="mt-1 mb-5 mx-4 mx-sm-5">
                <!-- For name  -->
                <label for="fname " class="fs-6">Name:</label>
                <br>
                <input type="text" id="fname" name="fname" class="w-100 p-2 " value = <?php echo $_SESSION["name"]??'';?>
                >
                <br><br>

                <!-- For mail -->
                <label for="email" class="fs-6">Email</label>
                <br>
                <input type="text" id="email" name="email" class="w-100 p-2"    value = <?php echo $_SESSION["email"]??'';?>
                >
                <br><br>


                <!-- For Birthday -->
                <label for="birthday" class="fs-6">Birthday:</label>
                <br>
                <input type="date" class="w-100 p-2" name="date" id=""
                value = <?php echo $_SESSION["dob"]??'';?>
                >
                <br><br>
                <!-- For gender -->
                <label for="Gender" class="fs-6">Gender</label>
                <br>

                <select id="cars" class="w-100 p-2 fs-6" name="gender" size=""  >
                <option value="Choose your Gender" class="fs-6" disabled>Choose your Gender</option>
                <option value="Male"  class="fs-6">Male</option>
                <option value="Female" class="fs-6">Female</option>
           
              </select>
                <br><br>

                <!-- For country -->
                <label for="country" class="fs-6">
                Country
            </label><br>
                <input type="text" class="w-100  p-2" name="country" id="country"
                 value = <?php echo $_SESSION["country"]??'';?>
                ><br><br>
                <input type="submit" class="btn  btn-primary w-100 p-2" value="Submit ">
            </form>

        </div>
    </div>



    </form>

</body>

</html>