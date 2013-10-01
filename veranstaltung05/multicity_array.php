

<?php
$multiCity = array(
		array('City', 'Country', 'Continent'),
		array('Tokyo', 'Japan', 'Asia'),
		array('Mexico City','Mexico', 'North America'),
		array('New York City', 'USA', 'North America'),
		array('Mumbai', 'India', 'Asia'),
		array('Seoul', 'Korea', 'Asia'),
		array('Shanghai', 'China', 'Asia'),
		array('Lagos', 'Nigeria', 'Africa'),
		array('Buenos Aires', 'Argentina', 'South America'),
		array('Cairo', 'Egypt', 'Africa'),
		array('London', 'UK','Europe')
);

?>
<html>
<head>
<title>Multi-dimensional Array</title>
<style type="text/css">
td,th {
	width: 8em;
	border: 1px solid black;
	padding-left: 4px;
}

th {
	text-align: center;
}

table {
	border-collapse: collapse;
	border: 1px solid black;
}
</style>
</head>
<body>
	<h2>
		Auflistung Array<br />
	</h2>
	<table>
		<?php
		echo '<tr>';
		foreach (array_keys($multiCity[0]) as $key) {
			echo '<th>'.$multiCity[0][$key].'</th>'	;
		}
		echo '</tr>';
			
		for ($i = 1; $i < count($multiCity); $i++) {
			echo '<tr>';
			foreach (array_keys($multiCity[$i]) as $key) {
				echo '<td>'.$multiCity[$i][$key].'</td>'	;
			}
			echo '</tr>';
		}
		?>
	</table>

	<h2>
		Auflistung der St&auml;dte in Asien<br />
		<ul>
			<?php 
			for ($i = 1; $i < count($multiCity); $i++) {
				if (in_array('Asia', $multiCity[$i])) {
					echo '<li>'.$multiCity[$i][0].'</li>'	;
				}
			}
			?>
		</ul>
	</h2>

	<h2>
		Auflistung der Kontinente, sowie die Zahl der L&auml;nder darin (im
		Array)<br />
		<ul>
			<?php 
			// count countries
			$numArray = array();
			for ($i = 1; $i < count($multiCity); $i++) {
				$continent = $multiCity[$i][2];
				$number = 0;
				if (key_exists($continent, $numArray)) {
					$number = $numArray[$continent];
				}
				$numArray[$continent] = $number + 1;
			}
			
			foreach ($numArray as $continent => $number) {
				echo '<li>'.$continent.': '.$number.'</li>';				
			}
			
			?>
		</ul>
		
	</h2>
	<h2>Auflistung nach L&auml;nder A-Z <br /></h2>
		<?php 
			for ($i = 1; $i < count($multiCity); $i++) {
				if (in_array('Asia', $multiCity[$i])) {
					echo '<li>'.$multiCity[$i][0].'</li>'	;
				}
			}
		?>
	

</body>
</html>
