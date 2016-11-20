<?php
if(!empty($_GET['id'])){
	$id = $_REQUEST['id'];
}
?>
<!DOCTYPE html> 
<html>
<head>
	<title>CRUD 01 | Delete</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12 col-md-offset-0">
           <div class="row">
               <h3>Delete a Customer</h3>
            </div>
            <div class="row">
              <form action="delete.php" method="post">
								<input type="hidden" name="id" value="<?php echo $id; ?>" >
									<div class="control-group">
										<div class="controls">
											<div class="alert alert-danger">Are you sure to delete?</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="well">
                       <button type="submit" class="btn btn-danger">Yes</button>
                         <a class="btn btn-default" href="index.php">No</a>
                    </div>
									</div>
              </form>
						</div>
          </div>      
    </div> <!-- /container -->
  </body>
</html>
<?php
	include('database.php');
	if(!empty($_GET['id'])){
		$id = $_REQUEST['id'];
	}
	if(!empty($_POST)){
		$id = $_POST['id'];
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 'DELETE FROM customers  WHERE id = ?';
		$query = $pdo->prepare($sql);
		$query->execute(array($id));
		Database::disconnect();
		header("Location: index.php");
	}
?>
