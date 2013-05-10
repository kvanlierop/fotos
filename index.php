<?php
/*CONF*/
$title ="Fotos";





$dirs = scandir("./");
$navitems = "";
foreach($dirs as $dir){
	if(is_dir($dir) && substr($dir, 0,1) != "."){
		$navitems .= "<li><a href='?b=".rawurlencode($dir)."'>".$dir."</a></li>";
	}
}
if(!isset($_GET['b'])){
	$dirs = scandir("./");
	$content ="";
	foreach($dirs as $dir){
		if(is_dir($dir) && substr($dir, 0,1) != "."){
			$dircontent = glob($dir."/*");
			$content .= "<img src='".$dircontent[0]."' />";
		}
	}
}else{
	foreach(glob(rawurldecode($_GET['b']). "/*") as $dir){
		$content .= "<img src='".$dir."' />";
	}
}
require_once("./template.php");
?>