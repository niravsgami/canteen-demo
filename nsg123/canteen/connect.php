<?php
    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $Gender=$_POST['Gender'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];



  $conn= new mysqli('local host','root','','test');
  if($conn->connect_error){
      die('connection failed : '.$conn->connect_error)

  }
  else{
      $stmt=$conn->prepare("insert into registeration(fname,lname,gender,email,password,number)values(?,?,?,?,?,?)");
      $stmt->bind_param("sssssi",$fname,$lname,$gender,$email,$password,$number);
      $stmt->execute();
      echo "registeration successfull...;"
      $stmt->close();
      $conn->close()
  }
?>
