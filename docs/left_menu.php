<?php
	// include("my_functions.php");
	// $a = add_link("Mitchell Sogin", "side-link");
	// echo "a = ".$a;
?>

<div class="grid_2 alpha" id="sidebar">
		<div class="side-title">Faculty
		</div>
			<div class="sub-list">
				<!-- <a href="http://jbpc.mbl.edu/labs-dmarkwelch.html" class="mainlevel">
											David Mark Welch</a> -->
				<ul>
					<!-- <li><a class="side-link" target="_blank" href="http://jbpc.mbl.edu/labs-msogin.html">Mitchell Sogin</a></li> -->
					<?php
						// include 
						foreach (array_keys($name_links) as $full_name) {
							echo "<li>" . build_link($full_name, $name_links[$full_name], "side-link") . "</li>";
						}
					?>					
				</ul>
			</div>
		<div class="side-title">Tools
		</div>
		<div class="sub-list">
			<ul>
				<li><a class="side-link" target="_blank" href="http://code.google.com/p/ampliconnoise/">Ampliconnoise</a></li>
				<li><a class="side-link" target="_blank" href="http://www.arb-home.de/">ARB</a></li>
				<!-- <li><a class="side-link" target="_blank" href="">CatchAll</a></li> -->
				<li>CatchAll</li>
				<li><a class="side-link" target="_blank" href="http://plaza.ufl.edu/sunyijun/ESPRIT.htm">ESPRIT</a></li>
				<li><a class="side-link" target="_blank" href="http://www.mothur.org/wiki/Main_Page">Mothur</a></li>
				<li><a class="side-link" target="_blank" href="http://metagenomics.anl.gov/">MGRAST</a></li>
				<!-- <li><a class="side-link" target="_blank" href="">PhyloPythia</a></li> -->
				<li>PhyloPythia</li>
				<li><a class="side-link" target="_blank" href="http://qiime.sourceforge.net/">QIIME</a></li>
				<li><a class="side-link" target="_blank" href="http://rdp.cme.msu.edu/">RDP</a></li>
				<li><a class="side-link" target="_blank" href="http://www.arb-silva.de/">Silva</a></li>
				<li><a class="side-link" target="_blank" href="http://www.drive5.com/usearch/">UClust</a></li>
				<li><a class="side-link" target="_blank" href="http://bmf2.colorado.edu/unifrac/">Unifrac</a></li>
				<li><a class="side-link" target="_blank" href="http://vamps.mbl.edu/">VAMPS</a></li>
			</ul>
		</div>
		<div class="side-title">Computer Facilities
		</div>
		<div class="sub-list">
			<ul>
				<li><a class="side-link" target="_blank" href="http://jbpc.mbl.edu/computational-resources.html">Computer Resources</a></li>
				<!-- <li><a class="side-link" target="_blank" href="">Account information</a></li> -->
				<li>Account information</li>
			</ul>			
		</div>
</div>
