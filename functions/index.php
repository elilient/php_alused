<html>
<head>
    <title>Argumendid</title>
</head>
<body>
<?php
$num_of_calls = 0;
function fontWrap($txt, $size) {
    print "<font size=\"$size\" face=\"Helvetica,Arial,Sans-Serif\">$txt</font>";
}
fontWrap("A heading<br>",5);
fontWrap("some body text<br>",3);
fontWrap("some more body text<BR>",3);
fontWrap("yet more body text<BR>",3);
?>
</body>
</html>
