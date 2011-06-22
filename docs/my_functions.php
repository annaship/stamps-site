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

function build_link($words, $link, $my_class="") {
	return "<a class = \"".$my_class."\" target=\"_blank\" href=\"".$link."\">".$words." </a>";
}

function compound_link($full_name) {
	global $name_links;
	if ($link = $name_links[$entry]) {
		
	}
	
	if ($full_name) {
		// echo "full_name _".$full_name."_<p/>";
		$link = $name_links[$full_name];	
		$new_entry .= build_link($word, $link, $my_class="");
		// $new_entry .= "<a class = \"".$my_class."\" target=\"_blank\" href=\"".$link."\">".$word." </a>";
	}
	else {
		$new_entry .= $word." ";	
	}
	
}

function add_link($entry, $my_class="") {
	global $name_links;
	$words = preg_split("/[\s]+/", $entry);
	$word  = "";
	$link  = "";
	$new_entry = "";

	if (is_string($entry)) {
		if (isset($name_links[$entry])) {
			echo $entry;
		}
	}
	else {
		echo "NO";
	}
	
	
	// if (isset($name_links[$entry])) {
	// 	echo "UUU";
	// }


	// $link = $name_links[$entry];
	// echo "full_name = ".$full_name."<p/>";
	foreach ($words as $word) {
		// echo "URA ".$word."<p/>";
		$full_name = search_array(array_keys($name_links), $word);
		// if ($full_name) {
		// 	// echo "full_name _".$full_name."_<p/>";
		// 	$link = $name_links[$full_name];	
		// 	$new_entry .= build_link($word, $link, $my_class="");
		// 	// $new_entry .= "<a class = \"".$my_class."\" target=\"_blank\" href=\"".$link."\">".$word." </a>";
		// }
		// else {
		// 	$new_entry .= $word." ";	
		// }
	}
	return $new_entry;
}


?>