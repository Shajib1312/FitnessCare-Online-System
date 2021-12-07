<?php

session_start();


$senderName = $_POST['senderName'];
$email = $_POST['email'];
$contain = $_POST['contain'];

$conn = new mysqli('localhost', 'root', '', 'userregistation');

$sql = ("INSERT INTO `usercontact` (`senderName`, `email`, `contain`) VALUES ('$senderName', '$email', '$contain');");

   $result = mysqli_query($conn, $sql);

    echo "Sent Massage Sussecfull.............";
    

?>