<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username  = "admin";
$password = "mohitsingh";
$db_name = "trip";


$conn = mysqli_connect($server, $username, $password, $db_name);
if(!$conn)
{
    die("connection error" . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$gname = $_POST['gname'];
$gphone = $_POST['gphone'];
$adress = $_POST['adress'];



   $sql = "INSERT INTO s_details (`name`, `email`, `department`, `gender`, `phone`, `gname`, `gphone`, `adress`, `date`) VALUES ( '$name', '$email', '$department', '$gender', '$phone', '$gname', '$gphone', '$adress', CURRENT_TIMESTAMP)";

   if($conn->query($sql) == true){
     $insert = true;
   }
   $conn->close();

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <img class="bg" src="images/bg.jpeg" alt="">
    <div class="container">
        <h1>Welcome To U.S. Trip Form IIMT Engineering College</h1>
        <p>Fill the form to confirm your participation.</p>

<?php
if($insert == true){
  echo "<p class='submitmsg'>Your Form have been submitted successfully</p>";
}
?>

        <form action="" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your Name" require>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="department" id="department" placeholder="Enter your Department">
            <input type="text" name="gender" id="gender" placeholder="Ender your Gender">
            <input type="number" name="phone" id="phone " placeholder="Enter your Phone">
            <input type="text" name="gname" id="gname" placeholder="Enter your Guardian's Name">
            <input type="text" name="gphone" id="gphone" placeholder="Enter Guardian's Phone">
            <textarea name="adress" id="adress" cols="30" rows="5" placeholder="Enter your Adress"></textarea>
            <button type="submit" class="btn">Submit</button>
            <button type="reset" class="btn">Reset</button>
        </form>
</div>

</body>

</html>