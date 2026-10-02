<?php
include "db.php";
session_start();
if ($_SERVER['REQUEST_METHOD']==="POST") {
    $id=$_POST['id'];
    $sql=$conn->prepare("delete from empdata where id=?");
    $sql->bind_param('i',$id);
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
        <input type="number" name="id" id="">
        <button type="submit">submit</button>
    </form>
</body>
</html>