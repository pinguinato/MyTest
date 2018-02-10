<?php

// todo prende  i dati da un form e li scrive su di un file di testo esistente

$file_da_aprire = "MioFile.txt";
$handle_file = fopen($file_da_aprire,'a') or die('Non posso aprire il file '.$file_da_aprire);
//var_dump($handle_file);
?>
<!DOCTYPE html>
<html>
<head>

    <title>
        Inserimento
    </title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link   href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
            <h3>Inserisci un task</h3>
        </div>



        <div class="row">
            <div class="col-lg-6" >
                <!-- form per inserimento dei dati -->
                <form action="index.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="task">Testo del task</label>
                            <input type="text" class="form-control" id="task" placeholder="Inserisci il task">
                        </div>
                        <button type="submit" class="btn btn-primary">Registra su file</button>
                    </fieldset>
                </form>
                <!-- fine del form per l'inserimento dei dati -->
            </div>
        </div>

        <div class="row">
            <h3>Altre Azioni</h3>
            <!-- elenco dei pulsanti delle azioni -->
            <div class="col-lg-6" >
                <a href="index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
            </div>
        </div>

    </div>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
