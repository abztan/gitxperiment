<?php
  include('class_lib.php');
  ini_set('display_errors', 1);
error_reporting(E_ALL);

  $a = new person("abraham tan");
  $b = new person("jessica ran");


  echo "A is " . $a->get_name() . " while B is " . $b->get_name();

  $c = new employee("bruce wayne");

  echo " C Employee " . $c->get_name();

?>
