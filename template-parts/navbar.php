<?php

$page_array = array(
						'Home' => 'index.php',
						'About' => 'about.php',
					);

?>
<div class="navbar-wrapper">
	<div class="container">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">All Pie Project</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<?php
							
						foreach ($page_array AS $page_name => $page_url){
							echo '<li';
							if ($page_url == $_SERVER["REQUEST_URI"]) echo ' class="active"';
							echo '><a href="'.$page_url.'">'.$page_name.'</a></li>';
						} ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>