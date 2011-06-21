<?php
	include("beginning.php");
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	$rest_query = 'http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dEhUc3RDUi1FNm5GYTlIR3lraFI4Z1E%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22&diagnostics=true';

// var_dump($rest_query);

	$xml = simplexml_load_file($rest_query);

	$results = $xml->results;
	
	echo "<table id='res_table'>";
	// echo "<tr><th>environment</th> <th>section</th> <th>structured comment</th> <th>item</th> <th>units</th> <th>description</th> </tr>";
	foreach ($results -> row as $row) {
		echo "<tr>";
		foreach ($row as $col_n => $col) {
			$res = add_link($col);
			echo "<td>$col</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
// }

	include("end.php");

?>