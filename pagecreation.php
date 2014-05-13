<!doctype html>

	<head>
		<meta charset="utf-8">
		<title>Site Name - Page Creation</title>
		<meta name="description" content="Page used to generate other pages">
		<meta name="keywords" content="">
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

<body>

<!-- obviously needs some styling... -->

	<form action="writepage.php" method="post">

		ID: <input type="text" name="id">

		Title: <input type="text" name="title">

		Description: <input type="text" name="description">

		Keywords: <input type="text" name="keywords">

		Body: <textarea type="text" name="body"></textarea>

		Parent: <input type="text" name="parent">

		Key: <input type="text" name="key">

		<input type="submit">

	</form>

</body>
</html>