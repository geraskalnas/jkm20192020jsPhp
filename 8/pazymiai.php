<!DOCTYPE HTML>
<html>
<head></head>
<body>
<?php
$serveris = "127.0.0.1";
$vardas = "PG4339LA";
$slaptazodis = "jkm_PG4339LA";
$dbaze = "PG4339LA";

$conn = new mysqli($serveris, $vardas, $slaptazodis, $dbaze);
if ($conn->connect_error) {
    die("Prisijungimo klaida: " . $conn->connect_error);
}

$sql="SELECT * FROM studentai WHERE id=" . $_GET["id"] . ";";
$result = $conn->query($sql);
if ($result->num_rows > 0) {// output data of each row
	echo "<table>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>vardas</th>";
	echo "<th>pavarde</th>";
	echo "<th>gimimo metai</th>";
	//foreach(array_keys($result) as $key){
    //	/echo "<th>$key</th>";
	//}
	echo "</tr>";
	
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		foreach($row as $val){
			echo "<td>$val</td>";
		}
		echo "</tr>";
	}
}
else {
	echo "0 results";
}
echo "</table>";





$sql="SELECT pazymys, data FROM pazymiai WHERE id=" . $_GET["id"] . " ORDER BY data;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {// output data of each row
	echo "<table>";
	echo "<tr>";
	echo "<th>pazymys</th>";
	echo "<th>data</th>";
	echo "</tr>";
	
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		foreach($row as $val){
			echo "<td>$val</td>";
		}
		echo "</tr>";
	}
}
else {
	echo "0 results";
}
echo "</table>";

$conn->close();
?>
</body>
</html>