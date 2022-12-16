<?php
session_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>

Обмен пакетами с <?php echo $_SESSION['bridge_ip']?> с 32 байтами данных:
Ответ от <?php echo $_SESSION['bridge_ip'] ?> число байт=32 время=16мс TTL=51
Ответ от <?php echo $_SESSION['bridge_ip'] ?> число байт=32 время=15мс TTL=51
Ответ от <?php echo $_SESSION['bridge_ip'] ?> число байт=32 время=16мс TTL=51
Ответ от <?php echo $_SESSION['bridge_ip'] ?> число байт=32 время=15мс TTL=51
Статистика Ping для <?php echo $_SESSION['bridge_ip'] ?>;
Пакетов: отправлено = 4, получено = 4, потеряно 0
0% потерь




</body>
</html>