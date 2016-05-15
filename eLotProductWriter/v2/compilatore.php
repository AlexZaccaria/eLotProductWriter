<?php
   $debug = true;
   $files = array_slice(scandir('./prodotti/'), 2);
   $templates = array_slice(scandir('./templates/'), 2);
   
   $template = $_GET['t'];
   if (empty($template))
      $template = "t001";
   include './templates/'.$template."/template.php";
?>