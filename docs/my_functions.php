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
	return "<a class = \"" . $my_class . "\" target=\"_blank\" href=\"" . $link . "\">" . $words . "</a> ";
}

function create_link($entry, $my_class="") {
	global $name_links;
	$words = preg_split("/[\s]+/", $entry);
	$res_link = "";
	foreach ($words as $word) {
		$full_name = search_array(array_keys($name_links), $word);
		if ($full_name) {
			$link = $name_links[$full_name];	
			$res_link .= build_link($word, $link, $my_class="");
		}
		else {
			$res_link .= $word." ";	
		}
		
	}
	return $res_link;
}

?>