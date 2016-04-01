<html>
<head>
<title>Array : Diff</title>
</head>
<body>
<h1>Array : Diff</h1>
<?php
$ar_a=array(1,2,5,7,8);
print("Isi Array \$ar_a <br>");
print_r($ar_a);
print("<br>");
$ar_b=array("abc",5,7,90);
print("Isi Array \$ar_b<br>");
print_r($ar_b);
print("<br>");
$diff=array_diff($ar_a, $ar_b);
print("Isi Array \$diff <br>");
print_r($diff);
print("<br>");
?>
</body>
</html>