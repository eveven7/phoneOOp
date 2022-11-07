<?php
class Phone{
 public $manufacturer;
 public $model;
 public $year;

 function __construct($manufacturer = null, $model = null, $year = null){
    $this->manufacturer = $manufacturer;
    $this->model = $model;
    $this->year = $year;
}
}
 ?>