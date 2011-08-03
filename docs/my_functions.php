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
		if (strlen($word) > 1) {
			$search_string = preg_replace('/[:,-]/','',$word);
			$full_name = search_array(array_keys($name_links), "\b".$search_string."\b");	
			if ($full_name) {
				$link = $name_links[$full_name];	
				$res_link .= build_link($word, $link, $my_class="");
			}
			else {
				$res_link .= $word." ";	
			}
		}
	}
	return $res_link;
}

// function print_tr($n) {
// 	if ($n == 1 || $n == 2)
// 		return "<tr class = 'data'>";
// 	elseif ($n == 5 || $n == 8)
// 		return "<tr class = 'meal'>";
// 	else
// 		return "<tr>";			
// }
// 
// function print_td($tr_n, $res) {
// 	if ($tr_n == 1)
// 		return "<td class = 'time'>$res</td>";
// 	elseif ($tr_n == 5 || $tr_n == 11)
// 		return "<td class = 'rest'>$res</td>";
// 	elseif (preg_match('/Lobster Boil/', $res))
// 		return "<td class = 'meal'>$res</td>";				
// 	else
// 		return "<td>$res</td>";
// }

?>
