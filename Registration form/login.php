<?php
// session_start();
// $_SESSION['fname'] = $_POST['fname'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];
    $userfName = trim($_POST['fname']," ");
    $userlName = trim($_POST['lname']," ");
    $email = trim($_POST['email']," ");
    $password = $_POST['password'];
    $address = trim($_POST['address']," ");


    //firstName
    if (strlen($userfName) <= 0){
        $errors['fname'] = 'First Name field is required.';
    } elseif (strlen($userfName) > 255) {
        $errors['fname'] = 'First Name is too long.';
     }//elseif ($userfName= " "){
    //     //$errors['fname'] = 'First Name has no widespace.';
    //     trim($userfName);
    // }


    // lastName
    if (strlen($userlName ) <= 0) {
        $errors['lname'] = 'Last Name field is required.';
    } elseif (strlen($userlName ) > 255) {
        $errors['lname'] = 'Last Name is too long.';
     }//elseif (trim($userlName," ")){
    //     $errors['lname'] = 'Last Name did not support the widespace.';
    // }


    //email
    if (strlen($email) <= 0) {
        $errors['email'] = 'email field is required.';
    } 
    elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
    {
       $errors['email']='Invalid Email';
    }


    // password
    if(strlen($password)<=0 )
     {
          $errors['password']='Password field should be required.';
     }
     elseif(strlen($password)<6)
     {
         $errors['password']='Password should  be more than 6 characters.';
     }
     elseif(!preg_match('/[a-zA-Z]+[0-9]+$/',$password))
     {
        $errors['password']='please enter at least one numeric value.';
     }

    //address
    // if (strlen($address)<=0)
    // {
    //     $errors['address'] = 'Address field should be required.';
    // }
   if (strlen($address) > 255) {
        $errors['address'] = 'Address is too long.';
    } 
    


    
    // if(!$errors>0){
    //     session_start();
    //     $_SESSION['fname'] = $_POST['fname'];
    //     header('Location: welcome.php');
    // }
   
    

}  
else {
   
  
}

?>
