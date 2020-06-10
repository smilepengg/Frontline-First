<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $to='smilepengg@gmail.com';
    $subject='From Submission';
    $message="Name: ".$name."\n"."Email: ".$email."\n". "Wrote the following: "."\n\n".$msg;

    if(mail($to, $subject, $message)){
        echo "Sent Successfully! Thank you! We will contact you shortly!"
     }
     else{
        echo "Something went wrong";
     }
}

?>