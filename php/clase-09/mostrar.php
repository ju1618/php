<?php
  session_start();
  if ($_SESSION["contador"]!="") {
      echo "$_SESSION["contador"]";
  }

 ?>
