<html>
<head>
    <title>Muutuja väärtuse säilitamine global instruktsiooni abil.</title>
</head>
<body>
<?php
$num_of_calls = 0;
function andAnotherThing($txt) {
    global $num_of_calls;
    $num_of_calls++;
    print "<h1>$num_of_calls. $txt</h1>";
}
andAnotherThing("Widgets");
print("We build a fine range of widgets<p>");
andAnotherThing("Doodads");
print("Finest in the world<p>");
?>
</body>
</html>
