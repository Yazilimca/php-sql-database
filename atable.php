<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css.css">
	<meta charset="utf-8">
	<title>A Table Data</title>
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>

<?php if($a_data): ?>
	<h6>A TABLE</h6>
	<table>
		<tr>
			<th>No.</th>
			<th>Data</th>
		</tr>
		<?php 
		for($i=0;$i<count($a_data);$i++){
			echo '<tr><td>'.($i+1).'</td>';
			echo '<td>'.$a_data[$i]['data'].'</td></tr>';
		}
		?>



	</table>
<?php endif; ?>


</body>
</html>