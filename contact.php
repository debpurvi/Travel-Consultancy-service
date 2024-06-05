<?php

$purvi=mysqli_connect("localhost","root","","trvl_cnsty") or die("error");

if(isset($_REQUEST["submit"])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // echo $name."<br>";
    // echo $email."<br>";
    // echo $subject."<br>";
    // echo $message."<br>";

    $query= mysqli_query($purvi,"INSERT INTO contact_tbl(`name`,`email`,`subject`,`message`)values('$name','$email','$subject,'$message')");

    if($query){
        echo "<script>alert('successfull')</script>";
    }
    else{
        echo "<script>alert(' not successfull')</script>";
    }



    

}



?>