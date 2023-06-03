<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="styles.css" rel="stylesheet">
	<title>TEST</title>
	<meta name="author" value="Krzysztof Jurkowski">
</head>

<body>
	<h1>Test z historii</h1>
	<form method="post" action="res.php">
		<ol>
			<li>
				<label for="1">Jak miał na imię pierwszy król Polski?</label><br>
				<input type="text" id="1" name="1" required>
			</li>
			<li>
				<label for="2">Które z wymienionych miast było pierwszą stolicą Polski?</label><br>
				<input type="radio" name="2" id="2a" value="a" required><label for="2a">Gniezno</label><br>
				<input type="radio" name="2" id="2b" value="b" required><label for="2b">Kraków</label><br>
				<input type="radio" name="2" id="2c" value="c" required><label for="2c">Warszawa</label>
			</li>
			<li>
				<label for="3">Które z wymienionych osób były królami Polski?</label><br>
				<input type="checkbox" name="3[]" id="3a" value="a"><label for="3a">Mieszko I</label><br>
				<input type="checkbox" name="3[]" id="3b" value="b"><label for="3b">Jadwiga Andegaweńska</label><br>
				<input type="checkbox" name="3[]" id="3c" value="c"><label for="3c">Łokietek</label>
			</li>
			<li>
				<label for="4">Jakiego państwa księciem był Jagieło, zanim objął tron Polski?</label><br>
				<select name="4" id="4" required>
					<option></option>
					<option value="a">Litwy</option>
					<option value="b">Węgier</option>
					<option value="c">Prus</option>
				</select>
			</li>
		</ol>
		<input type="submit" value="Sprawdź odpowiedzi">
	</form>
</body>

</html>