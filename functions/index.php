<html>
<head>
    <title>Muutuja poole pöörudmine global instruktsiooni abil</title>
</head>
<body>
<?php
$life = 42;
function meaningOfLife() {
    global $life;
    print "The meaning of life is $life<br>";
}
meaningOfLife();
?>
</body>
</html>
