
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>[NanoStation Loco M2] - Antenna Alignment Tool</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link href="/140205.1824/style.css" rel="stylesheet" type="text/css" />
  <link href="/140205.1824/jquery-ui.css" rel="stylesheet" type="text/css">
  <link href="/140205.1824/help.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" language="javascript" src="jsl10n.php"></script>
  <script type="text/javascript" src="/140205.1824/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="/140205.1824/signal.js"></script>
  <script type="text/javascript" language="javascript" src="/140205.1824/slider-min.js"></script>
  <script type="text/javascript" language="javascript" src="/140205.1824/sm2/soundmanager2.js"></script>
  <link type="text/css" rel="StyleSheet" href="/140205.1824/bluecurve.css" />
  <script type="text/javascript" src="/140205.1824/js/jquery.ui.js"></script>
  <script type="text/javascript" src="/140205.1824/help.js"></script>
  <script type="text/javascript" language="javascript">
var timerID = null;
var lastSignal = null;

var beeps = {
	count: 5,
	_beeps: new Array(this.count),
	_enabled: false,
	_pauseExcept: function(id) {
		for(var i = 0; i < this.count; i++)
			if(id != i && this._beeps[i] && this._beeps[i].playState == 1) {
				this._beeps[i].pause();
		}
	},
	replay: function(id) {
		if (!this._enabled) {
			this._pauseExcept(-1);
			return;
		}
                
		this._pauseExcept(id);
                
		if (!this._beeps[id]) return;

		if (!this._beeps[id].position || this._beeps[id].paused)
			this._beeps[id].togglePause();

	},
	add: function(id) {
		if (id >= this.count || id < 0) return;

		ext = '.mp3';
		if (soundManager.canPlayMIME('audio/ogg')) ext = '.ogg';
		this._beeps[id] = soundManager.createSound({
			id: 'beep'+id,
			url: 'sound/beep'+id+ext,
			autoLoad: true,
			onfinish: function(){
				this.position = 0;
			}
		});
	},
	enable: function(state) {
		this._enabled = state;
		if (!this._enabled)
			soundManager.pauseAll();
	}
};

soundManager.setup({
	url: 'sm2/',
	// disable debug mode
	debugMode: false,
	onready: function() {
		for(var i = 0; i < beeps.count; i++)
			beeps.add(i);
	},
	ontimeout: function() {
		alert("Could not start sound support!\n"+
			"Make sure mp3 or ogg are supported by WEB browser.");
	}
});

function reloadSignal() {
	timerID = null;
	jQuery.getJSON("signal.php?"+(new Date().getTime()), update);
}

function refreshDisplay(s)
{
	lastSignal = s;
	$('#signalinfo .switchable').toggle(s != null && s.signal != 0);
	if (typeof updateSignalLevel == 'function' && s != null)
		updateSignalLevel(s.signal, s.rssi, s.noisef, s.chwidth, s.rx_chainmask,
		s.chainrssi, s.chainrssiext);
}

function update(s) {
	refreshDisplay(s);
	if (timerID != null)
		clearTimeout(timerID);
	timerID = setTimeout('reloadSignal()', 500);
}

function createSlider() {
	var slider = new Slider(document.getElementById("slider-1"),
			document.getElementById("slider-input-1"));
	var rs = document.getElementById("rssifield");
	var n = document.getElementById("noisef");
	slider.setMaximum(80);
	slider.onchange = function() {
		var val = this.getValue();
		if (n)
	       	noise = parseFloat(n.innerHTML);
        else
           	noise = -95;
        if (isNaN(noise) || noise >= 0) noise = -95;
		if (rs) rs.value = noise + val;
		RSSI_Max = val;
		refreshDisplay(lastSignal);
	}
	rs.slider = slider;
	rs.onchange = function() {
		var intVal = parseFloat(this.value);
		if (isNaN(intVal)) intVal = -95;
			if (n)
				noise = parseFloat(n.innerHTML);
		else
			noise = -95;
		if (isNaN(noise) || noise >= 0) noise = -95;
        intVal = -1 * (noise - intVal);
		this.slider.setValue(intVal);
	}
	rs.onchange();
}
function init() {
	$('#sound').prop("checked", false);
	createSlider();
	reloadSignal();
}
jQuery(document).ready(init);
//-->
</script>

</head>

<body class="popup">
<br />
<form action="#">
<table cellspacing="0" cellpadding="0" align="center" style="width: 490px;" class="popup">
	<tr><th>Antenna Alignment</th></tr>
	<tr>
	  <td>
		<div id="signalinfo" class="row">
		  <span class="label">Signal Level:</span>
		  <span class="value">
			<span class="percentborder switchable"><div id="signalbar" class="mainbar">&nbsp;</div></span>
			<span class="switchable">&nbsp;</span>
			<span id="signal"></span>
		  </span>
		</div>
		 <div id="signal_chain" class="row initial_hide">
                        <span class="label">Horizontal&nbsp;/&nbsp;Vertical:</span>
                        <span class="value">
                                <span id="signal_0">&nbsp;</span>
                                <span>&nbsp;/&nbsp;</span>
                                <span id="signal_1">&nbsp;</span>
                                <span>&nbsp;dBm</span>
                        </span>
		</div>
		<div class="row">
		  <span class="label">Noise Level:</span>
		  <span class="value">
			<span id="noisef"></span>
		  </span>
		</div>
		<div class="row">
		  <span class="label">Max Signal:</span>
		  <span class="value">
			<div class="slider" id="slider-1">
	          <input class="slider-input" id="slider-input-1" name="slider-input-1"/>
			</div>
			<input type="text" class="std_width" id="rssifield" name="rssifield"
				size="4" value="-65" />
			<span>&nbsp;dBm</span>
		  </span>
		</div>
		<div class="row">
		  <span class="label">Alignment Beep:
                   <span class="help"><a href="/140205.1824/help/en_US/beep.html" rel="help">[?]</a></span>
                   </span>
		  <span class="value">
	          <input type="checkbox" id="sound" name="sound" onClick="beeps.enable(this.checked);">&nbsp;Enable
		  </span>
		</div>
	  </td>
	</tr>
</table>
</form>
</body>
</html>
