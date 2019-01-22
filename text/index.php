<?php
$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
?>