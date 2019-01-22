<?php
$nimi = $_GET['nimi'];
$upper = strtoupper($nimi);
$punktiga = implode('.',str_split($upper));
echo $punktiga;
?>