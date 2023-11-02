<?php

$conn = mysqli_connect("localhost", "root", "", "wad_Project3") ;
$result = mysqli_query($conn, "SELECT * FROM students") ;

// var_dump(mysqli_fetch_object($result));
?>


<!-- <!DOCTYPE html>
<html lang=en>
    <head><title>Students</title></head>
        <body>
            <h1>Table Student</h1>
            <table border = "1" cellpadding = "10" cellspacing = "0">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Nim</th>
                    <th>Address</th>
                </tr>
        <body> -->