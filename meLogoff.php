<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="meStyles.css">
 <title>Cookies</title>
</head>
<body>
<?php
   
    unset($_COOKIE["usuario"]);
    setcookie("usuario","",time()-1);
    echo "Cookie apagado!!<br>";
      



    

?>
</body>
</html>