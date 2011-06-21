<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);


$a = 'http://query.yahooapis.com/v1/public/yql?q=SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col1%20%3D%20%22building%22&diagnostics=true';

$xml = simplexml_load_file($a);

echo "URRRRA";

// print_r($xml);



// iterate over query result set
echo '<h2>My data</h2>';
$results = $xml->results;

// print_r($results);

foreach ($results -> row as $row) {
	echo "<p>START";
	print_r($row);
	foreach ($row as $col_n => $col) {
		
		echo "<p>START".$col_n;
		print($col);
		echo "<tr><th>environment</th> <th>section</th> <th>structured comment</th> <th>item</th> <th>units</th> <th>description</th> </tr>";
		echo "<tr><td>environment</td> <td>section</td> <td>structured comment</td> <td>item</td> <td>units</td> <td>description</td> </tr>";

	}
}


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
