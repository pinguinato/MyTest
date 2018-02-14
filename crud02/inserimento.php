<?php

// todo prende  i dati da un form e li scrive su di un file di testo esistente

//$file_da_aprire = "MioFile.txt";
//$handle_file = fopen($file_da_aprire,'a') or die('Non posso aprire il file '.$file_da_aprire);
//var_dump($handle_file);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestione Task</title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link   href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
            <div class="panel-group">
                <div class="panel panel-default" style="background-color:darkred;text-align:center;">
                    <div class="panel-body">
                        <h2 style="color:white;font-size:3em;font-weight:bold;">GESTIONE TASK</h2>
                    </div>
                    <div class="panel-footer">
                        by <strong>Gianotto Roberto</strong> - <a href="mailto:gianottoroberto@gmail.com">gianottoroberto@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
            <!-- elenco dei pulsanti di azioni -->
            <div class="panel-group">
                <div class="panel panel-default" style="text-align:center;">
                    <div class="panel-body">
                        <strong>Elenco delle operazioni disponibili</strong>
                    </div>
                    <div class="panel-footer">
                        <a href="index.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> HOME</a>
                        <a href="inserimento.php" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Nuovo Task</a>
                        <a href="inserimento.php" class="btn btn-danger" id="clearAllButton"><i class="glyphicon glyphicon-trash"></i> Cancella lista task</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- inizio form inserimento del task -->
        <div class="row">
            <div class="col-lg-6" style="text-align=center;">
                <!-- form per inserimento dei dati -->
                <form action="index.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="task">Testo del task</label>
                            <input type="text" name="testo-task" class="form-control" id="task" placeholder="Inserisci il task">
                        </div>
                        <button type="submit" class="btn btn-primary">Registra su file</button>
                    </fieldset>
                </form>
                <!-- fine del form per l'inserimento dei dati -->
            </div>
        </div>
        <!-- fine del form inserimento del task -->

    </div>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
