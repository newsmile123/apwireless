<?php
session_start();
unset($_SESSION['demo']['pmk']);
unset($_SESSION['demo']['anonce']);
unset($_SESSION['demo']['snonce1']);
unset($_SESSION['demo']['snonce2']);
unset($_SESSION['demo']['ptk1']);
unset($_SESSION['demo']['ptk2']);
unset($_SESSION['demo']['mic1']);
unset($_SESSION['demo']['mic2']);
unset($_SESSION['demo']['mic3']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/_styles.css" type="text/css">
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<SCRIPT language="javascript" src="js/queue.js"></SCRIPT>
<SCRIPT language="javascript" src="js/transmitter.js"></SCRIPT>
<SCRIPT language="javascript" src="js/down.js"></SCRIPT>
<SCRIPT language="javascript" src="js/send.js"></SCRIPT>
<SCRIPT language="javascript" src="js/arrows.1.0.0.js"></SCRIPT>
</head>
<body>
    <div id="header">
			<?php
			include ("menu.html");
			?>
    </div>
	<div class="cbm_wrap">
    	<div class="message" align="center">
        	<div class="desription">
           		<h3>Сообщение 1 </h3><p align="center">На этапе передачи первого сообщения от точки доступа клиенту точка доступа вычисляет случайное число ANonce и передаёт его клиенту. А также и клиент и аутентификатор вычисляют парный мастер-ключ (PMK). С помощью калькуляторов необходимо получить Эти параметры.</p>
    		</div>
           <?php
			include ("message1.php");
			?>
     <div class="buttons">
        <button id="send1" title="Send">Переслать</button>
     <div align="right" class="next"><a id="next1" href="#message2"><img src="img/Arrow-Down-blue-48.png" width="50" height="50" alt="Далее"></a></div>
     </div>
        </div>
        
        <div id="message2" align="center">
        <div class="desription">
        <h3>Сообщение 2</h3><p align="center">На этом шаге с помощью ГСЧ необходимо </a>сгенерировать случайное число SNonce., а также с помощью калькулятора MIC вычислить MIC. S Nonce вместе с MIC пересылается точке доступа. С помощью калькулятора PRF получите PTK указав PMK, ANonce, SNonce MAC-адреса точки доступа и клиента</p>
    </div>
    	<?php
			include ("message2.php");
		?>
        <div class="buttons">
            <button id="computePtk1" title="Send" onClick="computePtk1()">Заполнить PTK</button>
            <button id="computeSnonce1" title="Send" onClick="computeSnonce1()">Заполнить SNonce</button>
            <button id="computeMic1" title="Send" onClick="computeMic1()">Рассчитать MIC</button>
            <button id="send2" title="Send">Переслать</button>
        <div align="right" class="next"><a id="next2" href="#message3"><img src="img/Arrow-Down-blue-48.png" width="50" height="50" alt="Далее"></a></div>
     	</div>
        </div>
        
        <div id="message3" align="center">
        <div class="desription">
        <h3>Сообщение 3</h3><p align="center">На этом этапе проверяется MIC</a>, полученный от клиента. Создается новый MIC. С помощью PMK, ANonce, SNonce, MAC-адреса точки доступа и клиента вычисляется PTK. Клиенту отправляется текущий GTK, а также подтверждение, получив которое клиент может установить ключи.</p>
    </div>
    		<?php
			include ("message3.php");
			?>
        <div class="buttons">
            <button id="computePtk2" title="Send" onClick="computePtk2()">Заполнить PTK</button>
            <button id="computeMic2" title="Send" onClick="computeMic2()">Рассчитать MIC</button>
            <button id="send3" title="Send">Переслать</button>
            <div align="right" class="next"><a id="next3" href="#message4"><img src="img/Arrow-Down-blue-48.png" width="50" height="50" alt="Далее"></a></div>
     	</div>
        </div>
        
        <div id="message4" align="center">
        <div class="desription">
        <h3>Сообщение 4</h3><p align="center">На этом шаге устанавливаются ключи. Вычисляется MIC для проверки правильности ANonce полученного в первом шагента</p>
    </div>
    		<?php
			include ("message4.php");
			?>
        <div class="buttons">
            <button id="computeMic3" title="Send" onClick="computeMic3()">Рассчитать MIC</button>
            <button id="send4" title="Send">Переслать</button>
            <div align="right" class="next"><a id="up" href="#"><img src="img/Arrow-Up-blue-48.png" width="50" height="50" alt="Наверх"></a>
     	</div>
        </div>
    </div>

</body>
</html>