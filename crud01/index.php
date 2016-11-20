<?php
// genera una griglia crud


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD 01 | index</title>
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
  		<h3>PHP CRUD Grid</h3>
  	</div>
  	<div class="row">
  	<p>
  		<!-- create button -->
  		<a href="create.php" class="btn btn-success">Create</a>
  	</p>
  		<table class="table table-striped table-bordered">
  			<thead>
  				<tr>
  					<th>Name</th>
  					<th>Email Address</th>
  					<th>Mobile Number</th>
  					<th>Action</th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php
  					// includo la libreria che mi permette l'aggancio al db
  					include('database.php');
  					// connessione
  					$pdo = Database::connect(); // richiamo la classe e il metodo della classe
  					//query sql --> ordina in base all'id l'elenco dei record nella tabella
  					$query = 'SELECT * FROM customers ORDER BY id DESC';
  					// applico la query e ciclo sui dati in modo da poterla stampare
  					foreach ($pdo->query($query) as $key => $row) {
  						echo "<tr>";
  						echo "<td>".$row['name']."</td>";
  						echo '<td>'.$row['email'].'</td>';
  						echo '<td>'.$row['mobile'].'</td>';
              echo '<td width=250>';
  						echo '<a class="btn btn-default" href="read.php?id='.$row["id"].'">Read</a>';
              echo ' ';
              echo '<a class="btn btn-success" href="update.php?id='.$row["id"].'">Update</a>';
              echo ' ';
              echo '<a class="btn btn-danger" href="delete.php?id='.$row["id"].'">Delete</a>';
              echo '</td>';
  						echo '</tr>';
  					}
  					// disconnessione
  					$pdo = Database::disconnect();
  				?>
  			</tbody>
  		</table>
  	</div>
    </div>
  </div>
</body>
</html>
