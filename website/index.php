<!DOCTYPE html>
<html>
<head>
	<title>My shop</title>
</head>
<body>
	<h1>Welcome to kade</h1>
	<ul>
		<?php
			$json = file_get_contents('http://app-lb');
			$obj = json_decode($json);

			$products = $obj->products;
			foreach ($products as $product) {
				# code...
				echo "<li> $product</li>";
			}
			?>
	</ul>
</body>
</html>