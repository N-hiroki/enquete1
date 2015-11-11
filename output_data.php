<!--課題７　データ表示-->
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>output_data</title>
</head>
<body>
<?php

$an_1 = $_GET["an_1"];
$an_2 = $_GET["an_2"];
$an_3 = $_GET["an_3"];
$an_4 = $_GET["an_4"];
$an_5 = $_GET["an_5"];
$an_6 = $_GET["an_6"];
$an_7 = $_GET["an_7"];
$an_8 = $_GET["an_8"];
$an_9 = $_GET["an_9"];
$str = $an_1.",".$an_2.",".$an_3.",".$an_4.",".$an_5.",".$an_6.",".$an_7.",".$an_8.",".$an_9."\n";

$file = fopen("data/data.csv", "a");
flock($file, LOCK_EX);
fputs($file, $str);
flock($file, LOCK_UN);
fclose($file);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
