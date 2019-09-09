<?php
session_start();
require "Student.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Table</title>
    <style>
        table {
            border: solid black 1px;
        }
        td {
            border: solid black 1px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>name</td>
        <td>age</td>
        <td>address</td>
        <td>telephone</td>
    </tr>
    <tr>
        <th><?php echo $_SESSION["student"]["name"];?></th>
        <th><?php echo $_SESSION["student"]["age"];?></th>
        <th><?php echo $_SESSION["student"]["address"];?></th>
        <th><?php echo $_SESSION["student"]["telephone"];?></th>
    </tr>
</table>
</body>
</html>
