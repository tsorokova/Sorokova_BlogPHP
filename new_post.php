
<?php 
$title = $_POST['title'];
	if (!empty($_POST)) {
		file_put_contents('Sorokova/posts/' . $title . '.txt', $_POST['text']);
	} 


?>

<html>
	<head>
	 <meta charset="utf-8">
		<title>New Post</title>

	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<body style="background:#FFFFF0">
		<div class="col-md-10 col-md-offset-1">
		<a href="index.php"><img src="Sorokova/logo.jpg" width="189" height="255"></a>
			<div class="page-header"> 
				<h3>Enter the post</h3> 
				
				<div id="search-form">
						<form method="POST" action="new_post.php">
						<input type="text" name="Title" placeholder="Title" value=<?=$_GET['title']?>>
						<textarea class="form-control" name="Text" rows="3" placeholder="Enter new post" value=<?=$_GET['text']?>></textarea>
						<input type="submit" value="Post">
						</form>
	
				</div>
			</div>


				</div>
			</div>
		</div>
		<?php if ($user == 'adminadmin') { ?>
		<div id="footer">
			<p>Sorokova</p>
		</div>
		<?php } ?>
	</body>
</html>