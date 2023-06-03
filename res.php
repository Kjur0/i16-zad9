<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="styles.css" rel="stylesheet">
	<title>Wyniki</title>
	<meta name="author" value="Krzysztof Jurkowski">
	<?php
	$p = 0;
	?>
</head>

<body>
	<h1>Rozwiązanie testu z historii</h1>
	<ol>
		<li>
			Jak miał na imię pierwszy król Polski?<br>
			Prawidłowa odpowiedź: Bolesław I Chrobry<br>
			Ty wpisałeś: <?php
							echo $_POST['1'];
							if ($_POST['1'] == "Bolesław I Chrobry") {
								$p += 1;
							}
							?>
		</li>
		<li>
			Które z wymienionych miast było pierwszą stolicą Polski?<br>
			Prawidłowa odpowiedź: Gniezno<br>
			Ty wybrałeś: <?php
							switch ($_POST['2']) {
								case 'a':
									echo "Gniezno";
									$p += 1;
									break;
								case 'b':
									echo "Kraków";
									break;
								case 'c':
									echo "Warszawa";
									break;
							}
							?>
		</li>
		<li>
			Które z wymienionych osób były królami Polski?<br>
			Prawidłowa odpowiedź: <ul>
				<li>Jadwiga Andegaweńska</li>
				<li>Łokietek</li>
			</ul>
			Ty wybrałeś: <ul><?php
								foreach ($_POST['3'] as $value) {
									switch ($value) {
										case 'a':
											echo "<li>Mieszko I</li>";
											break;
										case 'b':
											echo "<li>Jadwiga Andegaweńska</li>";
											break;
										case 'c':
											echo "<li>Łokietek</li>";
											break;
									}
								}
								if (in_array('b', $_POST['3']) && in_array('c', $_POST['3'])) {
									$p += 1;
								}
								?></ul>
		</li>
		<li>
			Jakiego państwa księciem był Jagieło, zanim objął tron Polski?<br>
			Prawidłowa odpowiedź: Litwy<br>
			Ty wybrałeś: <?php
							switch ($_POST['4']) {
								case 'a':
									echo "Litwy";
									$p += 1;
									break;
								case 'b':
									echo "Węgier";
									break;
								case 'c':
									echo "Prus";
									break;
							}
							?>
		</li>
	</ol>
	Uzyskano <?php echo $p; ?>/4 punktów.
</body>

</html>