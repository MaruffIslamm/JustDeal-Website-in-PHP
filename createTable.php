<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "justdeal");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*
// Attempt create table query execution
$sql1 = "CREATE TABLE USER(
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(100) NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    user_name VARCHAR(15) NOT NULL UNIQUE,
    email VARCHAR(15) NOT NULL,
    password VARCHAR(30) NOT NULL
)";
if(mysqli_query($link, $sql1)){
    echo "USER Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Attempt create table query execution
$sql2 = "CREATE TABLE AD(
    ad_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(30),
    ad_title VARCHAR(30),
    ad_type VARCHAR(100),
    category VARCHAR(30),
    max_people INT,
    bathroom INT,
    bedroom INT,
    checkin VARCHAR(30),
    checkout VARCHAR(30),
    extra_info VARCHAR(300),
    image_1 VARCHAR(100)
)";
if(mysqli_query($link, $sql2)){
    echo "AD Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
*/
$sql2 = "CREATE TABLE AD(
    ad_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(30),
    ad_title VARCHAR(30),
    ad_type VARCHAR(100),
    category VARCHAR(30),
    max_people INT,
    bathroom INT,
    bedroom INT,
    checkin VARCHAR(30),
    checkout VARCHAR(30),
    extra_info VARCHAR(300),
    image_1 VARCHAR(100),
    shower VARCHAR(30),
    wifi VARCHAR(30),
    tv VARCHAR(30),
    kitchen VARCHAR(30),
    ac VARCHAR(30),
    access VARCHAR(30)
)";
if(mysqli_query($link, $sql2)){
    echo "AD Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>