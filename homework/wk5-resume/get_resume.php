<?php 
	$content = file_get_contents('http://107.21.207.175/w05/give_info_Nori.php?request=Resume');
	
	$resume = json_decode($content, true);
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Resume</title>
		<link rel= stylesheet href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


	</head>
	<body>
		<div id="body-wrapper">
			<div id="content-wrapper">
				<h1>NORIHITO YUKI</h1>
					<?php
				
			 		foreach($resume as $category => $item){
						if(is_array($item) == true){
							echo '<section>';
							echo '<h2>'.$category.'</h2>';
							
							foreach($item as $desc => $d){
								if(is_array($d)){
									echo '<h3>'.$desc.'</h3>';
									echo '<ul>';
									
									foreach($d as $f){
										echo '<li>'.$f.'</li>';
										} // end 5th loop
										
										echo '</ul>';
										
								}else{ echo '<p>'.$d.'</p>'; }
							}
										
						 } else { echo '<h2>'.$item.'</h2>'; }
						 echo '</section>';
					}
			
				  ?>
		  </div>
	  </div>
	</body>
</html>