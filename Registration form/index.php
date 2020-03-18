<?php include "login.php"; ?> 
<?php
$con= mysqli_connect('localhost','root','','todo_db');
if(mysqli_connect_errno())
{
    echo 'Failed to connect mySql'.mysqli_connect_errno();
}
if(isset($_POST['submit']))
{
   $query = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `passwords`) VALUES (' $userfName', '$userlName', '$email ', '  $password')";
    if(mysqli_query($con,$query))
    {
        header('Location: welcome.php');
    }
    else{
        echo 'Error: '.mysqli_error($con);
    }
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
</head>

<body>
    <form class="form" method="POST">
      
        <label>
            First Name*
        </label>
        <br>
        <div>
            <input type="text" name="fname" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $userfName;?> " placeholder="enter first name">
            <span style="color: red;">
                <?php
                if (isset($errors['fname'])) {
                    echo $errors['fname'];
                }
                ?>
            </span>
        </div>

        <br>
        <br>
        <label>
            Last Name*
        </label>
        <br>
        <div>
            <input type="text" name="lname" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $userlName;?>" placeholder="enter last name">
            <span style="color: red;">
                <?php
                if (isset($errors['lname'])) {
                    echo $errors['lname'];
                }
                ?>
            </span>
        </div>

        <br>
        <br>
        <label>
            Email*
        </label>
        <br>
        <div>
            <input type="text" name="email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $email;?>" placeholder="john@gmail.com">
            <span style="color: red;">
                <?php
                if (isset($errors['email'])) {
                    echo $errors['email'];
                }
                ?>
            </span>
        </div>

        <br>
        <br>
        <label>
            Password*
        </label>
        <br>
        <div>
            <input type="password" name="password" placeholder="Enter Password">
            <span style="color: red;">
                <?php
                if (isset($errors['password'])) {
                    echo $errors['password'];
                }
                ?>
            </span>
        </div>

        <br>
        <br>
        <label>
            Address
        </label>
        <br>
        <div>
            <input type="text" name="address" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo $address;?>" placeholder="Enter address">
            <span style="color: red;">
                <?php
                if (isset($errors['address'])) {
                    echo $errors['address'];
                }
                ?>
            </span>
        </div>


        <br>
        <br>
        <button type="submit" name="submit" class="login">
            <center>Login</center>
        </button>


    </form>
</body>

</html>

<style>
    .form{
        border: 1px;
        background-color:white;
        width:400px;
        margin-left: 470px;
        margin-top:100px;
        
    }
    .label{
        color:white;
    }
</style>