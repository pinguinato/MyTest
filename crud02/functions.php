<?php

function verificaTestoTask($testo_task){
    $testo_task = trim($testo_task);
    $testo_task = stripslashes($testo_task);
    $testo_task = htmlspecialchars($testo_task);
    return $testo_task;
}


?>