
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Update Post</title>
</head>
<body>
	<?php require '../includes/_nav.php' ?>
	<div class="container">

		<h1 class="text-center">Updatepost</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="username" name="title">
  </div>
  <div class="form-group">
	  <label for="content">Content:</label>
	  <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
	</div> 
	<br>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

<?php require '../controllers/posts/updatepost.php'; ?>

</body>
</html>