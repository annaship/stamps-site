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
			<form action="my_form.php" method="post">

			<?php 
			include("my_arrays.php");
			?>

			Environment:
			<select name="environment">
			   <option value="">Select...</option>
			   <option value="air">air</option>
			   <option value="surface">surface</option>
			   <option value="water">water</option>
			</select>

			Section:
			<select name="section">
			   <option value="">Select...</option>
			   <option value="building">building</option>
			   <option value="source">nucleic acid sequence source</option>
			   <option value="vehicle">vehicle</option>
			</select>

			<!-- Which is your favorite movie?
			<input type="text" name="name1" maxlength="50"> -->

			Description:
			<select name="description">
			  <option value="">Select...</option>
			<?php 
				foreach($description_words as $word) {             
			  	echo "<option value=\"$word\">$word</option>\n";
				}
			?>
			</select>

			<input type="submit" name="formSubmit" value="Submit">
			</form>
    </div>
<?php
if($_POST['formSubmit'] == "Submit")
{
	// $varMovie = $_POST['name1'];
	$environment = $_POST['environment'];
	$section 		 = $_POST['section'];
	$description = $_POST['description'];
	
}

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);


// $a = 'http://query.yahooapis.com/v1/public/yql?q=SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col1%20%3D%20%22building%22&diagnostics=true';

// $a = 'http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col0%20like%20%22%25'.$environment.'%25%22&diagnostics=true';

// $a = 'http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col0%20like%20%22%25'.$environment.'%25%22%20and%20col1%20like%20%22%25'.$section.'%25%22&diagnostics=true';

$rest_query = 'http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col0%20like%20%22%25'.$environment.'%25%22%20and%20col1%20like%20%22%25'.$section.'%25%22%20and%20col5%20like%20%22%25'.$description.'%25%22&diagnostics=true';

// var_dump($rest_query);

$xml = simplexml_load_file($rest_query);

$results = $xml->results;

print("<p>Environment: ".$environment."<br/>
Section: ".$section."<br/>
Description: ".$description."</p>");

// print_r($results);

echo "<table id='res_table'>";
echo "<tr><th>environment</th> <th>section</th> <th>structured comment</th> <th>item</th> <th>units</th> <th>description</th> </tr>";
foreach ($results -> row as $row) {
	echo "<tr>";
	foreach ($row as $col_n => $col) {
		
		// echo "<p>START".$col_n;
		// print($col);
		echo "<td>$col</td>";
	}
	echo "</tr>";
}
echo "</table>";


// foreach ($results->Release as $r) {
//   echo '<p>';
//   echo '<a href="' . $r['url'] . '">' . $r['title'] . 
//     '</a> (' . $r['releaseYear'] . ') - ';  
//   echo '<a href="' . $r->Artist['url'] . '">' . $r->Artist['name'] . 
//     '</a> <br/>'; 
//   echo 'Current chart position: ' . $r->ItemInfo->ChartPosition['this'] . 
//     ' / Last chart position: ' . $r->ItemInfo->ChartPosition['last']; 
//   echo '</p>';
// }  
?>
</body>
</html>