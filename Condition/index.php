<?php

// tingimuslaused
// tegevused, mis toimuvad, kui tingimus kehtib

echo '<h4>Tingimuslaused</h4>';
$arv = rand(0, 100);

if($arv  > 0 and $arv < 26) {
    $varv = 'green';

} else if($arv > 25 and $arv < 51){
    $varv = 'red';

} else if($arv > 50 and $arv < 76){
    $varv = 'blue';

} else if($arv > 75 and $arv < 101){
    $varv = 'orange';

}
echo '<p style="color: '.$varv.'">'.$arv.'</p>';


$foor = 'punane';
switch($foor){
    case 'punane':
        echo '<p style="color: red">punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color: orange">kollane!</p>';
        break;
    case 'roheline':
        echo '<p style="color: green">roheline!</p>';
        break;
    default:
        echo '<p>mingi teine!</p>';
        break;
}

?>