<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $country=$_POST['country'];
    $message=$_POST['message'];

    $to="wi.tecnologiess@gmail.com,info@wi-tech.in";
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone: ".$phone."\n"."Country: ".$country."\n"."Message: "."\n\n".$message;
    $headers="From: ".$email;

    if(mail($to, $subject, $message,$headers)){
        echo "<h1>Thank you"." ".$name.", We contact you shortly!!!</h1>";
    }
}
?>
<h1><a href="index.html">Now Back To Home</a></h1>
