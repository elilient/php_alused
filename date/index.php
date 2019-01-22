<h1>Ülesanne 8</h1>
<?php
echo date('d.m.Y G:i' , time());
echo '<br>';
function paev() {
    if(date('l')=='Tuesday'){
        echo('teisipäev');
    } elseif (date('l')=='Monday'){
        echo('esmaspäev');
    } elseif (date('l')=='Wednesday') {
        echo('kolmapäev');
    }  elseif (date('l')=='Thursday') {
        echo('neljapäev');
    }  elseif (date('l')=='Friday') {
        echo('reede');
    }  elseif (date('l')=='Saturday') {
        echo('laupäev');
    }  else {
        echo('pühapäev');
    }
}

function kuu(){
    if(date('F')=='January'){
        echo('jaanuar');
    } elseif (date('F')=='February') {
        echo('veebruar');
    } elseif (date('F')=='March') {
        echo('märts');
    } elseif (date('F')=='April') {
        echo('aprill');
    } elseif (date('F')=='May') {
        echo('mai');
    } elseif (date('F')=='June') {
        echo('Juuni');
    } elseif (date('F')=='July') {
        echo('juuli');
    } elseif (date('F')=='August') {
        echo('august');
    } elseif (date('F')=='September') {
        echo('september');
    } elseif (date('F')=='October') {
        echo('oktoober');
    } elseif (date('F')=='November') {
        echo('november');
    } elseif (date('F')=='December') {
        echo('detsember');
    }
}
echo paev();
echo '<br>';
echo date('d.');
echo kuu().' '.date('Y').' ';
echo paev();
?>