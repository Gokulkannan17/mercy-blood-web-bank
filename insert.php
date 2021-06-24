
<?php
  error_reporting(0);
  $conn=new mysqli('localhost','root','','test');

 if($conn->connect_error){

    die("Connection Failed");
 }

  $name=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'Name'));
  $mob=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'mobile'));
  $DOB=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'birth'));
  $gender=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'Yes'));
  $bloodGroup=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'blood'));
  $add=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'address'));
  //$img=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'pho'));


  $stat=$conn->prepare("INSERT into blood(Name,Mobile,Gender,BloodGroup,Address,DateofBirth) values(?,?,?,?,?,?)");
  $stat->bind_param("sissss", $name,$mob,$gender,$bloodGroup,$add,$DOB);
  mysqli_execute($stat);
  $stat->close();
  $conn->close();

  header('location:success.html');
  

     
?>