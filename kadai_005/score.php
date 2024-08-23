<!DOTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $numbers=[80,60,55,40,100,25,80,95,30,60];
    $sum=array_sum($numbers);
    $count=count($numbers);
    $average=$sum / $count;
    echo $average;
    ?>
</body>
