<?php
error_reporting(E_ALL ^ E_WARNING);

$num1 = $_POST['num1'];
isset($num1);
$num2 = $_POST['num2'];
isset($num2);

$operators = $_POST['op'];


if($operators == 'add'){
    $result = $num1 + $num2;
}
if($operators == 'sub'){
    $result = $num1 - $num2;
}
if($operators == 'multiply'){
    $result = $num1 * $num2;
}
if($operators == 'divide'){
    $result = $num1 / $num2;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator-container">
        <h2>PHP CALCULATOR</h2>
        <form action="#" method="POST">
            <input type="text" name="num1" class="form-control" placeholder="Enter Number" required>
            <input type="text" name="num2" class="form-control" placeholder="Enter Number" required>
            <select name="op"  class="form-control" > 
            <option value="add">ADD</option>
                <option value="sub">SUBTRACT</option>
                <option value="multiply">MULTIPLY</option>
                <option value="divide">DIVIDE</option>
            </select>
            <button type="submit" class="btn btn-submit btn-block">SUBMIT</button>
        </form>
        <?php  echo "<span style='color
        : white'>You'r result is  $result </span>" ; ?>
    </div>
</body>
</html>