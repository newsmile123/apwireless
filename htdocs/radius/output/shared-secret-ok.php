<?php
session_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
rad_recv:  <?php echo $_SESSION['radius']['nas-ip']?>:<?php echo $_SESSION['radius']['port']?>, id=2, length=90
       <br> User-Name = <?php echo $_SESSION['radius']['user']  ?></br>
       <br> NAS-IP-Address = <?php echo $_SESSION['radius']['nas-ip']?></br>
       <br> NAS-Port = 1</br>
       <br> NAS-Identifier = "Vasco Radius Simulator" </br>
       <br> User-Password = <?php echo $_SESSION['radius']['pass']?></br>
       <br> Calling-Station-Id = "29513"</br>
Processing the authorize section of radiusd.conf
modcall: entering group authorize for request 1
modcall[authorize]: module "preprocess" returns ok for request 1
radius_xlat:  '../var/log/radius/radacct/ <?php echo $_SESSION['radius']['nas-ip']?>/auth-detail-20140628.log'
rlm_detail: ../var/log/radius/radacct/%{Client-IP-Address}/auth-detail-%Y%m%d.lo
g expands to ../var/log/radius/radacct/ <?php echo $_SESSION['radius']['nas-ip']?>/auth-detail-20140628.log
modcall[authorize]: module "auth_log" returns ok for request 1
modcall[authorize]: module "chap" returns noop for request 1
modcall[authorize]: module "mschap" returns noop for request 1
rlm_realm: No '@' in User-Name = "<?php echo $_SESSION['radius']['user']  ?>", looking up realm NULL
rlm_realm: No such realm "NULL"
modcall[authorize]: module "suffix" returns noop for request 1
rlm_eap: No EAP-Message, not doing EAP
modcall[authorize]: module "eap" returns noop for request 1
users: Matched entry DEFAULT at line 170
modcall[authorize]: module "files" returns ok for request 1
rlm_pap: Found existing Auth-Type, not changing it.
modcall[authorize]: module "pap" returns noop for request 1
modcall: leaving group authorize (returns ok) for request 1
rad_check_password:  Found Auth-Type Accept
rad_check_password: Auth-Type = Accept, accepting the user

<H4><b>Login OK: [<?php echo $_SESSION['radius']['user']  ?>/<?php echo $_SESSION['radius']['pass']?>] (from client localhost port 1 cli 29513)</H4></b>

Processing the post-auth section of radiusd.conf
modcall: entering group post-auth for request 1
radius_xlat:  '../var/log/radius/radacct/<?php echo $_SESSION['radius']['nas-ip']?>/reply-detail-20140628.log'
rlm_detail: ../var/log/radius/radacct/%{Client-IP-Address}/reply-detail-%Y%m%d.l
log expands to ../var/log/radius/radacct/<?php echo $_SESSION['radius']['nas-ip']?>/reply-detail-20140628.log
modcall[post-auth]: module "reply_log" returns ok for request 1
modcall: leaving group post-auth (returns ok) for request 1
<H4><b>Sending Access-Accept of id 2 to <?php echo $_SESSION['radius']['nas-ip']?> port <?php echo $_SESSION['radius']['port']?></H4></b>
Finished request 1
Going to the next request
--- Walking the entire request list ---






</body>
</html>