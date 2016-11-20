<?php
	require('database.php');

	if(!empty($_POST)){
		//keep track validation error
		$nameError = null;
		$emailError = null;
		$mobileError = null;
		//keep track post value
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		//validate the input
		$valid = true;
		if(empty($name)){
			$nameError = "please enter a name";
			$valid = false;
		}
		if(empty($email)){
			$emailError = "please enter an email";
			$valid = false;
		}else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $emailError = 'Please enter a valid Email Address';
            $valid = false;
        }
       	if (empty($mobile)) {
            $mobileError = 'Please enter Mobile Number';
            $valid = false;
        }

        //inserimento del nuovo recordo nel database
        if($valid){
        	$pdo = Database::connect();
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	$sql = "INSERT INTO customers (name,email,mobile) values(?, ?, ?)";
        	$q = $pdo->prepare($sql);
        	$q->execute(array($name,$email,$mobile));
            Database::disconnect();
            header("Location: index.php");
        }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CRUD 01 | Create</title>
		<meta charset="utf-8">
		<link   href="css/bootstrap.min.css" rel="stylesheet">
		<link   href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="col-md-12 col-md-offset-0">
				<diw class="row">
					<h3>Create a customer</h3>
				</diw>
				<form action="create.php" class="form-horizontal" method="post">
					<div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                        <label class="control-label">Mobile Number</label>
                        <div class="controls">
                            <input name="mobile" type="text"  placeholder="Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
                            <?php if (!empty($mobileError)): ?>
                                <span class="help-inline"><?php echo $mobileError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <br/>
					<div class="form-actions">
						<div class="well">
							<button type="submit" class="btn btn-success">Create</button>
							<a href="index.php" class="btn btn-default">Back</a>
						</div>
					</div>
				</form>
			</div>
		</div><!-- container end -->
	</body>
</html>
