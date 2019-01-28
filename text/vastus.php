<?php
$ees = $_GET['eesnimi'];
$pere = $_GET['perenimi'];
$otsi = array('ä','õ','ö','ü','Ä','Õ','Ü','Ö');
$asenda = array('a','o','o','u','A','O','U','O');
echo strtolower(str_replace($otsi, $asenda, $ees)).'.'.strtolower(str_replace($otsi, $asenda, $pere)).'@khk.ee';