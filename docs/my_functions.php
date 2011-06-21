<?php 
include("my_arrays.php");

function search_array($array, $search) {
  $result = "";
  foreach($array as $item) {
    if (preg_match("|{$search}|i", $item)) {
        $result = $item;
				// echo "result =  ".$result."<p/>";
    }
  }
  return $result;
}

function add_link($entry) {
	global $name_links;
	$words = preg_split("/[\s]+/", $entry);
	$word  = "";
	$link  = "";
	$new_entry = "";

	foreach ($words as $word) {
		// echo "URA ".$word."<p/>";
		$full_name = search_array(array_keys($name_links), $word);
		if ($full_name) {
			// echo "full_name _".$full_name."_<p/>";
			$link = $name_links[$full_name];	
			$new_entry .= "<a href=\"".$link."\">".$word."</a>";
		}
		else {
			$new_entry .= $word." ";	
		}
	}
	return $new_entry;
}


?>