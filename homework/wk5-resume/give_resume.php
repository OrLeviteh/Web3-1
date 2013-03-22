<?php 
	header('Content-type: application/json');
	
	$resume = array(
		'Education' => array(
			'Aug 2011 - present' => array('Parsons the New School for Design', 
										 'New York, NY', 
										 'Master of Fine Arts Candidate, 2013', 
										 'Major: Design and Technology', 
										 'GPA: 3.9'
										 ),
			'Sept 2007 - May 2011' => array('Cornell University', 
											'Ithaca, NY', 
											'Bachelor of Science', 
											'Major: Landscape Architecture',
											'GPA: 3.8',
											'Honors and Awards: Graduated Magna Cum Laude, Deans List All Semesters'
											),
			'Sept 2003 - June 2007' => array('St. Francis Preparatory High School',
											'Fresh Meadows, NY',
											'Honors and Awards: National Honor Society, Optimate Society, Spanish National Honor Society, Artistic Excellence in Architecture Award')
		),
		
		'Skills' => array(
		'Technical Skills' => array('Adobe Creative Suite', 
									'AutoCAD', 
									'HTML5', 
									'CSS3', 
									'jQuery', 
									'C++ (OpenFrameworks)',
									'Java (Processing)', 
									'Objective-C', 
									'Manifold GIS', 
									'Microsoft Office Suite', 
									'SketchUp', 
									'Wordpress'),
		'Other Skills' => array('Excellent written, oral, and visual communication skills',
								'Excellent presentation abilities',
								'Innovative and creative',
								'Detail-oriented'
								)
		),
									
		'Employment' => array(
			'Feb 2013 - present' => array('Landor Associates',
										 'Part-time Freelancer',
										 'Designing the wayfinding for the new World Trade Center site'
										),
		'August 2012' => array('Parsons The New School for Design',
								'Bootcamp Teaching Fellow: Web Design',
								'Helped develop the curriculum and taught web basics (HTML5, CSS3, Wordpress, web standards, UX/UI) to incoming graduate students'
										),
								
		'March 2012 - June 2012' => array('Quest to Learn, Institute of Play',
										  'Game Design Intern',
										  'Designed and developed games for the middle school curriculum'
										),
		'Summer 2010 and 2009' => array('Bayview Landscape Architecture',
										'Landscape Architecture Intern',
										'Produced AutoCAD drawings, 3D models, and renders; dealt with building permits and clients'								),
		'May - Dec 2008' => array('New York State Metropolitan Transportation Council (NYMTC)',
								'Graphic Design Intern',
								'Designed technical reports, maps, brochures, etc., and updated website'
								)
		),
		
		'Student Groups' => array(
			'2012 - 2013' => array('Vice President of dorkShop',
										'Secretary of New School Game Club'
			),
			'2007 - 2011' => array('College of Agriculture and Life Sciences Student Advisory Council',
								   'Cornell Design and Planning Club'
									)
		)
										
										  
	);
	
	
	echo json_encode($resume);
	
?>