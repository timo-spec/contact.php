# contact.php

<?php 
if(isset($_POST['submit'])){
$name = $_POST['author'];
$subject= $_POST ['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo="pantaleonparish@gmail.com";
$headers="From:" .$mailFrom."\r\n";
$txt= "You have received an e-mail from".$name.".\n\n".$message;

mail($mailTo,$subject,$txt,$headers)or die ("Failure");
    header("Location: info.html?mailsend");
}


?>
