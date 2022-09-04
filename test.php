<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

try {
	$conn = new PDO("mysql:host=$servername;dbname=test1", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	die();
}
  

$obj = $_POST;

if(array_key_exists("type", $obj) && $obj['type']=="insert" && count($obj)==4 && strlen($obj['data']>0)){
	$data = htmlspecialchars($obj['data']);
	if($obj['table']=="A"){
		$query = $conn->prepare('INSERT INTO a SET data = :data');
		$result = $query->execute([
			'data' => $data
		]);
		if ($result) {
			echo 'Insertion is Completed on Table A';
		} else {
			echo 'Something Went Wrong. .';
		}
	}elseif ($obj['table']=="B") {
		if(intval($data)!=0 || $data==0){
			$query = $conn->prepare('INSERT INTO b SET data = :data');
			$result = $query->execute([
				'data' => $data
			]);
			if ($result) {
				echo 'Insertion is Completed on Table B';
			} else {
				echo 'Something Went Wrong. .';
			}
		}else{
			print("Value is not Numeric!");
		}
	}elseif ($obj['table']=="C") {
		$query = $conn->prepare('INSERT INTO c SET data = :data');
		$result = $query->execute([
			'data' => $data
		]);
		if ($result) {
			echo 'Insertion is Completed on Table C';
		} else {
			echo 'Something Went Wrong. .';
		}
	}else{
		echo 'Something Went Wrong. .';
	}
	header("refresh:2;URL=index.html");

}
elseif(array_key_exists("type", $obj) && $obj['type']=="select" && count($obj)==2){
	switch ($obj['button']) {
		case '1':
			$query = $conn->prepare("SELECT data FROM a");
			$query->execute();
			$a_data=$query->fetchAll(PDO::FETCH_ASSOC);
			if($a_data){
				require_once 'atable.php';
			}else{
				echo "Table is Empty..";
				header("refresh:2;URL=index.html");
			}
			break;
		case '2':
			$query = $conn->prepare("SELECT data,'A' AS tn FROM a
									UNION
									SELECT data,'B' AS tn FROM b
									UNION
									SELECT data,'C' AS tn FROM c");
			$query->execute();
			$abc_data=$query->fetchAll(PDO::FETCH_ASSOC);
			if($abc_data){
				require_once 'abc_table.php';
			}else{
				echo "Table is Empty..";
				header("refresh:2;URL=index.html");
			}
		case '3':
			$query = $conn->prepare("SELECT data,'C' AS tn FROM c
									UNION
									SELECT data,'B' AS tn FROM b");
			$query->execute();
			$cb_data=$query->fetchAll(PDO::FETCH_ASSOC);
			if($cb_data){
				require_once 'cb_table.php';
			}else{
				echo "Table is Empty..";
				header("refresh:2;URL=index.html");
			}
		case '4':
			$query = $conn->prepare("SELECT data FROM b ORDER BY data ASC");
			$query->execute();
			$b_data_asc=$query->fetchAll(PDO::FETCH_ASSOC);
			if($b_data_asc){
				require_once 'b_table_asc.php';
			}else{
				echo "Table is Empty..";
				header("refresh:2;URL=index.html");
			}
			break;
		case '5':
			$query = $conn->prepare("SELECT data FROM b ORDER BY data DESC");
			$query->execute();
			$b_data_desc=$query->fetchAll(PDO::FETCH_ASSOC);
			if($b_data_desc){
				require_once 'b_table_desc.php';
			}else{
				echo "Table is Empty..";
				header("refresh:2;URL=index.html");
			}
			break;
		default:
			# code...
			echo 'Something Went Wrong. .';
			header("refresh:2;URL=index.html");
	}
			
}
else{
	if(strlen($obj['data'])==0){
		echo 'Input Field Cannot be Empty. .';
		header("refresh:2;URL=index.html");
	}else{
		echo 'Something Went Too Wrong. .';
		header("refresh:2;URL=index.html");
	}
}

?>