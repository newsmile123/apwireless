function openPage(c,e,a){if(e==undefined){e=600}if(a==undefined){a=400}var b=screen.width/2-e/2;var d=screen.height/2-a/2;var g="location=no,status=no,toolbar=no,scrollbars=yes,resizable=yes";g+=",width="+e+",height="+a;g+=",left="+b+",top="+d;var f=window.open(c,"_blank",g);return false}function selectOption(a,b){if(a==null||b==null){return null}var d=typeof b=="string"?b:b.toString();for(i=0;i<a.options.length;i++){var c=a.options[i];if(c.value.toUpperCase()==d.toUpperCase()){c.selected=true;return c}}return null}function cache_images(b){if(document.images&&b){for(i=0;i<b.length;++i){var a=new Image();a.src="/140205.1824/images/"+b[i]}}}function addOption(a,c,b){new_option=new Option(c,b);a.options[a.options.length]=new_option;return new_option}function selectRadio(c,e){var b=document.getElementsByName(c);if(b==null){return}var d=0;for(;d<b.length;++d){var f=b[d];if(f.value==e){f.checked=true}}}function getRadioValue(c){var b=document.getElementsByName(c);if(b==null){return""}var d=0;for(;d<b.length;++d){var e=b[d];if(e.checked){return e.value}}return""}function statusClicked(f,b){var a=true;if(!f){return}if(f.checked){a=false}for(x=0;x<b.length;++x){var e=document.getElementById(b[x]);if(e){e.disabled=a}}}function changeDisplay(c,a){var b=document.getElementById(c);if(b){b.style.display=a}}function changeDisplays(a,b){if(a==null){return}for(x=0;x<a.length;++x){changeDisplay(a[x],b)}}function setDisabled(a,b){if(!a){return false}a.disabled=b;return true}function add_select_enter_submit(c,b){var a=document.getElementById(c);if(!a){return false}a.onkeydown=function(d){d=d||window.event;if(d.keyCode==13){b();return false}}}function showTool(b){if(b.value.length==0){return}var a=360;var c=700;if(b.value.indexOf("survey.php")!=-1){c+=100}else{if(b.value.indexOf("pingtest.php")!=-1){a+=10}else{if(b.value.indexOf("discovery.php")!=-1){a=620;c=900}else{if(b.value=="airview.php"){airview.start()}}}}openPage(b.value,c,a);b.selectedIndex=0}function secsToCountdown(f,h,c){var g=(f/86400)|0;var b=""+(((f/3600)|0)%24);var e=""+(((f/60)|0)%60);var d=""+(f%60);var a=(b.length<2?"0":"")+b+":"+(e.length<2?"0":"")+e+":"+(d.length<2?"0":"")+d;if(g>0){a=""+g+" "+((g==1)?h:c)+" "+a}return a}function parseUri(e){var d=parseUri.options,a=d.parser[d.strictMode?"strict":"loose"].exec(e),c={},b=14;while(b--){c[d.key[b]]=a[b]||""}c[d.q.name]={};c[d.key[12]].replace(d.q.parser,function(g,f,h){if(f){c[d.q.name][f]=h}});return c}parseUri.options={strictMode:false,key:["source","protocol","authority","userInfo","user","password","host","port","relative","path","directory","file","query","anchor"],q:{name:"queryKey",parser:/(?:^|&)([^&=]*)=?([^&]*)/g},parser:{strict:/^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,loose:/^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/}};function IPList(c,b,a){this.selectId=c;this.inputId=b;this.imgId=a;this.started=false;this.conn=null;var e=this;this.refreshStarted=function(){var f=document.getElementById(e.selectId);if(f){setDisabled(f,true)}f=document.getElementById(e.imgId);if(f){f.src="/140205.1824/images/loading.gif"}e.started=true};this.refreshStopped=function(){var f=document.getElementById(e.selectId);if(f){setDisabled(f,false)}f=document.getElementById(e.imgId);if(f){f.src="/140205.1824/images/refresh.png"}e.started=false};this.triggerManual=function(){var f=document.getElementById(e.selectId);setDisabled(document.getElementById(e.inputId),(f.selectedIndex!=0))};this.update=function(){if(e.started){return false}e.refreshStarted();if(this.conn){this.conn.abort()}else{this.conn=new ajax()}var g=document.getElementById(e.selectId);var f=g.options[g.selectedIndex];if(!this.conn.get("ipscan.php?a="+new Date().getTime(),function(h){var l=document.getElementById(e.selectId);if(l){l.length=1;if(h.status==200){var j=h.responseText.split("\n");for(i=0;i<j.length;++i){var k=j[i];if(k.length>0){addOption(l,k,k)}}}selectOption(l,f.value)}e.refreshStopped()})){e.refreshStopped()}return true};this.update();this.triggerManual();var d=document.getElementById(this.selectId);d.onchange=this.triggerManual;d=document.getElementById(this.imgId);d.onclick=this.update;return this}var toFixed=(function(){return b;function b(f,e){var d=c(Math.abs(f),e);return(f<0?"-":"")+d}function c(d,h){var f,g=Math.round(d*Math.pow(10,h))+"",j,e;if(/\D/.test(g)){return""+d}g=a(g,1+h,"0");j=g.substring(0,f=(g.length-h));e=g.substring(f);if(e){e="."+e}return j+e}function a(d,e,g){var f=d+"";while(f.length<e){f=g+f}return f}})();var fwUpdateCheck=(function(){return a;function a(h,k){var e=$.now();var d=1000*60*60*24;var f=$.cookie("last_check");var j=h||(k.enabled&&(!f||e-f>d));if(j){$.cookie("last_check",e,{path:"/",expires:1});var g={};if(h){g.force="yes"}$.ajax({type:"GET",url:"/update_check.php",data:g,dataType:"json",cache:false,success:function(l){if(!l||!l.update||l.update!="true"){return c(h,k)}if(!l.date||!l.version){return c(h,k)}var n=$.cookie("hide_update");if(!h&&(n&&l.date<=n)){return}var m=new RegExp("\\{1\\}","g");var o=k.fw_str.replace(m,l.version);b(l.date,o,k.dl_str,l);$("#notify-slide-container").slideDown("slow");$("#start-download").show()}})}}function c(d,e){if(!d){return}b(null,e.no_str,e.dl_str);$("#notify-slide-container").slideDown("slow");$("#start-download").hide()}function b(d,h,f,e){$("#notify-slide-container").remove();var g=[];g.push('<div id="notify-slide-container">');g.push('<div id="notify-slide-content" class="rounded-corners">');g.push('<div id="notify-slide-text">');g.push("<p>"+h+"</p>");g.push("<p>"+f+"</p>");g.push('<p align="right">');g.push('<input id="start-download" type="button" value="'+jsTranslate("Download")+'">');g.push('<input id="hide-notify" type="button" value="'+jsTranslate("Dismiss")+'">');g.push("</p>");g.push("</div>");g.push("</div>");g.push("</div>");$("body").append(g.join(""));$("#hide-notify").click(function(){$("#notify-slide-container").slideUp("slow");if(d){$.cookie("hide_update",d)}});$("#start-download").click(function(){$("#hide-notify").click();$.blockUI({message:"<h3 id='dl_msg'>"+jsTranslate("Please Wait. Uploading Firmware...")+"</h3>"});var k={action:"download"};var j=-1;if(e){if(e.url){k.fw_url=e.url}if(e.checksum){k.fw_checksum=e.checksum}}$.ajax({type:"GET",url:"/dl-fw.php",data:k,dataType:"json",cache:false,success:function(l){if(l){if(l.status==0){$("#dl_msg").text(jsTranslate("Firmware uploaded"));j=100}else{$("#dl_msg").text(jsTranslate(l.message));j=100}}},complete:function(){if(j>=100){window.location="/system.php"}},error:function(l,n,m){if(n!="timeout"){alert("Error : "+n);$.unblockUI()}if(j>=100){window.location="/system.php"}},timeout:1000*60});$.ajax({type:"GET",url:"/dl-fw.php",data:{action:"progress"},dataType:"json",cache:false,success:function(l){if(j<100&&l){if(l.status==0){$("#dl_msg").text(jsTranslate("Please Wait. Uploading Firmware...")+l.percent+"%");j=l.percent;$.ajax(this)}else{if(j=-1){$.ajax(this)}}}else{j=100}},error:function(l,n,m){if(j<100){$.ajax(this)}},timeout:5000})})}})();(function(b){b.check=function(){if($.cookie("show_security_warning")=="true"){a();$("#warning-dlg").slideDown("slow")}};function a(){$("#warning-dlg").remove();var c=[];c.push('<div id="warning-dlg" class="slide-container">');c.push('<div class="slide-content rounded-corners" style="background: #ff8a42;">');c.push('<div class="slide-text">');c.push("<p>"+jsTranslate("You are using default Administrator password.")+"</p>");c.push("<p>"+jsTranslate('Please change it in <a href="/system.php">System</a> page.')+"</p>");c.push('<p align="right">');c.push('<input id="hide-warning" type="button" value="'+jsTranslate("Dismiss")+'">');c.push("</p>");c.push("</div>");c.push("</div>");c.push("</div>");$("body").append(c.join(""));$("#hide-warning").click(function(){$("#warning-dlg").slideUp("slow");$.cookie("show_security_warning",null)})}}(window.security=window.security||{}));(function(c){c.start=function(){if(typeof $.blockUI=="undefined"){$.getScript("js/jquery.blockUI.js",d)}else{d()}};var b=0;function d(){b=0;$.blockUI({message:"<h3>Running airView. Please Wait...</h3>"});setTimeout(a,1000)}function a(){$.ajax({type:"GET",url:"air-view.php",dataType:"json",cache:false,success:function(e){if(b++<5||e.airview.enabled){setTimeout(a,1000)}else{$.unblockUI()}},error:function(){if(b++<5){setTimeout(a,1000)}else{$.unblockUI()}},timeout:2000})}}(window.airview=window.airview||{}));function showUFLA(b,a){var d=$("<div/>").css({height:"350px",overflow:"auto"}).load(b+(b.indexOf("?")>0?"&_":"?_")+(new Date().getTime()));var c=new Object();c[a]=function(){$(this).dialog("close")};d.attr("title",jsTranslate("UBIQUITI FIRMWARE LICENSE AGREEMENT"));d.dialog({bgiframe:true,modal:true,dialogClass:"help",width:720,resizable:false,height:350,buttons:c}).parent().wrapAll('<div class="help"></div>');return false};