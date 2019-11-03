<?php

if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $mailFrom= $_POST['mail'];
    $message= $_POST['message'];
    
    $mailTo="nikhsakhamuri@gmail.com";
    $headers= "From: ".$name;
    $txt= " You have received an email from ".$name.".\n\n ".$message;
    
    mail($mailTo,$subject, $txt, $headers);
    header(" Location: index.php?mailsend");
}
    
 
    


?>
