<?php
include "db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $id=$_POST['id'];
    $name=$_POST['name'];

    $sql=$conn->prepare('update empdata set name=? where id=?');
    $sql->bind_param('si',$name,$id);
    if ($sql->execute()) {
        header("location:home.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        id:
        <input type="number" name="id" id=""><br>
        name:
        <input type="text" name="name" id=""><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>