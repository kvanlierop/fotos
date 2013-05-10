<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="./main.css" />
	<meta name="viewport" content="width=device-width" />
</head>
<body>
	<aside>
		<h1><a href="./"><?php echo $title; ?></a></h1>
		<nav>
			<ul>
				<?php echo $navitems; ?>
			</ul>
		</nav>
	</aside>
	<main>
		<?php echo $content; ?>
		<footer>
			&copy; by you;
		</footer>
	</main>
</body>