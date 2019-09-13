<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="iconfinder_Female_132766.png" type="image/png">
	<title>Мои заказы</title>

	<style type="text/css">
		
		p.sad {
			font-size: 30px;
			font-weight: bold;
			font-family: 'Arial';
		}

		.look_more { /*стили для кнопки узнать больше*/ 
			display: block;
			text-align: center;
			text-decoration: none;
			border: 1px solid #FF823A;
			color: white;
			font-size: 15px;
			padding: 5px 10px;
			transition: all 0.5s;
			background-color: #FF823A;
			margin: 0 1%;
		}

		.look_more:hover{ /*стили для ховера кнопки узнать больше*/ 
			border: 1px solid pink;
			padding: 10px 30px;
			cursor: pointer;
			background-color: #FF5D00;
			color: white;
		}

	</style>
</head>
<body>

<?php
	require_once 'connection.php'; // подключаем скрипт
	$link = mysqli_connect($host, 'root', '', 'skillbox')
	or die("ошибка 1" . mysqli_error($link)); //передача параметров подключения	
	$query ="SELECT * FROM callbacks GROUP BY id DESC"; //задание запроса
	$result = mysqli_query($link, $query) or die("ошибка 2" . mysqli_error($link)); //передача запроса в переменную

	echo "<div style='dispaly; flex; flex-flow: row nowrap; justify-content: flex-start; align-items: flex-start;'>";
	echo "<form action='remove.php' method='get'>";
	echo "<input type='submit' name='Remove' value='Удалить заказ'>";
	echo "</form>";
	echo "<div style='height:80%; overflow:auto; background-color:#fff; width: 50%;'>";

	if($result) //если есть результат то выводим полученное значение
	{
		echo "<ul style='margin:0px; padding:0px;'>";
    	while ($row = mysqli_fetch_assoc($result))
    	{        
			echo "<li style='background-color:#E0FFFF; margin: 10px; padding:10px; box-shadow: 0 0 5px black; border-radius:5px; list-style-type: none;'>";
			echo "От кого: " . $row['name'] . "<br>"; 
			echo "Его контакты: " . "<br>";
			echo "<p style='margin-left: 10px; '>Номер телефона: " . $row['phone'] . "</p>";
			//echo "<p style='margin-left: 10px;'>E-mail: " . $row['phone'] . "</p>";
			echo "Время поступления заказа: " . $row['time'];  
			echo "</li>";
    	}
    	// очищаем результат
    	mysqli_free_result($result);
		echo "</ul>";
		mysqli_close($link);
	}

	else {
		echo "<p class='sad'>Заказов пока нет :( :( :(</p>";
	}

	echo "</div>";
	echo "</div>";
?>

</body>
</html>