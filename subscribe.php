<?php
# error variables to hold error messages
$fnameErr = $lnameErr = $emailErr = "";
$fname = $lname = $email = $msg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["fname"])){
        $fnameErr="First name is required";
    } else {
        $fname = test_input($_POST["fname"]);}
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $nameErr = "Only letters and white space allowed";
          }

    if(empty($_POST["lname"])){
        $lnameErr="Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $nameErr = "Only letters and white space allowed";
          }}
    
    if(empty($_POST["email"])){
        $emailErr="Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }}

    if (empty($_POST["msg"])) {
        $msg = "";} else {
        $msg = test_input($_POST["msg"]);}

}
?>