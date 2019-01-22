<h1>Tellimine</h1>
<?php
//lisab vormist saadud andmed muutujasse
$ring = $_GET['ring'];
$pii = 3.14;
$kring = $_GET['koonusring'];
$kkorgus = $_GET['koonuskorgus'];
$skorgus = $_GET['silinderkorgus'];
$sraadius = $_GET['silinderraadius'];

$keraV = $pii*$ring*$ring*$ring*(4/3);
$koonusV = $pii*$kring*$kring*$kkorgus*(1/3);
$silinderV = $pii*$sraadius*$sraadius*$skorgus;


echo 'Kera ruumala: '.number_format($keraV,2).'<br>';
echo 'Koonuse ruumala: '.number_format($koonusV,2).'<br>';
echo 'Silinder ruumala: '.number_format($silinderV,2).'<br>';
?>.