<?php
session_start();
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$telephone = $_POST["telephone"];

$server = "127.0.0.1";
$userDB = "root";
$passDB = "";
$dbName = "student";

$conn = new mysqli($server,$userDB,$passDB,$dbName);

if($conn->connect_error){
    die("Connect Error");
}

$insert_sql = "INSERT INTO student (name, age, address, telephone) 
    VALUES ('".$name."','".$age."','".$address."','".$telephone."')";
$conn->query($insert_sql);
$_SESSION["student"] = [
    "name" => $name,
    "age" => $age,
    "address" => $address,
    "telephone" => $telephone
];
echo "Info <br/>";
echo "name: ".$name."<br/>";
echo "age: ".$age.'<br/>';
echo "address: ".$address.'<br/>';
echo "telephone: ".$telephone.'<br/>';