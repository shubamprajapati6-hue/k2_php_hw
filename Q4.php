<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $terms = isset($_GET['yes']) ? 'Accepted' : 'Not accepted';

    echo "Welcome,$username you have $terms to the terms and conditions.";
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
    <form action="" method="get">
        username:
        <input type="text" name="username" id=""><br><br>
        password:
        <input type="password" name="password" id=""><br><br>
        <input type="checkbox" name="yes" id="">terms and condition<br>
        <button type="submit">sumit</button>
    </form>
</body>
</html>