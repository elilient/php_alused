<?php
$kasutajad = array(); //Tühi massiiv
// andmete lisamine
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');
$lisaKasutajad = array('mark', 'george');

$kasutajadKokku = count($kasutajad);
for($i=0; $i < $kasutajadKokku; $i++){
    echo $kasutajadKokku[$i].'<br>';
}

array_shift($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++) {
    echo $kasutajad[$i].'<br>';
}

$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
for($i = 0; $i < $uuedKasutajad; $i++) {
    echo $uuedKasutajad[$i].'<br>';
}
?>