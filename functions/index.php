<html>
<head>
    <title>Argumendid</title>
</head>
<body>
<?php
$num_of_calls = 0;
function fontWrap($txt, $size=3) {
    print "<font size=\"$size\" face=\"Helvetica,Arial,Sans-Serif\">$txt</font>";
}
fontWrap("A heading<br>",5);
fontWrap("some body text<br>");
fontWrap("some more body text<BR>");
fontWrap("yet more body text<BR>");
?>
</body>
</html>
