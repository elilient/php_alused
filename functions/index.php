<?php
/**
 * function funktsiooniNimi($param1, $param2, ..., $paramN) {
 * tegevused, mis toimuvad funktsiooni sees
 * }
 */
$arv = 4421587455555;
function numbriKordumine($arv, $kontrollNumber)
{
echo 'Arv on '.$arv.'<br>';
$numberKokku = 0;
// leia, mitu korda siin esinemas number 5;
while($arv != 0) {
    $number = $arv % 10;
    if($number == $kontrollNumber) {
        $numberKokku = $numberKokku +1; //numberKokku++
    }
    $arv = $arv / 10;
    settype($arv, int);
}
echo 'Number '.$kontrollNumber.' esineb antud arvus '.$numberKokku.'<br>';
}
numbriKordumine(4421587455555, 5);
numbriKordumine(4421587455555, 4);