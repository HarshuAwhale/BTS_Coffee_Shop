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

                                //(for multicursor: alt+shift+drag+endkey(f12))
$name=$_POST['name'];                                  //(for multicursor: alt+shift+drag+endkey(f12))
$phone_no=$_POST['phone_no'];
$address=$_POST['address'];
$coffee=$_POST['coffee'];
$quantity=$_POST['quantity'];
$sql = "
INSERT INTO `cafe`.`order`(`name`, `phone_no`, `address`, `coffee`, `quantity`) 
VALUES ('$name','$phone_no','$address','$coffee','$quantity');";
//echo $sql;


// execute the query
if($con->query($sql)==true){
  //  echo"successfully inserted"; 

  //flag for successful insertion
  $insert=true;                                                                   //(-> object operator)
}
else{
    echo"ERROR:$sql <br> $con->error";

}
header("Location:index.php");
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

<div class="order-form-container">
              <!-- <i class="fa-solid fa-xmark" id="form-close" class="active"></i> -->
        
          <form action="order.php" method="post">
            <h3>Order details!😇❤️</h3>
            <input type="text "name="name" class="box" placeholder="Enter your name:">
            <input type="contact" name="phone_no" class="box" placeholder="Enter your Phone no:">
            <input type="text" name="address" class="box" placeholder="Enter your Address:">
            <!-- <input type="password" class="box" placeholder="Enter Password:"> -->
            
            <select name="coffee" id="coffee" size="1" class="bts1">
              <option value="Espresso">Select your favourite coffee:</option>
              <option value="Espresso">Espresso</option>
              <option value="Cappuccino">Cappuccino</option>
              <option value="Mocha coffee">Mocha coffee</option>
              <option value="Latte">Latte</option>
              <option value="Ice Coffee">Ice Coffee</option>
              <option value="Red Eye">Red Eye</option>
              <option value="Cold Brew">Cold Brew</option>
              <option value="Irish Coffee">Irish Coffee</option>
              <option value="Macchiato">Macchiato</option>
            </select>
                <br><br>
              <select name="quantity" id="quantity" size="1" class="bts1">
              <option value="Quantity">Quantity:</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <br><br>
            <button class="btn-2" onclick="alert('Order Booked successfully.')">Confirm Order</button>
            <!-- <input type="submit" name="submit" value="Confirm order" class="btn-2"> -->
            
            
            <!-- <input type="submit" class="btn-1" name="signup now"> -->
            
        </form>
    </div>
 


                  




</body>
</html>