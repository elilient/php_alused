<?php
echo '<h4>Tsüklid - for</h4>';
$varv = '';
for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0) {
        $varv ='green;';
    } else {
        $varv = 'red';
    }
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}

?>