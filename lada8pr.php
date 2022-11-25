<?php
if(isset($_POST['nums']))
{

	$arr = array(explode(' ', $_POST['values']),
	explode(' ', $_POST['values1']),
	explode(' ', $_POST['values2']));
	for($i = 0; $i < count($arr); $i++)
	{
		$sum += $arr[$i][$i];
	}
	echo "Сумма главных цифр диагонали: ".$sum."</br>";
	print_r($arr);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
	<p>Введите значения массива</p>
	<input name="values" type="text">
	<input name="values1" type="text">
	<input name="values2" type="text">
    <input type="submit" value="Отправить" name="nums" value="nums">
</form>
</body>
</html>