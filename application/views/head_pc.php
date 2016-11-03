<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php

    echo link_tag('css/main.css');
		echo link_tag('js/fullcalendar-scheduler/lib//fullcalendar.min.css');
	
   ?>

	<script type="text/javascript" src="<?= base_url() ?>js/jquery-ui-1.12.0.custom/external/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/fullcalendar-scheduler/lib/moment.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/fullcalendar-scheduler/lib/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/fullcalendar-scheduler/scheduler.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/Chart.js/Chart.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

	<title>PortersDesk.io DeskTop</title>
</head>
