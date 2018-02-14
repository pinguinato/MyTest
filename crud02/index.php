<?php
    require_once('task.php');
    require_once('functions.php');
    // il file dove io metto le voci da leggere
    $nome_del_file_da_leggere = "MioFile.txt";
    $testo_task = '';

    //var_dump($_POST['testo-task']); die;


    if( isset($_POST['testo-task']) && $_POST['testo-task'] != null && $_POST['testo-task'] != '' ){
        $file_handle = fopen($nome_del_file_da_leggere, "a") or die('Non posso aprire il file '.$nome_del_file_da_leggere);
        $testo_task = new Task(verificaTestoTask($_POST['testo-task']));
        $file_handle = file_put_contents($nome_del_file_da_leggere,$testo_task->get_task().PHP_EOL,FILE_APPEND | LOCK_EX);
        if (is_resource($file_handle)){
            fclose($file_handle);
        }

    }

    // vado a leggere sul file
    $file_handle_reader = fopen($nome_del_file_da_leggere,'r');
    $file_line = '';
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
                            <a href="#" class="btn btn-danger" id="clearAllButton"><i class="glyphicon glyphicon-trash"></i> Cancella lista task</a>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-lg-12" >
        <?php while (!feof($file_handle_reader)) {
            // salva il contenuto testuale in una stringa
            $file_line = fgets($file_handle_reader);
        ?>
        <p>
            <?php  print($file_line); ?>
        </p>
        <?php
         }
        ?>
            </div><!-- chiusura di col-lg-12 -->
        </div><!-- chiusura della row -->
    </div><!-- chiusura div col-md-12 -->

    <div class="col-md-12 col-md-offset-0">
      <div class="row">
        <div id="testoRispostaAjax"></div>
      </div>
    </div>

</div><!-- chiusura container -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php
// chiude file
if(is_resource($file_handle_reader)){
    fclose($file_handle_reader);
}
?>
