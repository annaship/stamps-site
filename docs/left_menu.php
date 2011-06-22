<div class="grid_2 alpha" id="sidebar">
		<div class="side-title">Faculty
		</div>
			<div class="sub-list">
				<ul>
					<?php
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
				<?php
					foreach (array_keys($tool_links) as $tool_name) {
						echo "<li>" . build_link($tool_name, $tool_links[$tool_name], "side-link") . "</li>";
					}
				?>					
			</ul>
		</div>
		<div class="side-title">Computer Facilities
		</div>
		<div class="sub-list">
			<ul>
				<?php
					foreach (array_keys($comp_facilities_links) as $name) {
						echo "<li>" . build_link($name, $comp_facilities_links[$name], "side-link") . "</li>";
					}
				?>					
			</ul>			
		</div>
</div>
