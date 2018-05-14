<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$bmonth = $_POST['bmonth'];
$byear = $_POST['byear'];
$loc = $_POST['loc'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
if (!empty($fname) || !empty($lname) || !empty($uname) || !empty($email) || !empty($pass) || !empty($bmonth) || !empty($bday) || !empty($byear) || !empty($loc) || !empty($phone) || !empty($mobile)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "11111";
    $dbname = "tronixdb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (fname, lname, uname, email, pass, bmonth, bday, byear, loc, phone, mobile) values('$fname', '$lname', '$uname', '$email', '$pass', '$bmonth', '$bday', '$byear', '$loc', '$phone', '$mobile')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssiiisii", $fname, $lname, $uname, $email, $pass, $bmonth, $bday, $byear, $loc, $phone, $mobile);
      $stmt->execute();
      echo "New record inserted sucessfully";
      header("location: index.php");
      $_SESSION['uname'] = $uname;
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>