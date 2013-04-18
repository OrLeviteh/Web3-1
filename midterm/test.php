<?php 
	
	$content= file_get_contents('src/main.js');
	$node = json_decode($content, true);
	
	$m =new MongoClient();
	$db = $m -> thesis;
	$collection = $db -> storiesfirst;
	
	foreach($stories as $node){
		$collecton -> insert ($node);
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Web 3 Midterm</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<!-- changes viewable area on the device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		
		<!-- removes Safari toolbar and makes your site full screen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		
		<!-- change app status bar color -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- the icon the user will see when they add your app to their homescreen -->
		<link rel="apple-touch-icon" sizes="72x72" href="icon.png" />
		
		<!-- this will add a splash screen to your app -->
		<link rel="apple-touch-startup-image" sizes="1024x748" href="img/splash_screen.png" />
		
		<!-- ipad resolution is 1024 x 768 at 132 ppi -->
		
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css"/>
		<link rel="stylesheet" href="css/jquery.mobile-1.3.0.css"/>
		
		<script src="src/jquery.js"></script>
		<script src="src/jquery.mobile-1.3.0.js"></script>
		<script src="src/main.js"></script>
		
	  	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="application/javascript" src="src/iscroll.js"></script>
		<script type="text/javascript">
			var myScroll;
			function loaded() {
				myScroll = new iScroll('wrapper', {fixedScrollbar: true, lockDirection:true, zoom:false, hScrollbar:false, bounce:false});
			}
			
			document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
			
			document.addEventListener('DOMContentLoaded', loaded, false);
	
		</script>
	</head>
	<body>
	
		<div data-role="page">
			<div id="wrapper">
				<div id="scroller">
					<!-- to change origin of popup, in jquery mobile.js file find desired.x and desired.y and add values -->
					<!--
<a href="#popup1" data-rel="popup" data-position-to="#circle1">
						<img id="circle1" class="circle" src="img/circle.png" alt="circle 1"/>
					</a>
					<div data-role="popup" id="popup1">
						<h1>1979</h1>
						<p>Madame Restell blah blah</p>
					</div>
						
					<a href="#popup2" data-rel="popup" data-position-to="#circle2">
						<img id="circle2" class="circle" src="img/circle.png" alt="circle 2"/>
					</a>
					<div data-role="popup" id="popup2">
						<h1>1979</h1>
						<p>dasgggg</p>
					</div>
-->
			
					<img class="main" src="img/thesis.png" alt="image_map"/>	
				</div>
			</div>
		</div>
	
	</body>
</html>