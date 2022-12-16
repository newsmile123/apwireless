var reload_timeout=0;function refreshStatus(c,e,b){if(c==null){return handleError(b,e,null)}var a=(c.wireless.mode=="ap");setOperationMode(c);update_basic(c);update_polling(a,c.wireless.polling,c.wireless);update_misc(c);update_ifinfo(c);update_antenna(c.wireless.antenna);update_chains(c.wireless.chains);if(global.has_gps){update_gps(c.gps)}if(document.getElementById("threeg_info")){update_threeg(c.threeg)}if(document.getElementById("airgw_info")){update_airgw(c.airgw)}}function handleError(b,c,a){if(b&&b.status!=200&&b.status!=0){window.location.reload()}}function reloadStatus(){$.ajax({url:"status.cgi",cache:false,dataType:"json",success:refreshStatus,error:handleError,complete:function(b,a){if(reload_timeout){clearTimeout(reload_timeout)}reload_timeout=setTimeout(reloadStatus,2000)}});return false}function getIface(a,b){var c=$.grep(a.interfaces,function(d){return d.ifname==b});return c.length>0?c[0]:null}function setOperationMode(p){var e=p.wireless;var l=getIface(p,"ath0");var g=p.airview;var n=p.host.netrole;var k=p.services;var d=p.firewall;var m=(e.mode=="ap");var a=l.enabled?getModeString(m,e.wds,e.aprepeater):l10n_get("Disabled");var j;if(g.enabled==1){old_mode_string=a;a=l10n_get("Spectral Analyzer");if(g.status.active_connections>0){j=l10n_get("Active")+" - "+g.status.active_connections+" "+l10n_get("clients")}else{if(g.watchdog.seconds_to_exit>0){j=l10n_get("Idle for")+" "+g.watchdog.seconds_idle+l10n_get("s")+".  "+l10n_get("Back to")+" "+old_mode_string+" "+l10n_get("in")+" "+g.watchdog.seconds_to_exit+l10n_get("s")}else{j=l10n_get("Switching back to")+" "+old_mode_string}}}else{j=""}var o=false,c=false;switch(n){case"bridge":netmodestr=l10n_lang.Bridge;c=true;break;case"router":netmodestr=l10n_lang.Router;break;case"soho":netmodestr=l10n_lang["SOHO Router"];o=true;break;case"3g":netmodestr=l10n_lang["3G Router"];break}$("#netmode").text(netmodestr);$("#wmode").text(a);$("#astatus").text(j);$("#astatusinfo").toggle(j!="");$(".apinfo").toggle(m);$(".stainfo").toggle(!m);$(".bridge").toggle(c);$(".router").toggle(!c);$("#wanmac").toggle(o);$("#dhcpc_info").toggle(1==k.dhcpc);$("#dhcp_leases").toggle(1==k.dhcpd);$("#ppp_info").toggle(1==k.pppoe);$("#a_stainfo").attr("href","stainfo.cgi?ifname="+global.wlan_iface+"&sta_mac="+e.apmac+"&mode=ap");$("#a_fw").attr("href","fw.cgi?netmode="+n);var h=(e.chanbw==0)?e.chwidth:e.chanbw;if(e.cwmmode==1){var b="";if(global.has_ht40){b=l10n_get("Auto")+" "}if((e.rstatus==1)&&(e.chanbw==0)){b+="20 / 40"}else{b+=h}h=b}if(l.enabled){$("#wd").text(h+" MHz");setExtendedChannel(e.opmode)}else{$("#wd").text("-");$("#ext_chan").hide()}var f=!c?d.iptables:d.ebtables;$("#fwall").toggle(f==1);$(".gpsinfo").toggle(global.has_gps&&p.gps.status!=0)}function refreshContent(a,b){autoLogout.start(global.timeout);reloadStatus();if(a.indexOf("?")>0){a=a+"&id="}else{a=a+"?id="}$("#extraFrame").load(a+(new Date().getTime()),b,function(d,c,e){if(e&&e.status!=200&&e.status!=0){window.location.reload();return}$.ready()});return false}function format_rate(a){return parseInt(a)>0?""+a+" Mbps":"-"}function format_ccq(a){if(!a){return"-"}var b=(a%10!=0)?1:0;return""+toFixed(a/10,b)+" %"}function strip_fwversion(c){if(c.indexOf("-")>0){var a=c.split(".");if(a.length>3){var b="";for(i=0;i<a.length-3;i++){b+=a[i]+"."}b+=a[i];return b}}return c}function format_freq(a){return(a.dfs==0)?""+a.frequency:""+a.frequency+" (DFS)"}function update_basic(d){var e=d.host;var b=d.wireless;var h=getIface(d,"ath0");$("#signalinfo .switchable").toggle(b.rstatus==5);updateSignalLevel(b.signal,b.rssi,b.noisef,b.chwidth,b.rx_chainmask,b.chainrssi,b.chainrssiext);if($("#hostname").text()!=e.hostname){$("#hostname").text(e.hostname)}var a=strip_fwversion(e.fwversion);if($("#fwversion").text()!=a){$("#fwversion").text(a)}if(b.mode=="ap"&&b.hide_essid==1){$("#essid_label").text(l10n_get("Hidden SSID"))}var g=(b.apmac!="00:00:00:00:00:00")&&(b.mode=="ap"||b.rstatus==5);if(g){if($("#apmac").text()!=b.apmac){$("#apmac").text(b.apmac)}}else{$("#apmac").text(l10n_get("Not Associated"))}if(h.enabled){if($("#essid").text()!=b.essid){$("#essid").text(b.essid)}var f=format_freq(b);if($("#frequency").text()!=f){$("#frequency").text(f)}if($("#channel").text()!=b.channel){$("#channel").text(b.channel)}var c=format_rate(b.txrate);if($("#txrate").text()!=c){$("#txrate").text(c)}c=format_rate(b.rxrate);if($("#rxrate").text()!=c){$("#rxrate").text(c)}if($("#count").text()!=" "+b.count){$("#count").text(" "+b.count)}}else{$("#frequency").text("-");$("#essid").text("-");$("#channel").text("-");$("#txrate").text("-");$("#rxrate").text("-");$("#count").text("-")}update_ack(d,h)}function update_ack(e,g){var b=e.wireless;if((b.polling.enabled==0||b.polling.noack==0)&&g.enabled){var f=(b.distance<150)?150:b.distance;var c=toFixed(f/1000,1);var a=toFixed(f/1609.344,1);var d=[a,"miles","("+c,"km)"];$("#ack").text(d.join(" "))}else{$("#ack").text("-")}}function prio2text(b){var a=l10n_get("None");switch(b){case 0:a=l10n_get("High");break;case 1:a=l10n_get("Medium");break;case 2:a=l10n_get("Low");break}return a}function update_polling(d,c,a){if(c.enabled>0){$("#polling").text(l10n_get("Enabled"));var b=global.chain_count;if(parseInt(b)==1&&c.capacity<=50){$("#amcborder").addClass("halfborder")}$(".pollinfo").show();$(".stapollinfo").toggle(!d);$("#airselectinfo").toggle(d);if(c.airselect>0){$("#airselect").text(l10n_get("Enabled"));$(".airselectinfo").show();$("#airselectinterval").text(c.airselect_interval+" ms")}else{$("#airselect").text(l10n_get("Disabled"));$(".airselectinfo").hide()}}else{$("#polling").text(d?l10n_get("Disabled"):"-");$(".pollinfo").hide();$(".stapollinfo").hide();$("#airselectinfo").hide()}if(a.apmac=="00:00:00:00:00:00"||0==a.count){c.quality=0;c.capacity=0}$("#pollprio").text(prio2text(c.priority));$("#amq").text(c.quality);$("#amc").text(c.capacity);update_meter("amqbar",c.quality,100);update_meter("amcbar",c.capacity,100);if(c.enabled>0&&d&&global.has_gps){switch(c.airsync_mode){case 1:$("#airsyncstatus").text(c.airsync_connections+" "+l10n_get("Peer(s)"));break;case 2:if(c.airsync_connections){$("#airsyncstatus").text(l10n_get("Connected"))}else{$("#airsyncstatus").text(l10n_get("Not Connected"))}break;case 0:default:$("#airsyncstatus").text(l10n_get("Disabled"));break}$("#airsyncinfo").show()}else{$("#airsyncinfo").hide()}}function translate_security(b){var a=global.security;if(a.length==0){a=b}return l10n_get(a)}function update_misc(b){var c=getIface(b,"ath0");$("#security").text(c.enabled?translate_security(b.wireless.security):"-");$("#qos").text(b.wireless.qos);var a=secsToCountdown(b.host.uptime,l10n_get("day"),l10n_get("days"));$("#uptime").text(a);$("#ccq").text(format_ccq(b.wireless.ccq));$("#date").text(b.host.time);if(b.genuine&&b.genuine.length){$("#logo_img").attr("src",b.genuine);$("#logo_info").show()}else{$("#logo_info").hide()}}function get_eth_str(b){if(b&&b.plugged!=0){if(b.speed>0){var a=""+b.speed+"Mbps";if(b.duplex==1){a+="-"+l10n_get("Full")}else{if(b.duplex==0){a+="-"+l10n_get("Half")}}return a}else{return l10n_get("Plugged")}}else{return l10n_get("Unplugged")}}function add_ifinfo(c,a,b){c.push('<div class="row">');c.push('<span class="label">'+a+"</span>");c.push('<span class="value">'+b+"</span>");c.push("</div>")}function update_ifinfo(c){var e=[];var g=getIface(c,"ath0");if(g){add_ifinfo(e,devname2uidevname(g.ifname)+" MAC",g.hwaddr)}var f=$.grep(c.interfaces,function(h){return h.ifname.indexOf("eth")==0});$.each(f,function(h,j){add_ifinfo(e,devname2uidevname(j.ifname)+" MAC",j.hwaddr)});var a,d;if(f.length==1){a=devname2uidevname(f[0].ifname);d=get_eth_str(f[0].status)}else{if(f.length>1){a=devname2uidevname(f[0].ifname)+" / "+devname2uidevname(f[1].ifname);d=get_eth_str(f[0].status)+" / "+get_eth_str(f[1].status)}}add_ifinfo(e,a,d);var b=e.join("");if($("#ifinfo").html()!=b){$("#ifinfo").empty();$("#ifinfo").append(b)}}function update_antenna(a){$("#antenna").text(l10n_get(a))}function update_chains(a){$("#chains").text(a)}function showAction(a){if(a.value==""){return}openPage(a.value,700,200);a.selectedIndex=0}function getModeString(c,d,b){var a;if(c){if(d){a=b?l10n_get("AP-Repeater"):l10n_get("Access Point WDS")}else{a=l10n_get("Access Point")}}else{a=d?l10n_get("Station WDS"):l10n_get("Station")}return a}function setExtendedChannel(a){var b=0;if(b=/minus$/.test(a)){$("#ext_chan").html("&nbsp;("+l10n_get("Lower")+")")}else{if(b=/plus$/.test(a)){$("#ext_chan").html("&nbsp;("+l10n_get("Upper")+")")}}$("#ext_chan").toggle(b)}function get_gps_quality(b){if(b.fix==0){return 0}var c=[[20,10],[15,20],[10,30],[7,40],[5,50],[3.5,60],[2,70],[1.5,80],[1,90],[0,100]];for(var a in c){if(b.dop>c[a][0]){return c[a][1]}}return 0}function update_gps(b){$(".gpsinfo").toggle(b.status!=0);if(b.status!=0){$("#gps_status").text(l10n_get("Enabled"));var d=get_gps_quality(b);$("#gps_qual").text(d);update_meter("gpsbar",d,100);var c=(b.fix!=0)?'<a target="_blank" href=http://maps.google.com/maps?q='+b.lat+","+b.lon+">"+b.lat+" / "+b.lon+"</a>":"- / -";$("#gps_coord").html(c);var a=(b.fix!=0)?""+Math.round(b.alt)+" m":"-";$("#gps_alt").text(a)}else{$("#gps_status").text(l10n_get("Disabled"))}}function update_threeg(a){if(a!=undefined){$("#threeg_info").show();$("#threeg_product").html('<img id="threeg_image" src="/140205.1824/images/'+a.image+'" alt="'+a.product+'">');$("#threeg_image").error(function(){$("#threeg_product").html(a.product)});switch(a.sim_status){case 0:$("#threeg_signal_row").show();$("#threeg_status_row").hide();break;case 1:$("#threeg_signal_row").hide();$("#threeg_status_row").show();$("#threeg_status").text(l10n_get("Please insert SIM card"));break;case 2:$("#threeg_signal_row").hide();$("#threeg_status_row").show();$("#threeg_status").text(l10n_get("SIM PIN required"));break;case 3:$("#threeg_signal_row").hide();$("#threeg_status_row").show();$("#threeg_status").text(l10n_get("SIM Card Blocked"));break}update_meter("threeg_bar",a.signal,100)}else{$("#threeg_status_row").hide();$("#threeg_signal_row").hide();if(global.is_3g_product){$("#threeg_product").text(l10n_get("Not detected"))}else{$("#threeg_info").hide()}}}function update_airgw(a){if(a!=undefined){$("#airgw_info").show()}else{$("#airgw_info").hide()}}var autoLogout=function(){var b=15*1000;var a=0;return{start:function(c){if(a){clearTimeout(a)}if(c){b=c*1000}a=setTimeout(function(){$.ajax({url:"/logout.cgi",data:{redirect:"false"},cache:false,success:function(e,d){window.location.reload()}})},b)},stop:function(){if(a){clearTimeout(a)}}}}();