<!DOCTYPE html>

<html lang="en">
	<head>
    	<meta charset="utf-8" />
        <title>Beta-Gal App</title>
    </head>
    
    <body>
    	<header>
        	<hgroup>
            	<h1>Welcome to the Beta-Gal App</h1>
                <h3>Store and view your beta gal results online.</h3>
            </hgroup>
			
			<nav>
				<a href="index.php">Home</a>
			</nav>
        </header>
        
        <nav>
        	<h2>Add</h2>
            <ul>
            	<li><a href="index.php?q=plasmid">Plasmid</a></li>
                <li><a href="index.php?q=strain">Strain</a></li>
                <li><a href="index.php?q=experiment">Experiment</a></li>
            </ul>
        </nav>
		
		<?php
			if (isset($_GET['q'])) {
				switch ($_GET['q']) {
					case "plasmid":
						include 'includes/plasmid_form.html';
						break;
					
					case "strain":
						break;
						
					case "experiment":
						break;
				}
			}
		?>
    </body>
</html>