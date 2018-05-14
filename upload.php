<?php
$pname = $_POST['pname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$additionalInfo = $_POST['additionalInfo'];
$ptype = $_POST['ptype'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$scope = $_POST['scope'];
if (!empty($pname) || !empty($price) || !empty($quantity) || !empty($additionalInfo) || !empty($ptype) || !empty($brand) || !empty($model) || !empty($scope)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "11111";
    $dbname = "tronixdb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT pname From upload Where pname = ? Limit 1";
     $INSERT = "INSERT Into upload (pname, price, quantity, additionalInfo, ptype, brand, model, scope) values('$pname', '$price', '$quantity', '$additionalInfo', '$ptype', '$brand', '$model', '$scope')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $pname);
     $stmt->execute();
     $stmt->bind_result($pname);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssiiisii", $pname, $price, $quantity, $additionalInfo, $ptype, $brand, $model, $scope);
      $stmt->execute();
      echo "New record inserted sucessfully";
      header("location: products.php");
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

