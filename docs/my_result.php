<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<div id="page">

    <div id="headingSection">
    	<h1>Indoor air metadata</h1>
			<?php include("metadata_form.php")
			?>
    </div>
<?php

if (isset($_POST['formSubmit']) and $_POST['formSubmit'] == "Submit")
{
	$environment = $_POST['environment'];
	$section 		 = $_POST['section'];
	$description = $_POST['description'];
	
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	$rest_query = 'http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col0%20like%20%22%25'.$environment.'%25%22%20and%20col1%20like%20%22%25'.$section.'%25%22%20and%20col5%20like%20%22%25'.$description.'%25%22&diagnostics=true';

// var_dump($rest_query);

	$xml = simplexml_load_file($rest_query);

	$results = $xml->results;

	print("<p>Environment: ".$environment."<br/>
	Section: ".$section."<br/>
	Description: ".$description."</p>");

// print_r(sizeof($results.row));

	echo "<p>Total rows: ".count($results -> row)."</p>";

	echo "<table id='res_table'>";
	echo "<tr><th>environment</th> <th>section</th> <th>structured comment</th> <th>item</th> <th>units</th> <th>description</th> </tr>";
	foreach ($results -> row as $row) {
		echo "<tr>";
		foreach ($row as $col_n => $col) {
			echo "<td>$col</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

?>
</body>
</html>