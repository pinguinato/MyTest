<?php

    // il file dove io metto le voci da leggere
    $nome_del_file_da_leggere = "MioFile.txt";
    // aggancio del file in modalità sola lettura
    $file_handle = fopen($nome_del_file_da_leggere, "r");

    $file_line = '';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestionale</title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link   href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
           <h3>Elenco dei TASK</h3>
        </div>
    </div>
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
        <?php

        //legge riga per riga il file

        while (!feof($file_handle)) {
            // salva il contenuto testuale in una stringa
            $file_line = fgets($file_handle);

        ?>
        <p>
            <?php  print($file_line); ?>
        </p>
        <?php
         } // fine while
        ?>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
// chiude file
fclose($file_handle);

?>
