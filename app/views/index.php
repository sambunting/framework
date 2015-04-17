<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="">

		{% include 'templates/header.php' %}		
		
		<p>{{ title }} - {{ answer }}</p>

		{% include 'templates/footer.php' %}
	</body>
</html>

