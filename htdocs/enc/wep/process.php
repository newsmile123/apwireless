<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/dec-style.css" type="text/css">
<link rel="stylesheet" href="../../orinoco/scripts/dw_tooltips/css/ex.css" type="text/css">
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<script src="../../orinoco/scripts/dw_tooltips/js/dw_tooltip_c.js" type="text/javascript"></script>
<SCRIPT language="javascript" src="js/queue.js"></SCRIPT>
<SCRIPT language="javascript" src="js/transmitter.js"></SCRIPT>
<SCRIPT language="javascript" src="js/crc32.js"></SCRIPT>
<SCRIPT language="javascript" src="js/tooltip.js"></SCRIPT>
<SCRIPT language="javascript" src="js/arrows.1.0.0.js"></SCRIPT>
<SCRIPT language="javascript" src="js/jquery.scrollTo.js"></SCRIPT>
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.min.js"></SCRIPT>
<script src="js/dw_tooltip_c.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
			<?php
			include ("../menu.html");
			?>
    </div>
<div id="encapsulation">
	<div class="header">
    	<h2>Инкапсуляция</h2>
	</div>
    <div class="description">
    	Алгоритм инкапсуляции WEP использует потоковый шифр <a href="#" class="showTip rc4">RC4</a> в качестве алгоритма шифрования/расшифрования. Для каждого кадра данных создается Seed, представляющий собой ключ с присоединенным к нему вектором инициализации (IV). Шифр AC4 использует псевдослучайный генератор чисел для генерации ключевого потока, который в последствии побитово складывается с открытым текстом по модулю 2 для получения шифротекста. Для обеспечения целостности протокол WEP использует алгоритм нахождения контрольной суммы CRC32.
	</div>
    <div class="process">
    <div id="before">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%"><p>MAC Header</p>
                                <tr><td align="center" width="300">Frame Body
                                <table border="2" cellpadding="1" style="border-collapse:collapse;">
                    				<tr><td align="center"width="360px" height="150px">
                                    <div id="plaintext" align="justify"><?php echo htmlspecialchars(@file_get_contents('text/plaintext.txt')); ?></div>
                                </td></tr></table>
                                <tr><td align="center" width="150"> Frame Check Sequence<br /> 4 octets</td></tr></table>
    </div>
    <div id="e-params">
    	<div id="arrow-iv-packet">
        </div>
    	<div id="e-iv" align="right">
        <label for="enc_iv">IV = </label><input id="enc_iv" name="enc_iv" size="24"/>
        </div>
        <div id="e-key" align="right">
        <label for="enc_key">Key = </label><input id="enc_key" name="enc_key" size="24"/>
        </div>
        </div>
        <div id="e-middle">
        <div id="e-conc">
        </div>
        <div id="e-prng" align="center">
        <a href="#" class="showTip prng">Pseudo - random generator</a><br />
        </div>
        <div id="e-checksum" align="center">
        <a href="#" class="showTip crc32">CRC-32</a><br /><input type="button" onclick="getChecksum1()" id="crc" name="crc" size="30" value="Рассчитать"/><br />
        <div id="crc32" name="crc32"></div>
        </div>
        </div>
        <div id="e-encryption" align="center">
        ключевой поток <br /> &oplus; <br /> открытый текст <br />
        <input value='Выполнить' type="submit" onclick="RC4()" id="wep"/>
        </div>
        <div id="e-packet">
        <div class="glass">
        	<table border="1" cellpadding="3" style="border-collapse:collapse;">
            								<tr><td align="center" width="100%" height="30px">MAC Header</td></tr>
            								<tr><td align="center">Initialization vector (4 bytes)<br />
                    							<table border="2" cellpadding="1" style="border-collapse:collapse;">
                    								<tr><td align="center" colspan="2" width="360px">IV (3 byte)<br />
                                                    </td></tr>
                        								<tr><td align="center" width="50%">PAD (6 bits)</td>
                        								<td align="center" width="50%">Key ID (2 bits)</td></tr></table>
                                                        </td></tr>
                        								<tr><td align="center" colspan="2" width="380px">Data (>= 1 bytes)
                                                        <table border="2" cellpadding="1" style="border-collapse:collapse;">
                    									<tr><td align="center"width="360px" height="0px">
                                   							 <textarea style="resize: none; overflow:auto; border:none;" rows="5" cols="27" name="e-ciphertext" id="e-ciphertext"></textarea>
                                                        </td></tr></table></td></tr>
                        								<tr><td align="center" colspan="2" width="360px" height="50px">ICV (4 bytes)<br />
                                                        <div id="checksum" align="center" style="overflow:auto"></div>
                                                        </td></tr>
                    						
                    							</table>
                                           </td>
                    					</table>
        </div>
        </div>
        <div id="todec" align="center"><input type="button" id="next" name="next" size="30" value="Перейти"/></div>
	</div>
