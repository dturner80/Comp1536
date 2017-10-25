<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Toon World</title> 
    <meta charset="utf-8"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head> 
<body> 
<dir class="container">
<h2>Toon World</h2>
<table class="table table-striped">
<?php
$cols = 0;
foreach (glob("./images/*.png") as $filename) {
	$data = file_get_contents($filename . ".txt"); 
	$NameAndGenger = explode(",", $data);
	
	if ($cols==0)
	{
		echo "<tr>";
	}
	echo "<td style='text-align: center'>";
	echo "<img src='$filename' alt='$NameAndGenger[0]' /><br />\n";
	echo "<p style='font-weight: bold;'>$NameAndGenger[0]</p>\n";
	echo "<p style='font-style: italic;'>$NameAndGenger[1]</p>\n";
	echo "</td>";

	$cols++;
	if ($cols > 2) {
		$cols = 0;
		echo "</tr>";
	}
}

?>
</table>
</dir>
</body> 
</html>