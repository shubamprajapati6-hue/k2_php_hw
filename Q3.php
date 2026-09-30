<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $fname=$_POST['fullname'];
    $phone=$_POST["phone"];
    $car=$_POST["car"];

    echo"hello,$fname your phone number is $phone and your preferred car brand is $car";

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
      fullName:
    <input type="text" name="fullname" id=""><br>
    phone:
    <input type="tel" name="phone" id=""><br>
    car:
    <select name="car" id="">
        <option value="toyota">toyota</option>
        <option value="ford">ford</option>
        <option value="tesla">tesla</option>
    </select><br>
    <button type="submit">submit</button>

  </form>
</body>
</html>