<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customers where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD 01 | Read</title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link   href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="row">
                        <h3>Read a Customer</h3>
                    </div>
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name:</label>
                        <?php echo $data['name'];?>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email Address:</label>
                         <?php echo $data['email'];?>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Mobile Number:</label>
                        <?php echo $data['mobile'];?>
                      </div>
                      <br/>
                        <div class="form-actions">
                          <div class="well">
                          	<a class="btn btn-default" href="index.php">Back</a>
                       	  </div>
                       	</div>
                    </div>
                </div>

    </div> <!-- /container -->
  </body>
</html>
