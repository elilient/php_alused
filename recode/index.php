<?php include('pais.php'); ?>
    <menu>
        <a href="index.php">Avaleht</a>
        <a href="index.php?leht=portfoolio">Portfoolio</a>
        <a href="index.php?leht=meist">Meist</a>
        <a href="index.php?leht=kontakt">Kontakt</a>
    </menu>
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else{
    ?>
    <h2>Lorem ipsum</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi, ac blandit purus hendrerit vel.</p>
    <?php
}
?>
<?php include('jalus.php'); ?>