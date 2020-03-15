<html>
<head><title>Variable Static</title></head>
<body><h1>Variable Static</h1>
<?php
Function test()
{
Static $a=0; // dengan static
Echo "Nilai a :";
Echo $a;
Echo "<br>";
$a++;
}
Test();
Test();
Test();
Test();
Test();
?>
</body>
</html>