<?php
session_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>

При проверке связи не удалось обнаружить узел <?php echo $_SESSION['bridge_ip']?> 
Проверьте имя узла и повторите попытку.



</body>
</html>