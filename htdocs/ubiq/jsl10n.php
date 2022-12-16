l10n_start = "Start";
l10n_stop = "Stop";

jsval_l10n_err_form = "Please enter/select values for the following fields:";
jsval_l10n_err_select = 'Please select a valid "%FIELDNAME%"';
jsval_l10n_err_enter = 'Please enter a valid "%FIELDNAME%"';

pingtest_l10n_timeout = "timeout";

system_l10n_change = "Change";
system_l10n_upload = "Upload";

traceroute_l10n_msg_unable_initialize = "Unable initialize request";
traceroute_l10n_fail = "Fail";

var js_translations = [];

js_translations['ON'] = "ON";
js_translations['OFF'] = "OFF";
js_translations['bridge'] = "bridge";
js_translations['router'] = "router";
js_translations['day(-s)'] = "day(-s)";
js_translations['WPA'] = "WPA";
js_translations['WPA-TKIP'] = "WPA-TKIP";
js_translations['WPA-AES'] = "WPA-AES";
js_translations['WPA2'] = "WPA2";
js_translations['WPA2-TKIP'] = "WPA2-TKIP";
js_translations['WPA2-AES'] = "WPA2-AES";
js_translations['WEP'] = "WEP";
js_translations['none'] = "none";

/* antennas */
js_translations['Unknown'] = "Unknown";
js_translations['Main'] = "Main";
js_translations['Secondary'] = "Secondary";
js_translations['Diversity'] = "Diversity";
js_translations['Vertical'] = "Vertical";
js_translations['Horizontal'] = "Horizontal";
js_translations['Adaptive'] = "Adaptive";
js_translations['External'] = "External";
js_translations['Internal'] = "Internal";
js_translations['Antenna 1'] = "Antenna 1";
js_translations['Antenna 2'] = "Antenna 2";

js_translations['err_invalid_mac'] = "Invalid MAC Address";
js_translations['err_too_many_macs'] = "Too many MAC Addresses";
js_translations['err_mac_exists'] = "MAC exists already";

js_translations['err_invalid_freq'] = 'Invalid frequency selected - must be one from the Frequency List or "Auto."';
js_translations['err_freq_list_status'] = 'Frequency List can not be disabled while <a href="ubnt.php">airSelect</a> is turned on.';

js_translations['auto'] = "Auto";
js_translations['N/A'] = "N/A";

js_translations['hidden_ssid'] = "Hidden SSID:";

function jsTranslate(word)
{
	if (js_translations[word])
	{
		return js_translations[word];
	}
	return word;
}