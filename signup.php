<?php
if(isset($_POST['name'])){
    //set connection variables
$insert=false;
$server = "localhost";
$username = "root";
$password = "";

//create a database connection
$con = mysqli_connect($server, $username, $password);

//check for connection success
if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
}
//echo "success connecting to the db";

//collect post variables

// $SrNo=$_POST['Sr No'];                                  //(for multicursor: alt+shift+drag+endkey(f12))
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "
INSERT INTO `cafe`.`signup`(`name`, `email`, `password`) VALUES ('$name','$email','$password');";
//echo $sql;


// execute the query
if($con->query($sql)==true){
//   echo"successfully inserted"; 

  //flag for successful insertion
  $insert=true;                                                                   //(-> object operator)
}
else{
    echo"ERROR:$sql <br> $con->error";

}
//close the database connection
$con->close();

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    
<div class="signup-form-container">
              <i class="fa-solid fa-xmark" id="form-close" class="active"></i>
        
          <form action="">
            <h3>SignUp!</h3>
            <input type="Name" name="name" class="box" placeholder="Enter your name:">
            <input type="Email" name="email" class="box" placeholder="Enter your email:">
            <input type="password" name="password" class="box" placeholder="Enter Password:">
            <input type="submit" name="submit" class="btn-1" placeholder="Signup Now">
            
            <!-- <input type="submit" class="btn-1" name="signup now"> -->
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don`t have an account? <a href="">register now</a></p>
        </form>
    </div>
    
    <script>
        
        let formBtn = document.querySelector('#signup-btn')
        let signupForm = document.querySelector('.signup-form-container');
        let formclose = document.querySelector('#form-close');

        formBtn.addEventListener('click', () =>{
        signupForm.classList.add('active');
        });

        formclose.addEventListener('click', () =>{
        signupForm.classList.remove('active');
        });



    </script>

</body>
</html>