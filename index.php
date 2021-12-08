<?php 

$books = array( array("С, Кинг", "Жребий" , 477),
                  array("А. Атеев", "Карты люцифера" , 451),
                  array("Э. Райс", "Интервью с вампиром" , 445),
                  array("Г. Лавкрафт", "Дагон" , 9) 
                );
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lb4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
Тест 1:
<?php
echo "Hello, World!<br>"
?>
Тест 2:
<?php echo 2+2 ?>

<table class="table">
	<tr>
    	<th>Авторы</th>
    	<th>Название</th>
    	<th>Страницы</th>
   </tr>
   <?php 
   foreach ($books as &$book) {
    echo "<tr><td>". $book[0] . "</td><td>" . $book[1] . "</td><td>" . $book[2] . "</td></tr>";
	};
   
    ?>
</table>



</body>