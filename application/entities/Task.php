<?php

require 'Entity.php';

class Task extends Entity
{
  private $task, $priority, $size, $group;

  public function setTask($value)
  {
    if (preg_match('/^[A-Z0-9 ]+$/i', $value) && strlen($value) <= 64) {
      $this->task = $value;
      return true;
    }
    return false;
  }

  public function setPriority($value)
  {
    if (is_int($value) && $value < 5) {
      $this->priority = $value;
      return true;
    }
    return false;
  }

  public function setSize($value)
  {
    if (is_int($value) && $value < 5) {
      $this->size = $value;
      return true;
    }
    return false;
  }

  public
  function setGroup($value)
  {
    if (is_int($value) && $value < 6) {
      $this->group = $value;
      return true;
    }
    return false;
  }
}