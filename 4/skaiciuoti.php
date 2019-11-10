<DOCTYPE HTML>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
	<body>
		<?php
		function teorema($a, $b){
			return sqrt(($a*$a)+($b*$b));
		}

		$a=$_GET["a"];
		$b=$_GET["b"];

		$plotas=$a*$b;
		$perimetras=($a+$b)*2;
		$izambine=teorema($a, $b);
		?>
		<table>
		  <tr>
			<th>a</th>
			<th>b</th>
			<th>plotas</th>
			<th>perimetras</th>
			<th>izambine</th>
		  </tr>
		  <tr>
			<td><?php echo $a; ?></td>
			<td><?php echo $b; ?></td>
			<td><?php echo $perimetras; ?></td>
			<td><?php echo $plotas; ?></td>
			<td><?php echo $izambine; ?></td>
		  </tr>
		</table> 
	</body>
</html>