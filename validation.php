<?php

session_start();
$userName = $_POST['userName'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'userregistation');

$sql = ("SELECT userName FROM usertable WHERE userName=? && password=?");

 $stmt = mysqli_stmt_init($conn);
 mysqli_stmt_prepare($stmt, $sql);
 mysqli_stmt_bind_param($stmt, "ss" , $userName, $password);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_store_result($stmt);
 $resultCheck = mysqli_stmt_num_rows($stmt);
if($resultCheck > 0){
	header('location:homepage.php');
    $_SESSION['userName'] = $userName;
	exit();
}else{
	$sql = ("INSERT INTO `usertable`( `userName`, `email`, `password`) 		VALUES (?, ?, ?)");
	$stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "sss", $userName, $email, $password);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);

	echo "Invalid User..........";

	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}
    

?>