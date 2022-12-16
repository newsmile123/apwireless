<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
td {
    font-family: Courier;
    font-size: 12px;
    color: rgb(60, 85, 128);
}
input, select, option {
	font-family: Arial;
	font-size: 10px;
	margin-left: 0px;
	border-width: 1px;
	border-style: inset solid solid inset;
}
</style>
</head>
<table cellpadding="5" cellspacing="0" width="100%" height="100%" style="border-collapse:collapse;" border="1">
	<tr>
	</tr>
    <tr>
		<td valign="top">
			<table border="1" cellpadding="3" style="border-collapse:collapse;" width="100%">
                <tbody>
    				<tr> 
                    	<td width="18%" valign="top" align="left">
                    <table border="1" width="233px">
                    	<tr>
                    		<td colspan="2">Калькулятор PRF</td>
                        </tr>
                            <form id="form2" method="post" action="PTK1.php">
                    	<tr>
                    		<td width="45%">PMK</td>
                    		<td><input id="PMK_B" name="PMK_B" type="text" size="26px"/></td>
                    	</tr>
                    	<tr>
                    		<td>A Nonce</td>
                    		<td><input id="SSIDL" name="SSIDL" type="text" size="26px"/></td>
                    	</tr>
                        <tr>
                    		<td>S Nonce</td>
                    		<td><input id="PMK_B" name="PMK_B" type="text" size="26px"/></td>
                    	</tr>
                    	<tr>
                    		<td>MAC-адрес AP</td>
                    		<td><input id="SSIDL" name="SSIDL" type="text" size="26px"/></td>
                    	</tr>
                        <tr>
                    		<td>MAC-адрес STA</td>
                    		<td><input id="SSIDL" name="SSIDL" type="text" size="26px"/></td>
                    	</tr>
                        
                    	<tr>
                    		<td></td>
                    		<td align="right"><input id="calc" name="calc" type="submit" size="15px" value="Считать"/></td>
                    	</tr>
                    	<tr>
                    		<td>PTK</td>
                    		<td><input id="PTK" name="PTK" type="text" size="26px" maxlength="256"/></td>
                   		 	</tr>
                            </form>
                    </table>
                   
      </td>
		<td align="center" valign="top">
			<table border="1" cellpadding="3" style="border-collapse:collapse;">
  				<tbody style="font-size:12px; font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif;">
                	<form id="Check" method="post">
        			<tr>
			  			<td width="400" align="right" valign="top">Для того, чтобы сгенерировать PMK функции PBKDF    требуются: PSK, SSID, длина SSID. Студентам    предлагается получить PMK самостоятельно с помощью калькулятора PBKD2F
          				</td>
      					<td width="200"></td>
      					<td width="400" valign="top">Для того, чтобы сгенерировать PMK функции PBKDF требуются: PSK, SSID, длина SSID.  На этом шаге точке доступа создает случайное число A Nonce, которое пересылается клиенту. Получите PMK самостоятельно с помощью калькулятора PBKDF2 и A Nonce с помощью генератора случайных чисел.
                        </td>
                   
    				</tr>
                    <tr>
    					<td>PMK = <input name="PMKCheck" size="80" value="<?=(isset($_SESSION['pmk'])?$_SESSION['pmk']:'')?>"/></td>
    					<td></td>
                        <td>PMK = <input name="PMKCheck" size="80" value="<?=(isset($_SESSION['pmk'])?$_SESSION['pmk']:'')?>"/></td>
    				
    				</tr>
    				<tr>
    					<td></td>
    					<td></td>
    	<td>
    		<table border="1" cellpadding="3" style="border-collapse:collapse;" align="center">
    			<tbody style="font-size:10px; font: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
        			<td align="left">Radiotap
            			<table border="1" cellpadding="3" style="border-collapse:collapse;">
            				<td align="left">IEEE 802.1x Header
                    			<table border="1" cellpadding="3" style="border-collapse:collapse;">
            						<td align="left">Logical-Link Control Header
                    					<table border="1" cellpadding="3" style="border-collapse:collapse;">
            								<td align="left">EAPoL 117 bytes
                    							<table border="1" cellpadding="1" style="border-collapse:collapse;">
                    								<tr><td align="center" colspan="2" width="360px"> Descryptor type (1 byte)</td></tr>
                        								<tr><td align="center" width="50%"> Key Information (2 bytes)</td>
                        									<td align="center" width="50%"> Key length (2 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="left" colspan="2" width="360px">Key Nonce = <input type="text" id="ANonce" name="ANonce" size="60px" value="<?=(isset($_SESSION['Anonce'])?$_SESSION['Anonce']:'')?>"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> EAPoL Key IV (16 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key Recieve Sequence Counter (8 bytes)</td></tr>
                       						 			<tr><td align="center" colspan="2" width="360px"> Key Identifier (8 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key MIC = <input type="text" id="MIC" name="MIC" size="64px" /></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="center" width="50%"> Key Data Length (2 bytes)</td>
                        									<td align="center" width="50%"> Key Data (2 bytes)</td> </tr>
                    						
                    							</table>
                                           </td>
                    					</table>
                    				</td>
                                </table>
                    		</td>
            		</td>
            </tbody>
            </table>
            
    </tbody>
  </table>
  </tr>
  <tr>
			  <td width="400" align="right" valign="top">На этом шаге с помощью ГСЧ необходимо сгенерировать случайное число SNonce., а также с помощью калькулятора MIC вычислить MIC. S Nonce вместе с MIC пересылается точке доступа. С помощью калькулятора PRF получите PTK указав PMK, ANonce, SNonce MAC-адреса точки доступа и клиента. 
              <p>PTK = <input name="PMKCheck" size="80" value="<?=(isset($_SESSION['ptk'])?$_SESSION['ptk']:'')?>"></p>
          </td>
      					<td width="200"></td>
      					<td width="400" valign="top">
                        </td>
                   
    </tr>
    <tr>
    <td>
    <table border="1" cellpadding="3" style="border-collapse:collapse;" align="center">
    	<tbody style="font-size:10px; font: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
        	<td align="left">Radiotap
            	<table border="1" cellpadding="3" style="border-collapse:collapse;">
            		<td align="left">IEEE 802.1x Header
                    <table border="1" cellpadding="3" style="border-collapse:collapse;">
            		<td align="left">Logical-Link Control Header
                    <table border="1" cellpadding="3" style="border-collapse:collapse;">
            		<td align="left">EAPoL 117 bytes
                    <table border="1" cellpadding="1" style="border-collapse:collapse;">
                    	<tr><td align="center" colspan="2" width="360px"> Descryptor type (1 byte)</td></tr>
                        <tr><td align="center" width="50%"> Key Information (2 bytes)</td>
                        <td align="center" width="50%"> Key length (2 bytes)</td></tr>
                        <tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        <tr><td align="center" colspan="2" width="360px">Key Nonce = <input type="text" id="SNonce" name="SNonce" size="60px" value="<?=(isset($_SESSION['Snonce'])?$_SESSION['Snonce']:'')?>"></td></tr>
                        <tr><td align="center" colspan="2" width="360px"> EAPoL Key IV (16 bytes)</td></tr>
                        <tr><td align="center" colspan="2" width="360px"> Key Recieve Sequence Counter (8 bytes)</td></tr>
                        <tr><td align="center" colspan="2" width="360px"> Key Identifier (8 bytes)</td></tr>
                        <tr><td align="center" colspan="2" width="360px"> Key MIC = <input type="text" id="ANonce" name="ANonce" size="64px" value="<?=(isset($_SESSION['mic1'])?$_SESSION['mic1']:'')?>"></td></tr>
                        <tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        <tr><td align="center" width="50%"> Key Data Length (2 bytes)</td>
                        	<td align="center" width="50%"> Key Data (2 bytes)</td> </tr>
                    </td>
                    </table>
                    </td>
                    </table>
                    </td>
                    </table>
            </td>
            </tbody>
            </table>
            
    </tbody>
  </table>
  </td>
  <td></td>
    <td></td></tr>
    <tr>
			  			<td width="400">
          				</td>
      					<td width="200"></td>
      					<td width="400" valign="top">На этом этапе проверяется MIC, полученный от клиента. Создается новый MIC. С помощью PMK, ANonce, SNonce, MAC-адреса точки доступа и клиента вычисляется PTK. Клиенту отправляется текущий GTK, а также подтверждение, получив которое клиент может установить ключи.
                        <p>PTK = 
                          <input name="PMKCheck2" size="80" value="<?=(isset($_SESSION['ptk1'])?$_SESSION['ptk1']:'')?>" />
                        </p>
                        </td>
                   
    				</tr>
    				<tr>
    					<td></td>
    					<td></td>
    	<td>
    		<table border="1" cellpadding="3" style="border-collapse:collapse;" align="center">
    			<tbody style="font-size:10px; font: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
        			<td align="left">Radiotap
            			<table border="1" cellpadding="3" style="border-collapse:collapse;">
            				<td align="left">IEEE 802.1x Header
                    			<table border="1" cellpadding="3" style="border-collapse:collapse;">
            						<td align="left">Logical-Link Control Header
                    					<table border="1" cellpadding="3" style="border-collapse:collapse;">
            								<td align="left">EAPoL 117 bytes
                    							<table border="1" cellpadding="1" style="border-collapse:collapse;">
                    								<tr><td align="center" colspan="2" width="360px"> Descryptor type (1 byte)</td></tr>
                        								<tr><td align="center" width="50%"> Key Information (2 bytes)</td>
                        									<td align="center" width="50%"> Key length (2 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px">Key Nonce = <input type="text" id="ANonce" name="ANonce" size="60px" value="<?=(isset($_SESSION['Anonce'])?$_SESSION['Anonce']:'')?>"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> EAPoL Key IV (16 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key Recieve Sequence Counter (8 bytes)</td></tr>
                       						 			<tr><td align="center" colspan="2" width="360px"> Key Identifier (8 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key MIC = <input type="text" id="MIC" name="MIC" size="64px" value="<?=(isset($_SESSION['mic2'])?$_SESSION['mic2']:'')?>"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="center" width="50%"> Key Data Length (2 bytes)</td>
                        									<td align="center" width="50%"> Key Data (2 bytes)</td> </tr>
                    						
                    							</table>
                                           </td>
                    					</table>
                    				</td>
                                </table>
                    		</td>
            		</td>
            </tbody>
            </table>
            
    </tbody>
  </table>
  </tr>
  <tr>
			  			<td width="400"></td>
      					<td width="200"></td>
      					<td width="400" align="right"><input value='Назад' onclick=location.href='2psk.php' type="button" /><input value='Далее' onclick=location.href='4psk.php' type="button" />
                        								</td></tr>
  </table>
  </table>
  </div>
</div>
</body>
</html>