<?php
$ServerName = "localhost";
$UserName = "displayc_aiidev";
$Password = "N2]2jj2C>T7{RskH";
$DBName = "displayc_app";

$conn = mysqli_connect($ServerName, $UserName, $Password, $DBName);
if(!$conn){
	die("Conn failed: " . mysqli_connect_error());
}

$Sql = "CREATE TABLE Majors (
	Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	MajorName VARCHAR(255) NOT NULL,
	MajorCategory VARCHAR(255) NOT NULL,
	DateAdded TIMESTAMP
	)";
if(mysqli_query($conn, $Sql)){
	echo "Majors Table Created Successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>