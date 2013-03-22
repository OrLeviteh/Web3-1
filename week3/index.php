<?php
	$random = "Hello World";
	$math = 8*20;
	$char ="$\ / ; $math"; /* single quotes will show just as is, double quotes will show math variable */
	
	$concat= 'This is one string: '.$random.' '.$math; /* . dots/periods add two variables together (or concatenate) like a + */
	
	//arrays
	
	$colors = array('red', 'blue', 'green', 'orange');
	$random = rand(0,3);
	
	
?>

<html>
	<head>
		<title>My First PHP Page</title>
		
		<script>
			document.getElementById('<?php echo 'stuff'; ?>');
		</script>
		
		<style>
			body{background-color: <?php echo $colors[$random]; ?>;}
		</style>
		
	</head>
	<body>
		<p id="stuff"><?php echo 8*20; ?></p>
		<p><?php echo $char; ?></p>
		<p><?php echo $concat; ?></p>
		
		 <?php print_r($colors); //shows array ?>  
		 
			
		 
		 <?php
		 	foreach($colors as $c){ ?>
		 		<h1>Color: <?php echo $c;?> </h1>  <!-- can break off php anywhere -->
		 		
		 	<?php } ?>
		
	</body>
</html>
