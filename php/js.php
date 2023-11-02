<?php
  header('Content-type: text/javascript');
  $output = file_get_contents('../js/main.js');
  $output .= file_get_contents('../js/main-2.js');
  echo $output;
?>