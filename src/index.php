<html lang="en">
	<head>
		<title>Hello world page</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	</head>
	<body>
		
		<div class="container">
		<h1 class="text-center">Таблица пользователей данного продукта</h1>
		<table class="table table-bordered">
			<tr class="text-center"><th>Id</th><th>Name</th><th>Surname</th></tr>
			<?php

                $mysqli = new mysqli("db", "user", "password", "appDB");

                $sql = 'SELECT * FROM users';

                $result = $mysqli->query($sql);
                
                foreach ($result as $row) {
                    echo "<tr class='text-center'><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
                }

			?>
		</table>
		</div>
		<?php
			phpinfo();
		?>
	</body>
</html>
