<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css.css">
	<meta charset="utf-8">
	<title>A, B, C Tables Data</title>
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>

<?php if($abc_data): ?>
	<h6>A, B, C TABLES</h6>
	<table>
		<tr>
			<th>No.</th>
			<th>Data</th>
			<th>From</th>
		</tr>
		<?php 
		for($i=0;$i<count($abc_data);$i++){
			echo '<tr><td>'.($i+1).'</td>';
			echo '<td>'.$abc_data[$i]['data'].'</td>';
			echo '<td>'.$abc_data[$i]['tn'].'</td></tr>';
		}
		?>



	</table>
<?php endif; ?>


</body>
</html>