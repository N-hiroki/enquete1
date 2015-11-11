<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>output_data</title>
</head>
<body>
<?php


$fp = fopen("data/data.csv", "r");       //ファイルを開く  r＝読み込み
flock($fp, LOCK_SH);                      //ファイルロック　リードするだけなのでLOCK_SH
?>

<div class="container" style="padding:20px 0">
       <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr><th>Question</th><th>Answer</th></tr>
            </thead>
            <tbody>
<?php
while ($array = fgetcsv( $fp )) {
  $num = count($array);
  for($i=0;$i<$num;$i++){?>
      <tr><td>Q<?php echo $i + 1; ?>
      </td><td><?php echo $array[$i]; ?>
      </td></tr>
      <?php
  }
}
?>
</tbody></table></div>

<?php


flock($fp, LOCK_UN);                      //ロック解除
fclose($fp);                              //ファイルを閉じる

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>