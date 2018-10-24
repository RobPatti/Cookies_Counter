<!DOCTYPE html>
<head>
 <title>Roberto Patti</title>
 <link href="index.css" rel="stylesheet" type="text/css">
</head>
<?php
$val=0;
setcookie('Cookie', $val, time() + (86400 * 7), "/"); // 86400 = 1 giorno

?>
<html>
<body  bgcolor="black">
<div class="center-div">
<?php


if(!isset($_COOKIE['Cookie'])) {
    {
	echo "Primo accesso dell'utente!";
	$val++;
	}
} else {
	$val= ++ $_COOKIE['Cookie'];
	setcookie('Cookie',$val);
    echo "Cookie  'Cookie'  is set!<br>";
    echo "Numero degli accessi: " . $_COOKIE['Cookie'];
}
?>
</div>

</body>
</html>