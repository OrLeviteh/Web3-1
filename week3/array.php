<?php 
	$array = array('dog-1' => 'Finn',
				   'dog-2' => 'Walter',
				   'dog-3' => 'Gus',
				   'dog-4' => 'Snoopy',
				   'cat-14' => 'jingles'
				   
	);
?>

<!-- this is an associated array ^^ -->

<html>
	<head>
		<title>Array Page</title>
	</head>
	<body>
		<?php 
			print_r($array);
		?>
			<br>
		<?php
			echo $array ['dog-1'];
			
			echo '<br/><br/>';
			
			foreach($array as $key=>$value){
			echo $key.': '.$value."<br>";
			}
		
		?>
		
	</body>
</html>