<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            height: 200px;;
            width:500px;
            background-color: #fabf;
        }
    </style>
</head>
<body>
    <h1>Sachin Yadav</h1>
    <div class="container">

    </div>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("failed to connect".mysqli_connect_error());
}
else{
    echo "connection successful";
}



?>
</html>