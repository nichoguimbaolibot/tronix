<?php
    session_start();
    if(isset($_POST['submit'])){
        if(getimagesize($_FILES['image']['tmp_name']) == false){
            echo "Please select an image.";
        }else{
            $connect = new mysqli('localhost','root', '', 'shop');
            $image = addslashes($_FILES['image']['tmp_name']);
            $name = $_POST['name'];
            $image = file_get_contents($image);
            $image = base64_encode($image); 
            $sql = "insert into items (name, image) values ('$name','$image')";         
        }
            $connect->query($sql);
    } 

?>