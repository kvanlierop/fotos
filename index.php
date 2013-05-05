<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Fotos</title>
	<link rel="stylesheet" href="./main.css" />
	<meta name="viewport" content="width=device-width" />
</head>
<body>
	<aside>
		<h1><a href="./">Fotos</a></h1>
		<nav>
			<ul>
				<?php
				$dirs = scandir("./");
				foreach($dirs as $dir){
					if(is_dir($dir) && substr($dir, 0,1) != "."){
						echo "<li><a href='?b=".$dir."'>".$dir."</a></li>";
					}
				}
				?>
			</ul>
		</nav>
	</aside>
	<main>
		<?php
		if(!isset($_GET['b'])){
			$dirs = scandir("./");
			foreach($dirs as $dir){
				if(is_dir($dir) && substr($dir, 0,1) != "."){
					$dircontent = glob($dir."/*");
					echo "<img src='".$dircontent[0]."' />";
				}
			}
		}else{
			foreach(glob($_GET['b']. "/*") as $dir){
				echo "<img src='".$dir."' />";
			}
		}
		?>
		<footer>
			&copy; by you;
		</footer>
	</main>
</body>