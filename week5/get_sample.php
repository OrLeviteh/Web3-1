<?php 
	
	
	
	$pages = array('home', 'about', 'resources');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sample Get</title>
	</head>
	<body>
		<ul class="nav">
			<?php foreach($pages as $p){ ?>
				<li>
					<a href="/?page=<?php echo $p; ?>">
						<?php echo $p; ?>
					</a>
				</li>
			<?php } ?>
		</ul>
		
		<?php 
			if( isset($_GET['page']) ){
			
				$page=$_GET['page'];
				
				if($page == 'home'){
					//echo 'Homepage';
					
					include('home.php');
					
				}elseif($page== 'about'){
					echo 'About';
					
				}elseif($page== 'resources'){
					echo 'Resources';
			}
			}
		?>
	</body>
</html>