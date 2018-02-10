<?php

    // il file dove io metto le voci da leggere
    $nome_del_file_da_leggere = "MioFile.txt";
    // aggancio del file in modalità sola lettura
    $file_handle = fopen($nome_del_file_da_leggere, "r");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestionale</title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link   href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
           <h3>Test lettura task da file</h3>
        </div>
    </div>
    <div class="col-md-12 col-md-offset-0">
        <div class="row">
        <?php

        //legge riga per riga il file
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            echo $line;
        }
        ?>
        </div>
    </div>
</div>
</body>
</html>
<?php
// chiude file
fclose($file_handle);

?>
