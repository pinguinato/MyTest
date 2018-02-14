<?php

// cancello il file che contiene i task

// accesso al file dei task
require_once('task.php');
require_once('functions.php');
$nome_del_file_da_leggere = "MioFile.txt";
$file_handle = fopen($nome_del_file_da_leggere, "a") or die('Non posso aprire il file '.$nome_del_file_da_leggere);
$file_handle = file_put_contents($nome_del_file_da_leggere,"");
if (is_resource($file_handle)){
    fclose($file_handle);
}

?>
