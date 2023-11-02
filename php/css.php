<?php
  header("Content-type: text/css");
  $output = file_get_contents('../css/style.css');
  $output .= file_get_contents('../css/style-2.css');
  echo $output;
?>