<!DOCTYPE html>
<html>
<head>
	<title>Статьи></title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<?php  
			$dataBase = [[
				"title" => "Статья 1",
				"short_text" => "lorem",
				"img" => "img/1.jpg",
				"users" => "user12"
						],[
				"title" => "Статья 2",
				"short_text" => "lorem",
				"img" => "img/2.jpg",
				"users" => "user30"
						],[
				"title" => "Статья 3",
				"short_text" => "lorem",
				"img" => "img/3.jpg",
				"users" => "user50"				
						],[
				"title" => "Статья 4",
				"short_text" => "lorem",
				"img" => "img/4.jpg",
				"users" => "user90"	
						],[
				"title" => "Статья 5",
				"short_text" => "lorem",
				"img" => "img/5.jpg",
				"users" => "user25"	
						]	
			]
		 ?>	
<div class="col-7 mx-auto" style="margin-top: 10px; background-color: white;">
		<h1 class="text-left">Подробнее</h1>  <!-- 1. должны вывести то что вводится в первый инпут на сайте page.php -->	
		<hr>
		<div class="col-12" style="">  <!-- 3. Добавлят кнопку Далее  -->
									   <!-- 3. Добавлят кнопку Далее  -->
			<?php 
				
					# code...
					echo "<h1 style='background-color: green'>".$dataBase[0]["title"]."</h1>";
					echo "<p>".$dataBase[0]["short_text"]."</p>";
					echo "<img class='w-50' src='". $dataBase[0]["img"] ."'>";
					echo "<p> Автор: ".$dataBase[0]["users"]."</p>"

			 ?>

			 
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
	</div>
</body>
</html>