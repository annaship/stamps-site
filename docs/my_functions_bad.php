<?php 
include("my_arrays.php");

function create_names() {
	global $name_links;
	$words = preg_split("/[\s]+/", $col);
	return $words;
}

function add_link($col) {
	global $name_links;
	$link_name = "";
	$res 			 = "";
	$keywords = preg_split("/[\s]+/", $col);
	// echo "col = ".$col;
	// print_r($name_links);
	foreach ($keywords as $keyword) {
		// echo " keyword = ".rtrim($keyword)."<p/>";
		foreach ($name_links as $full_name => $link) {
			$split_names = preg_split("/[\s]+/", $full_name);
			// echo " keyword = _".$keyword."_<p/>";
			if (in_array($keyword, $split_names)) {
				// $link_name = "<a href=\"".$link."\">".$keyword."</a>";
				// echo "\$col = ".$col;
				$res .= "<a href=\"".$link."\">".$keyword."</a>";
			} 
			else {
				$res .= $keyword;
			}
			// return $link_name;
		}
		echo " res = _".$res."_<p/>";
	}	
	echo "==============";
}

// $keywords = preg_split("/[\s,]+/", "hypertext language, programming");


?>