<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css.css">
	<meta charset="utf-8">
	<title>B Table Data Ascending</title>
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>

<?php if($b_data_asc): ?>
	<h6>B TABLE ASCENDING</h6>
	<table>
		<tr>
			<th>No.</th>
			<th>Data</th>
		</tr>
		<?php 
		for($i=0;$i<count($b_data_asc);$i++){
			echo '<tr><td>'.($i+1).'</td>';
			echo '<td>'.$b_data_asc[$i]['data'].'</td></tr>';
		}
		?>



	</table>
<?php endif; ?>


</body>
</html>