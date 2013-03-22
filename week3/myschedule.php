<?php 

$week = array(
	'Sunday' => array(
		'11 am' => 'Wake up',
		'12 pm' => 'Procrastinate',
		'4 pm' => 'Gym',
		'6 pm' => 'Shower',
		'8 pm' => 'Start school work',
		'9 pm' => 'Watch tv',
		'2 am' => 'Sleep'
	),
	
	'Monday' => array(
		'8 am' => 'Wake up',
		'930 am' => 'Work',
		'430 pm' => 'Gym',
		'6 pm' => 'Shower',
		'7 pm' => 'School work',
		'830 pm' => 'Watch tv',
		'930 pm' => 'School work',
		'2 am' => 'Sleep'
	),
		
	'Tuesday' => array(
		'8 am' => 'Wake up',
		'930 am' => 'Work',
		'630 pm' => 'Thesis',
		'11 pm' => 'School work',
		'2 am' => 'Sleep'
	),
	'Wednesday' => array(
		'8 am' => 'Wake up',
		'930 am' => 'Work',
		'7 pm' => 'School work',
		'9 pm' => 'Watch tv',
		'2 am' => 'Sleep'
	),
	'Thursday' => array(
		'830 am' => 'Breakfast',
		'930 am' => 'School work',
		'7 pm' => 'Web 3',
		'11 pm' => 'School work',
		'2 am' => 'Sleep'
	),
	'Friday' => array(
		'730 am' => 'Wake up',
		'9 am' => 'Data Visualization',
		'12 pm' => 'Thesis',
		'3 pm' => 'Meeting',
		'5 pm' => 'School work',
		'7 pm' => 'Shower',
		'8 pm' => 'Go out (optional)'
	),
	'Saturday' => array(
		'11 am' => 'Wake up',
		'1230 pm' => 'Gym',
		'2 pm' => 'Shower',
		'3 pm' => 'School work',
		'4 pm' => 'Procrastinate',
		'6 pm' => 'Dinner',
		'7 pm' => 'Procrastinate',
		'8 pm' => 'School work'
	)

);

	?>

<html>
	<head>
		<title> My Schedule</title>
		<style>
			#body-wrapper{width:960px; margin: 0 auto;}
			h1{font-family: }
		</style>
	</head>
	<body>
		<div id="body-wrapper">
				<h1>My Schedule</h1>
				
				<section>
					<h2>Sunday</h2>
				 		<?php
				 			foreach($week['Sunday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li> 
				 		<?php } ?>
			 	</section>
			 	
			 	<section>
				 	<h2>Monday</h2>	
				 	<?php
				 		foreach($week['Monday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
			 	</section>
			 	
			 	<section>
				 	<h2>Tuesday</h2>
				 	<?php
				 		foreach($week['Tuesday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
			 	</section>
			 	
			 	<section>
				 	<h2>Wednesday</h2>
				 	<?php
				 		foreach($week['Wednesday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
			 	</section>
			 	
			 	<section>
				 	<h2>Thursday</h2>
				 	<?php
				 		foreach($week['Thursday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
			 	</section>
			 	
			 	<section>
				 	<h2>Friday</h2>
				 	<?php
				 		foreach($week['Friday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
			 	</section>
			 	
			 	<section>
				 	<h2>Saturday</h2>
				 	<?php
				 		foreach($week['Saturday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
			 	</section>
			</div>
	</body>	
</html>

