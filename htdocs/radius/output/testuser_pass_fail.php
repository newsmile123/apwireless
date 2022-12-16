<?php
session_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
Waking up in 6 seconds...
--- Walking the entire request list ---
Cleaning up request 0 ID 20 with timestamp 53ae970c
Nothing to do.  Sleeping until we see a request.
rad_recv: Access-Request packet from host <?php echo $_SESSION['radius']['nas-ip']?>:<?php echo $_SESSION['radius']['port']?>, id=21, length=92
     <br> User-Name = <?php echo $_SESSION['radius']['user']  ?></br>
     <br> NAS-IP-Address = <?php echo $_SESSION['radius']['nas-ip']?></br>
     <br> NAS-Port = 4 </br>
     <br> NAS-Identifier = "Vasco Radius Simulator" </br>
     <br> User-Password = <?php echo $_SESSION['radius']['pass']?></br>
     <br> Calling-Station-Id = "29513"</br>
Processing the authorize section of radiusd.conf
modcall: entering group authorize for request 1
modcall[authorize]: module "preprocess" returns ok for request 1
radius_xlat:  '../var/log/radius/radacct/<?php echo $_SESSION['radius']['nas-ip']?>/auth-detail-20140628.log'
rlm_detail: ../var/log/radius/radacct/%{Client-IP-Address}/auth-detail-%Y%m%d.lo
g expands to ../var/log/radius/radacct/<?php echo $_SESSION['radius']['nas-ip']?>/auth-detail-20140628.log
modcall[authorize]: module "auth_log" returns ok for request 1
modcall[authorize]: module "chap" returns noop for request 1
modcall[authorize]: module "mschap" returns noop for request 1
rlm_realm: No '@' in User-Name = <?php echo $_SESSION['radius']['user']  ?>, looking up realm NULL
rlm_realm: No such realm "NULL"
modcall[authorize]: module "suffix" returns noop for request 1
rlm_eap: No EAP-Message, not doing EAP
modcall[authorize]: module "eap" returns noop for request 1
users: Matched entry DEFAULT at line 171
modcall[authorize]: module "files" returns ok for request 1
rlm_pap: Found existing Auth-Type, not changing it.
modcall[authorize]: module "pap" returns noop for request 1
leaving group authorize (returns ok) for request 1</p>
<H4><b>rad_check_password:  Found Auth-Type Reject</b></H4>
<H4><b>rad_check_password: Auth-Type = Reject, rejecting user</b></H4>
<H4><b>Failed to validate the user.</b></H4>
<H4><b>Login incorrect: [<?php echo $_SESSION['radius']['user']  ?>/<?php echo $_SESSION['radius']['pass']?>] </b></H4>
Finished request 1
Going to the next request
--- Walking the entire request list ---
Waking up in 1 seconds...
--- Walking the entire request list ---
Waking up in 1 seconds...
--- Walking the entire request list ---
Sending Access-Reject of id 21 to <?php echo $_SESSION['radius']['nas-ip']?> port <?php echo $_SESSION['radius']['port']?>
</br>Waking up in 4 seconds...</br>


</body>
</html>