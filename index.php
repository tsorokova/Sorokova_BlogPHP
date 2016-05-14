
<?php 
require_once 'data.php';
	$user='adminadmin'; 

	$post_dir = 'Sorokova/posts';

	$file_names = scandir($post_dir);

	
	$posts = array();
	foreach ($file_names as $file) {
		if ($file != '.' && $file != '..') {
			$post_body = file_get_contents($post_dir . '/' . $file);
			$posts[] = new Post(trim($file, '.txt'), $post_body);
		}
	} 
	require_once 'view/index.php.txt';
?>




