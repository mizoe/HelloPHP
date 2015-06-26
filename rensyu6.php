<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無題ドキュメント</title>
</head>

<body>
<?php

$thColor = "#E1E1BC";
$tdColor = "#E7E7E7";
$fontColor = "red";

$popAomori = 1407;
$popIwate  = 1364;
$popAkita  = 1121;

$maleAomori = 663;
$maleIwate  = 652;
$maleAkita  = 527;

$femaleAomori = 744;
$femaleIwate  = 712;
$femaleAkita  = 593;
?>

<table border="1">
  <tr style="background-color:<?php echo $thColor; ?>">
    <th rowspan=2 scope="col">県名</th>
    <th rowspan=2 scope="col">総人口（千人）</th>
    <th rowspan=2 scope="col">男性（千人）</th>
    <th rowspan=2 scope="col">女性（千人）</th>
    <th colspan=2 scope="col">男女比</th>
  </tr>
  <tr style="background-color:<?php echo $thColor; ?>">
    <td>男性</td>
    <td>女性</td>
  </tr>
  <tr style="background-color:<?php echo $tdColor; ?>">
    <td>青森県</td>
    <td><?php echo $popAomori;   ?></td>
    <td><?php echo $maleAomori;  ?></td>
    <td><?php echo $femaleAomori;?></td>
    <td><?php printf("%.1f",$maleAomori / $popAomori * 100);?>%</td>
    <td style="color:<?php echo $fontColor;?>">
	<?php printf("%.1f",$femaleAomori / $popAomori * 100);?>%</td>
  </tr>
  <tr style="background-color:<?php echo $tdColor; ?>">
    <td>岩手県</td>
    <td><?php echo $popIwate;   ?></td>
    <td><?php echo $maleIwate;  ?></td>
    <td><?php echo $femaleIwate;?></td>
    <td style="color:<?php echo $fontColor;?>"><?php printf("%.1f",$maleIwate / $popIwate * 100);?>%</td>
    <td>
	<?php printf("%.1f",$femaleIwate / $popIwate * 100);?>%</td>
  </tr>
  <tr style="background-color:<?php echo $tdColor; ?>">
    <td>秋田県</td>
    <td><?php echo $popAkita;   ?></td>
    <td><?php echo $maleAkita;  ?></td>
    <td><?php echo $femaleAkita;?></td>
    <td><?php printf("%.1f",$maleAkita / $popAkita * 100);?>%</td>
    <td style="color:<?php echo $fontColor;?>">
	<?php printf("%.1f",$femaleAkita / $popAkita * 100);?>%</td>
  </tr>

</table>



</body>
</html>