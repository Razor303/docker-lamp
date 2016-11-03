<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>


  <div id="outer-logo-container" class="outer-logo-container-closed">
    <div id="message">

    </div>
      <?php
      $image_properties = array(
        'src'   => 'images/logo.png',
        'id'    => 'logo',
        'alt'   => 'LOGO_1'
      );
      echo img($image_properties);
      ?>
    </div>
