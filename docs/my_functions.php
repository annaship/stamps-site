<?php 
include("my_arrays.php");

function add_link($col) {
	global $name_links;
	$link_name = "";
	// echo "col = ".$col;
	// print_r($name_links);
	$keywords = preg_split("/[\s,]+/", $col);
	foreach ($keywords as $keyword) {
		// echo " keyword = ".rtrim($keyword)."<p/>";
		foreach ($name_links as $full_name => $link) {
			$split_names = preg_split("/[\s,]+/", $full_name);
			if (in_array($keyword, $split_names)) {
				// echo " keyword = _".$keyword."_<p/>";
				$link_name = "<a href=\"".$link."\">".$keyword."</a>";
				// echo "link_name = ".$link_name;
				return $link_name;
			} 
		}
	}	
}


// $keywords = preg_split("/[\s,]+/", "hypertext language, programming");


?>