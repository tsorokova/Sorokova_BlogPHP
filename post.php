<?php
require_once 'data.php';

$post_dir = './Sorokova/posts';
$file_names = scandir($post_dir);

	if (isset($_GET['title'])) {
		$title = $_GET['title'];
		$post_body = file_get_contents($post_dir . '/' . $title . '.' . txt);
		$post = new Post($title, $post_body);
		 $post->get_text();
	} else {
		echo 'You need to set title get param!';
	} 

	require_once 'view/post.php.txt'
?>

