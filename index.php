<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partite Basket</title>
</head>
<body>
  <?php 
  $matches = [
    [
      'team1' => 'Lakers',
      'team2' => 'Chicago Bulls',
      'point_team1' => 102,
      'point_team2' => 60
    ],
    [
      'team1' => 'Boston Celtic',
      'team2' => 'Brooklyn Nets',
      'point_team1' => 90,
      'point_team2' => 80
    ],
  ];
  
  ?>

<ul>
  <?php  foreach ($matches as $match) { ?>
      <li> <?php echo $match['team1'] ?>-<?php echo $match['team2'] ?> | <?php echo $match['point_team1'] ?>-<?php echo $match['point_team2'] ?></li>
  <?php } ?>

</ul>
</body>
</html>