<!DOCTYPE html>
<html>
<head>
	<title>Conversor de .xlsx para .csv</title>
</head>
<body>
	<h1>Conversor de Excel.xlsx  para csv</h1>

	<form method="post" action="converter.php" enctype="multipart/form-data">
		<label for="excel">Selecione um arquivo Excel:</label><br>
		<input type="file" id="excel" name="excel"><br><br>

		<input type="submit" value="Converter">
	</form>
</body>
</html>