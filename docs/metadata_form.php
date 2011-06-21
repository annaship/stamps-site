<form action="my_result.php" method="post">

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
