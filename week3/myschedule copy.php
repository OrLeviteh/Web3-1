<?php 

$week = array(
	'Sunday' => array(
		'11 am' => 'Wake up',
		'12 pm' => 'Procrastinate',
		'4 pm' => array('Exercise' => 'Hot Yoga'
						),
		'6 pm' => 'Shower',
		'8 pm' => 'Start school work',
		'9 pm' => array('Watch tv' => 'Once Upon A Time'
					),
		'2 am' => 'Sleep'
	),
	
	'Monday' => array(
		'8 am' => 'Wake up',
		'930 am' => 'Work',
		'430 pm' => array('Exercise' => 'Total Body Conditioning'
						),
		'6 pm' => 'Shower',
		'7 pm' => 'School work',
		'830 pm' => array('Watch tv' => 'The Bachelor'
						),
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
		'9 pm' => array('Watch tv' => array('Modern Family', 'Criminal Minds')
						),
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
		'1230 pm' => array('Exercise' => 'Gym'),
		'2 pm' => 'Shower',
		'3 pm' => 'School work',
		'4 pm' => 'Procrastinate',
		'6 pm' => 'Dinner',
		'7 pm' => 'Procrastinate',
		'8 pm' => 'School work'
	)

);

print_r($item);



	?>

<html>
	<head><title> My Schedule</title></head>
	<body>
			<h2>Sunday</h2>
		 	<?php
		 		foreach($week['Sunday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li> 
		 		<?php } ?>
		 	<h2>Monday</h2>	
		 	<?php
		 		foreach($week['Monday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value;?> </li>  
		 	<?php } ?>
		 	<h2>Tuesday</h2>
		 	<?php
		 		foreach($week['Tuesday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value;?> </li>  
		 	<?php } ?>
		 	<h2>Wednesday</h2>
		 	<?php
		 		foreach($week['Wednesday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
		 	<?php } ?>
		 	<h2>Thursday</h2>
		 	<?php
		 		foreach($week['Thursday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
		 	<?php } ?>
		 	<h2>Friday</h2>
		 	<?php
		 		foreach($week['Friday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
		 	<?php } ?>
		 	<h2>Saturday</h2>
		 	<?php
		 		foreach($week['Saturday'] as $key=>$value){ ?>
		 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
		 	<?php } ?>
		
		
	</body>	
</html>

