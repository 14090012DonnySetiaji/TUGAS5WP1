<html>
<head>
<title>Array : Intersect</title>
</head>
<body>
<h1>Array : Intersect</h1>
<?php
$ar_a=array(1,2,5,7,8);
print("Isi Array \$ar_a <br>");
print_r($ar_a);
print("<br>");
$ar_b=array("abc",5,7,90);
print("Isi Array \$ar_b<br>");
print_r($ar_b);
print("<br>");
$irisan=array_intersect($ar_a, $ar_b);
print("Isi Array \$irisan <br>");
print_r($irisan);
print("<br>");
?>
</body>
</html>