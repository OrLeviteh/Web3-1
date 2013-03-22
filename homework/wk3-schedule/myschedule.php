<?php 

$week = array(
	'Sunday' => array(
		'11 am' => 'Wake up',
		'12 pm' => 'Procrastinate',
		'4 pm' => 'Yoga',
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
		<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic|Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<style>
			#body-wrapper{width:960px; margin: 0 auto; margin-bottom: 30px;}
		
			h1{font-family: 'Archivo Narrow', sans-serif;
			color: #00778F;
			font-size: 48px; 
			text-align: center;
			padding-top: 10px;
			}
			
			h2{
			margin-left: 10px;
			font-family: 'Archivo Narrow', sans-serif;
			font-size: 24px;}
			
			section{
			font-family: 'Oxygen', serif;
			font-size: 16px;
			margin: 8 auto;
			width:400px;
			border-radius: 3px;
			-moz-border-radius: 3px;
			}
			
			ul{list-style: none;
			}
			
			li{width:300px;}
			
			#Sun{border: 3px solid #52E2FF;}
			#Mon{border: 3px solid #2CDDF5;}
			#Tues{border: 3px solid #27D2DB;}
			#Wed{border: 3px solid #2CE8E8;}
			#Thurs{border: 3px solid #32EDD7;}
			#Fri{border: 3px solid #25E6C5;}
			#Sat{border: 3px solid #0BDEAD;}
		
			
			#Sun h2{color:#52E2FF;}
			#Mon h2{color:#2CDDF5;}
			#Tues h2{color:#27D2DB;}
			#Wed h2{color:#2CE8E8;}
			#Thurs h2{color:#32EDD7;}
			#Fri h2{color:#25E6C5;}
			#Sat h2{color:#0BDEAD;}
		</style>
		
	</head>
	<body>
		<div id="body-wrapper">
				<h1>Weekly Schedule</h1>
				
				<section id="Sun">
					<h2>Sunday</h2>
					<ul>
				 		<?php
				 			foreach($week['Sunday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li> 
				 		<?php } ?>
				 	</ul>
			 	</section>
			 	
			 	<section id="Mon">
				 	<h2>Monday</h2>	
				 	<ul>
				 	<?php
				 		foreach($week['Monday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
				 	</ul>
			 	</section>
			 	
			 	<section id="Tues">
				 	<h2>Tuesday</h2>
				 	<ul>
				 	<?php
				 		foreach($week['Tuesday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
				 	</ul>
			 	</section>
			 	
			 	<section id="Wed">
				 	<h2>Wednesday</h2>
				 	<ul>
				 	<?php
				 		foreach($week['Wednesday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
				 	</ul>
			 	</section>
			 	
			 	<section id="Thurs">
				 	<h2>Thursday</h2>
				 	<ul>
				 	<?php
				 		foreach($week['Thursday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
				 	</ul>
			 	</section>
			 	
			 	<section id="Fri">
				 	<h2>Friday</h2>
				 	<ul>
				 	<?php
				 		foreach($week['Friday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
				 	</ul>
			 	</section>
			 	
			 	<section id="Sat">
				 	<h2>Saturday</h2>
				 	<ul>
				 	<?php
				 		foreach($week['Saturday'] as $key=>$value){ ?>
				 		<li> <?php echo $key.' : '.$value.'<hr>';?> </li>  
				 	<?php } ?>
				 	</ul>
			 	</section>
			</div>
	</body>	
</html>

