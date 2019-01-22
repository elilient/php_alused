<h1>Tellimine</h1>
<?php
//lisab vormist saadud andmed muutujasse
$ring = $_GET['ring'];
$pii = 3.14;
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Kera ruumala: '.$pii*$ring*$ring*$ring.'<br>';
echo 'Toode 2: '.$toode2.'tk<br>';
echo 'Toode 3: '.$toode3.'tk<br>';
?>.