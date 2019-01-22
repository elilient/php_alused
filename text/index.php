<?php

$tekst = 'All thinking men are atheists';
echo substr($tekst, 3, 5);		//thin
echo '<br>';
echo substr($tekst, 4, -13);	//thinking men
echo '<br>';
echo substr($tekst, -8, 7);		//atheist
?>