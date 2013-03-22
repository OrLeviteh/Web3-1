
<?php 
	$array = array(
		"Panda Bear" => array("Black", "White", "Lazy"),
		"Grizzly Bear" => array("Brown", "Evil", "Giant"),
		"Teddy Bear" => array("Creepy")
	);
	
	foreach ($array as $title => $item){ 
	
	if($title == "Grizzly Bear"){
	
	?>
		<h4><?php echo $title; ?></h4>
	
	<?php } else { ?>
	
		<p>Nothing</p>
	
	<?php } //end if
	} //end foreach
	
	//output one array
	foreach($array["Panda Bear"] as $panda){
		echo $panda.'<br';
	}
	
	//output all arrays
	foreach($array as $title => $item){
		echo '<h1>'.$title.'</h1>';
			foreach($item as $i){
		echo '<p>'.$i.'</p>';
		}
		
	}
?>