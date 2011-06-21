<?php 
include("my_arrays.php");

function create_names($entry) {
	$words = preg_split("/[\s]+/", $entry);
	return $words;
}

function SearchArray($array, $search) {
  $result = "";
  // print_r($array);
  foreach($array as $item) {
		// echo "HERE ".$search."<p/>";
    if (preg_match("|{$search}|i", $item)) {
        $result = $item;
				// echo "result =  ".$result."<p/>";
    }
  }
  return $result;
}


// function split_names() {
// 	global $name_links;
// 	$splitted_names = array();
// 		foreach (array_keys($name_links) as name_link) {
// 			
// 		}
// 		
// 		// $splitted_names += preg_split("/[\s]+/", $full_name);
// 	// print_r($splitted_names);
// 	
// 	return $splitted_names;
// }



function add_link($entry) {
	global $name_links;
	$words = create_names($entry);
	$word  = "";
	$link  = "";
	$new_entry = "";
	// print_r($words);
	// Array ( [0] => [1] => ) Array ( [0] => 08/03/11 )
	// Array ( [0] => Silva [1] => Prüße ) 

	// print_r($col);
	// SimpleXMLElement Object ( [0] => ) SimpleXMLElement Object ( [0] => 08/03/11 ) SimpleXMLElement Object ( [0] => Silva Prüße )
	
	foreach ($words as $word) {
		// echo "URA ".$word."<p/>";
		$full_name = SearchArray(array_keys($name_links), $word);
		if ($full_name) {
			// echo "full_name _".$full_name."_<p/>";
			$link = $name_links[$full_name];	
			$new_entry .= $link." ";
		}
		else {
			$new_entry .= $word." ";	
		}
	}
	echo "new_entry ".$new_entry."<p/>";
	// URA http://jbpc.mbl.edu/labs-msogin.html

	// foreach ($words as $word) {
	// 	// echo "URA ".$word."<p/>";
	// 	
	// }
	// // echo "END"; 
	// URA Intro
	// URA Sogin
	// 
	// END
}

// $keywords = preg_split("/[\s,]+/", "hypertext language, programming");


?>