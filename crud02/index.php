<?php
    require_once('functions.php');
    // il file dove io metto le voci da leggere
    $nome_del_file_da_leggere = "MioFile.txt";
    $file_handle = fopen($nome_del_file_da_leggere, "a") or die('Non posso aprire il file '.$nome_del_file_da_leggere);
    $file_line = '';

    // dati che arrivano dal form

    $testo_task = '';
    if(isset($_POST['testo-task'])){
        $testo_task = verificaTestoTask($_POST['testo-task']);
    }
    //var_dump($testo_task);

    // aggiungi la nuova riga con il task dentro il file di testo

//file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
//    $scrivi = fwrite($file_handle,$testo_task."\n");

    $file_handle = file_put_contents($nome_del_file_da_leggere,$testo_task.PHP_EOL,FILE_APPEND | LOCK_EX);

//    var_dump($scrivi);

// chiude file
    fclose($file_handle);


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
                            <a href="inserimento.php" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Cancella lista task</a>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-lg-12" >
        <?php

        //legge riga per riga il file

//        while (!feof($file_handle)) {
//            // salva il contenuto testuale in una stringa
//            $file_line = fgets($file_handle);

        ?>
        <p>
            <?php // print($file_line); ?>
        </p>
        <?php
//         } // fine while
        ?>
            </div><!-- chiusura di col-lg-12 -->
        </div><!-- chiusura della row -->

    </div><!-- chiusura div col-md-12 -->

</div><!-- chiusura container -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
// chiude file
//fclose($file_handle);
?>
