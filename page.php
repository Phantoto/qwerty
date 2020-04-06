<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">
		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div>
		<?php  
			$dataBase = [
				[
					"title" => "Статья 1",
					"short_text" => "lorem",
					"img" => "img/1.jpg",
					"users" => "user12",
					"url"=>"blog1.php"			
				],[
					"title" => "Статья 2",
					"short_text" => "lorem",
					"img" => "img/2.jpg",
					"users" => "user30",
					"url"=>"blog2.php"				
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
	</div>

	<div class="col-7 mx-auto" style="margin-top: 10px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1> 
			<?php 
				echo "<h1> Привет! ".$_GET["login"]."</h1>"
			 ?>
		
		<hr>
		<div class="col-12" style=""> 

			<?php 
				for ($i=0; $i < 5 ; $i++) { 
					echo "<h1 style='background-color: green; margin-top: 10px'>".$dataBase[$i]["title"]."</h1>";
					echo "<p>".$dataBase[$i]["short_text"]."</p>";
					echo "<img class='w-100' src='". $dataBase[$i]["img"] ."'>";
					echo "<p> Автор: ".$dataBase[$i]["users"]."</p>";
					echo "<a href='" .$dataBase[$i]["url"]. "'>далее</a></button>"; 
			
				}

			 ?>

		</div>
	</div>
</body>
</html>