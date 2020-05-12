<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Nhap so dong</label>
    <input type="text" name="row">
    <br>
    <button>print</button>
</form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $row = $_POST["row"];
    $arr = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $row; $j++) {
            $arr[$i][$j] = rand(1, 99);
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    $sum = 0;
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $row; $j++) {
           if($i==$j){
              $sum+=$arr[$i][$j];
           }
        }
    }
    echo "<br> tong duong cheo la : ".$sum;

}


?>
</html>