</div>

<div id="decapsulation">
	<div class="header">
    	<h2>Декапсуляция</h2>
	</div>
    <div class="description">
    	После приема сообщения к используемому ключу (WEP key) добавляется вектор инициализации (IV), содержащийся в полученном пакете. Полученный Seed поступает на вход PRGN. На выход PRNG поступает ключевой потокключевого потока, который  побитово складывается с шифротекстом по модулю 2 для восстановления открытого текста.
	</div>
    <div class="d-process">
    <div id="d-params">
    	<div id="arrow-iv-packet">
        </div>
    	<div id="d-key">
        <label for="key_for_dec">Key = </label><input id="key_for_dec" name="key_for_dec" size="24"/>
        </div>
        <div id="d-dec">
        <div class="glass">
        	<table border="1" cellpadding="3" style="border-collapse:collapse;">
            <tr><td align="center" width="100%" height="30px">MAC Header</td></tr>
            								<tr><td align="center">Initialization vector (4 bytes)<br />
                                            <input id="vector" type="text" value="<?php (isset($_SESSION['wep']['vector'])?$_SESSION['wep']['vector']:'')?>" />
                    							<table border="2" cellpadding="1" style="border-collapse:collapse;">
                    								<tr><td align="center" colspan="2" width="360px">IV (3 byte)</td></tr>
                        								<tr><td align="center" width="50%">PAD (6 bits)</td>
                        								<td align="center" width="50%">Key ID (2 bits)</td></tr></table>
                                                        </td></tr>
                        								<tr><td align="center" colspan="2" width="360px">Data (>= 1 bytes)
                                                        <table border="2" cellpadding="1" style="border-collapse:collapse;">
                    									<tr><td align="center"width="360px" height="150px">
                                    <textarea style="resize: none; overflow:auto; border:none;" rows="5" cols="27" name="d-ciphertext" id="d-ciphertext"><?php echo file_get_contents('text/encode_ciphertext.txt');?></textarea>
                                                        </td></tr></table></td></tr>
                        								<tr><td align="center" colspan="2" width="360px" height="50px">ICV (4 bytes)<br />
                                                          <div class="checksum" align="center"><?php echo file_get_contents('text/checksum.txt');?></div>
                                                        </td></tr>
                    						
                    							</table>
                                           </td>
                    					</table>
        </div>
        </div>
        </div>
        <div id="d-middle">
        <div id="d-conc" align="center">||
        </div>
        <div id="d-prng" align="center">
        Pseudo - random generator<br />
        </div>
        <!---->
        </div>
        <div id="d-encryption" align="center">
        ключевой поток <br /> &oplus; <br /> Ciphertext <br />
        <input value='Выполнить' type="submit" id="wep" onclick="RC4_dec()"/>
        </div>
        <div id="d-packet">
        	<div id="d-checksum" align="center">
       		 CRC-32<br /><input type="button" id="crc32-dec" name="crc32-dec" onclick="getChecksum2()" size="30" value="Рассчитать"/><br /><div id="dec_checksum" name="dec_checksum"></div>
        </div>
        <div id="after">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%"><p>MAC Header</p>
                                <tr><td align="center" width="300">Frame Body
                                <table border="2" cellpadding="1" style="border-collapse:collapse;">
                    				<tr><td align="center"width="360px" height="200px">
                                    <textarea style="resize: none; overflow:hidden; border:none;" rows="12" cols="24" name="plaintext_after" id="plaintext_after"></textarea>
                                </td></tr></table>
                                <tr><td align="center" width="150"> Frame Check Sequence<br /> 4 octets</td></tr></table>
    </div>
        </div>
	</div>
</div>
</body>
</html>