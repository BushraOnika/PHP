<?php
$insert = false;
if(isset($_POST['name'])){
 $server= "localhost";
 $username="root";
 $password="";
 $con = mysqli_connect($server,$username,$password);
 if(!$con){
    die("Connection to this database failed due to".mysqli_connect_error());
 }
 //echo "Succesfully connecting to the database";

 $name = $_POST['name'];
 $gender= $_POST['gender'];
 $age= $_POST['age'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $more=$_POST['more'];
 $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `others`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$number', '$more', current_timestamp());";
 echo $sql;
 if($con-> query($sql)==true){
   // echo "Successfully inserted";
   $insert=true;
 }
 else{

    echo"ERROR: $sql <br> $con->error";
 }
 $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="BG" src="BG.jpg" alt="Sajek">
    <div class="container">
        <h1>Welcome to NSU Sajek Trip Form</h1>
        <p>Enter your details adn submit this form for confirmation</p>
        <p class="submitMsg"> Thanks for submmiting this form.We are happy to see in Sajek trip.</p>
        <form action="index.php" method="post">

        <input type="text" name="name" id="name" placeholder="Enter your Full name">
        <input type="number" name="age" id="age" placeholder="Enter your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="email" name="email" id="email" placeholder="Enter your Email Address">
        <input type="tel" name="number" id="number" placeholder="Enter Your Phone Number">
        <textarea name="more" id="more" cols="30" rows="15" placeholder="You can enter any information here"></textarea>
        <button class="btn">Submit</button>
        </form>
   
    </div>
    
</body>
</html>