<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Additional Autjentication Data</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../css/aad.css" rel="stylesheet"></link>
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<script src="../../../orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
</head>
<body>
<div id="main">
  <div class="description" align="center">
    <h3>Nonce</h3><p align="center">Nonce - случайное числовое значение. 104-битный Nonce формируется из номера пакета  (Packet Number – PN), из поля Priority, в котором указываются данные о приоритете кадра, используемые в QoS и поля Address 2 (A2), в котором хранится адрес передатчика и 7-12 октеты номера пакета (PN). Значение Nonce для каждого кадра, защищённого конкретным временным ключом должно быть уникально. Повторное использование номера пакета с тем же временным ключом обнуляет все гарантии безопасности.ей.</p>
    </div>
  <div id="packet">
    <div id="before">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%" height="240px"><p>MAC Header</p>
                                <table border="2" cellpadding="3" width="100%" style="border-collapse:collapse;">
  															<tr><td align="center"><div id="fc">Frame Control</div></td></tr>
                        									<tr><td align="center"><div id="dur/id">Duration/ID</div></td></tr>
                        									<tr><td align="center"><div id="a1">Address 1</div></td></tr>
                        									<tr><td align="center"><div id="a2">Address 2</div></td></tr>
                        									<tr><td align="center"><div id="a3">Address 3</div></td></tr>
                        									<tr><td align="center"><div id="sc">Sequence Control</div></td></tr>
                                                            <tr><td align="center"><div id="a4">Address 4</div></td></tr>
                        									<tr><td align="center"><div id="qos">QoS Control</div></td></tr>
                        									<tr><td align="center"><div id="ht">HT Control</div></td></tr>
                                               			</table></td></tr></table>
    </div>
    </div>
  <div id="nonce" align="center">
    <div class="description" align="center"><p align="center"> В приведенном задании Поле Nonce flags уже заполнено, заполните остальные поля</p>
    </div>
    	<table width="80px" cellpadding="2" style="border-collapse:collapse;" border="2" align="center" >
                                                    <tr><form action="aad.php" method="post" name="form_nonce">
                                                    <td width="20px"><div id=""><input id="nonce_flags" name="wait_fc" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['fc'])?$_SESSION['demo']['aad']['fc']:'')?>"></input></div></td>
                                                    <td width="50px"><div id=""><input id="A2" name="wait_a1" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['a1'])?$_SESSION['demo']['aad']['a1']:'')?>"></input></div></td>
                                                    <td width="50px"><div id=""><input id="PN" name="wait_a2" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['a2'])?$_SESSION['demo']['aad']['a2']:'')?>"></input></div></td>
                                                    <?php 
													if ($_SESSION['demo']['success_aad'] = "1"){
														echo '';}?>
                                                    			</table>
                                                    			<button id="send" title="Send" onClick="sendAad()">Переслать</button>
                                                    			</form>
    </div>
</div>
</body>
</html>
