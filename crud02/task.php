<?php

// definisce un task

class Task{

  private $task_description = '';

  function __construct($description){
    $this->set_task($description);
  }

  function get_task(){
    return $this->task_description;
  }

  function set_task($description){
    $this->task_description = $description;
  }


}

 ?>
