<html>
<head>
    <title>Argumentide andmine viite abil</title>
</head>
<body>
<?php
$num_of_calls = 0;
function addFive($num){
    $num += 5;
}
$originum=10;
addFive(&$orignum);
print($orignum);
?>
</body>
</html>
