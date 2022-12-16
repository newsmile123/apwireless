<?php
session_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
Starting - reading configuration files ...
reread_config:  reading radiusd.conf
Config:   including file: ../etc/raddb/proxy.conf
Config:   including file: ../etc/raddb/clients.conf
Config:   including file: ../etc/raddb/snmp.conf
Config:   including file: ../etc/raddb/eap.conf
Config:   including file: ../etc/raddb/sql.conf
 main: prefix = ".."
 main: localstatedir = "../var"
 main: logdir = "../var/log/radius"
 main: libdir = "../lib"
 main: radacctdir = "../var/log/radius/radacct"
 main: hostname_lookups = no
 main: max_request_time = 30
 main: cleanup_delay = 5
 main: max_requests = 1024
 main: delete_blocked_requests = 0
 main: port = 0
 main: allow_core_dumps = no.
 main: log_stripped_names = yes
 main: log_file = "../var/log/radius/radius.log"
 main: log_auth = yes
 main: log_auth_badpass = yes
 main: log_auth_goodpass = yes
 main: pidfile = "../var/run/radiusd/radiusd.pid"
 main: user = "(null)"
 main: group = "(null)"
 main: usercollide = no
 main: lower_user = "no"
 main: lower_pass = "no"
 main: nospace_user = "no"
 main: nospace_pass = "no"
 main: checkrad = "../sbin/checkrad"
 main: proxy_requests = yes
 proxy: retry_delay = 5
 proxy: retry_count = 3
 proxy: synchronous = no
 proxy: default_fallback = yes
 proxy: dead_time = 120
 proxy: post_proxy_authorize = no
 proxy: wake_all_if_all_dead = no
 security: max_attributes = 200
 security: reject_delay = 1
 security: status_server = no
 main: debug_level = 0
read_config_files:  reading dictionary
read_config_files:  reading naslist
Using deprecated naslist file.  Support for this will go away soon.
read_config_files:  reading clients
read_config_files:  reading realms
radiusd:  entering modules setup
Module: Library search path is ../lib
Module: Loaded exec
 exec: wait = yes
 exec: program = "(null)"
 exec: input_pairs = "request"
 exec: output_pairs = "(null)"
 exec: packet_type = "(null)"
rlm_exec: Wait=yes but no output defined. Did you mean output=none?
Module: Instantiated exec (exec)
Module: Loaded expr
Module: Instantiated expr (expr)
Module: Loaded PAP
 pap: encryption_scheme = "crypt"
 pap: auto_header = yes
Module: Instantiated pap (pap)
Module: Loaded CHAP
Module: Instantiated chap (chap)
Module: Loaded MS-CHAP
 mschap: use_mppe = yes
 mschap: require_encryption = no
 mschap: require_strong = no
 mschap: with_ntdomain_hack = no
 mschap: passwd = "(null)"
 mschap: ntlm_auth = "(null)"
Module: Instantiated mschap (mschap)
Module: Loaded System
 unix: cache = no
 unix: passwd = "(null)"
 unix: shadow = "(null)"
 unix: group = "(null)"
 unix: radwtmp = "../var/log/radius/radwtmp"
 unix: usegroup = no
 unix: cache_reload = 600
Module: Instantiated unix (unix)
Module: Loaded eap
 eap: default_eap_type = "tls"
 eap: timer_expire = 60
 eap: ignore_unknown_eap_types = no
 eap: cisco_accounting_username_bug = no
rlm_eap: Loaded and initialized type md5
rlm_eap: Loaded and initialized type leap
 gtc: challenge = "Password: "
 gtc: auth_type = "PAP"
rlm_eap: Loaded and initialized type gtc
 tls: rsa_key_exchange = no
 tls: dh_key_exchange = yes
 tls: rsa_key_length = 512
 tls: dh_key_length = 512
 tls: verify_depth = 0
 tls: CA_path = "(null)"
 tls: pem_file_type = yes
 tls: private_key_file = "../etc/raddb/certs/FreeRADIUS.net/DemoCerts/FreeRADIUS
.net-Server.pem"
 tls: certificate_file = "../etc/raddb/certs/FreeRADIUS.net/DemoCerts/FreeRADIUS
.net-Server.crt"
 tls: CA_file = "../etc/raddb/certs/FreeRADIUS.net/DemoCerts/FreeRADIUS.net-CA.c
rt"
 tls: private_key_password = "demo"
 tls: dh_file = "../etc/raddb/certs/FreeRADIUS.net/DemoCerts/dh"
 tls: random_file = "../etc/raddb/certs/FreeRADIUS.net/DemoCerts/random"
 tls: fragment_size = 1024
 tls: include_length = yes
 tls: check_crl = no
 tls: check_cert_cn = "%{User-Name}"
 tls: cipher_list = "(null)"
 tls: check_cert_issuer = "(null)"
rlm_eap_tls: Loading the certificate file as a chain
WARNING: rlm_eap_tls: Unable to set DH parameters.  DH cipher suites may not wor
k!
WARNING: Fix this by running the OpenSSL command listed in eap.conf
rlm_eap: Loaded and initialized type tls
 ttls: default_eap_type = "md5"
 ttls: copy_request_to_tunnel = no
 ttls: use_tunneled_reply = yes
rlm_eap: Loaded and initialized type ttls
 peap: default_eap_type = "mschapv2"
 peap: copy_request_to_tunnel = no
 peap: use_tunneled_reply = no
 peap: proxy_tunneled_request_as_eap = yes
rlm_eap: Loaded and initialized type peap
 mschapv2: with_ntdomain_hack = no
rlm_eap: Loaded and initialized type mschapv2
Module: Instantiated eap (eap)
Module: Loaded preprocess
 preprocess: huntgroups = "../etc/raddb/huntgroups"
 preprocess: hints = "../etc/raddb/hints"
 preprocess: with_ascend_hack = no
 preprocess: ascend_channels_per_line = 23
 preprocess: with_ntdomain_hack = no
 preprocess: with_specialix_jetstream_hack = no
 preprocess: with_cisco_vsa_hack = no
 preprocess: with_alvarion_vsa_hack = no
Module: Instantiated preprocess (preprocess)
Module: Loaded detail
 detail: detailfile = "../var/log/radius/radacct/%{Client-IP-Address}/auth-detai
l-%Y%m%d.log"
 detail: detailperm = 511
 detail: dirperm = 493
 detail: locking = no
Module: Instantiated detail (auth_log)
Module: Loaded realm
 realm: format = "suffix"
 realm: delimiter = "@"
 realm: ignore_default = no
 realm: ignore_null = no
Module: Instantiated realm (suffix)
Module: Loaded files
 files: usersfile = "../etc/raddb/users"
 files: acctusersfile = "../etc/raddb/acct_users"
 files: preproxy_usersfile = "../etc/raddb/preproxy_users"
 files: compat = "no"
Module: Instantiated files (files)
Module: Loaded Acct-Unique-Session-Id
 acct_unique: key = "User-Name, Acct-Session-Id, NAS-IP-Address, Client-IP-Addre
ss, NAS-Port"
Module: Instantiated acct_unique (acct_unique)
 detail: detailfile = "../var/log/radius/radacct/%{Client-IP-Address}/detail-%Y%
m%d.log"
 detail: detailperm = 511
 detail: dirperm = 493
 detail: locking = no
Module: Instantiated detail (detail)
Module: Loaded Counter
 counter: filename = "../etc/raddb/db.daily"
 counter: key = "User-Name"
 counter: reset = "daily"
 counter: count-attribute = "Acct-Session-Time"
 counter: counter-name = "Daily-Session-Time"
 counter: check-name = "Max-Daily-Session"
 counter: allowed-servicetype = "Framed-User"
 counter: cache-size = 5000
rlm_counter: Counter attribute Daily-Session-Time is number 1830
rlm_counter: Current Time: 1403945302 [2014-06-28 12:48:22], Next reset 14039856
00 [2014-06-29 00:00:00]
rlm_counter: reset_db: Closing database
rlm_counter: reset_db: Opened new database
rlm_counter: add_defaults: Start
rlm_counter: DEFAULT1 set to 1403985600
rlm_counter: DEFAULT2 set to 1403945302
rlm_counter: add_defaults: End
rlm_counter: reset_db ended
Module: Instantiated counter (daily)
Module: Loaded radutmp
 radutmp: filename = "../var/log/radius/radutmp"
 radutmp: username = "%{User-Name}"
 radutmp: case_sensitive = yes
 radutmp: check_with_nas = yes
 radutmp: perm = 511
 radutmp: callerid = yes
Module: Instantiated radutmp (radutmp)
 detail: detailfile = "../var/log/radius/radacct/%{Client-IP-Address}/pre-proxy-
detail-%Y%m%d.log"
 detail: detailperm = 511
 detail: dirperm = 493
 detail: locking = no
Module: Instantiated detail (pre_proxy_log)
 detail: detailfile = "../var/log/radius/radacct/%{Client-IP-Address}/post-proxy
-detail-%Y%m%d.log"
 detail: detailperm = 511
 detail: dirperm = 493
 detail: locking = no
Module: Instantiated detail (post_proxy_log)
 detail: detailfile = "../var/log/radius/radacct/%{Client-IP-Address}/reply-deta
il-%Y%m%d.log"
 detail: detailperm = 511
 detail: dirperm = 493
 detail: locking = no
Module: Instantiated detail (reply_log)
Listening on authentication *:1812
Listening on accounting *:1813
Ready to process requests.
rad_recv: Access-Request packet from host 127.0.0.1:1052, id=1, length=90
   <br> User-Name = <?php echo $_SESSION['radius']['user']  ?></br>
   <br> NAS-IP-Address = <?php echo $_SESSION['radius']['nas-ip']?></br>
   <br> NAS-Port = 1</br>
   <br> NAS-Identifier = "Vasco Radius Simulator"</br>
   <br> User-Password = "\371\317\021-P\344\211e?v\2334\263\036\312\322"</br>
   <br> Calling-Station-Id = "29513"</br>
  Processing the authorize section of radiusd.conf
modcall: entering group authorize for request 0
modcall[authorize]: module "preprocess" returns ok for request 0
radius_xlat:  '../var/log/radius/radacct/<?php echo $_SESSION['radius']['nas-ip']?>/auth-detail-20140628.log'
rlm_detail: ../var/log/radius/radacct/%{Client-IP-Address}/auth-detail-%Y%m%d.lo
g expands to ../var/log/radius/radacct/127.0.0.1/auth-detail-20140628.log
modcall[authorize]: module "auth_log" returns ok for request 0
modcall[authorize]: module "chap" returns noop for request 0
modcall[authorize]: module "mschap" returns noop for request 0
rlm_realm: No '@' in User-Name = "<?php echo $_SESSION['radius']['user']  ?>", looking up realm NULL
rlm_realm: No such realm "NULL"
modcall[authorize]: module "suffix" returns noop for request 0
rlm_eap: No EAP-Message, not doing EAP
modcall[authorize]: module "eap" returns noop for request 0
users: Matched entry DEFAULT at line 170
modcall[authorize]: module "files" returns ok for request 0
rlm_pap: Found existing Auth-Type, not changing it.
modcall[authorize]: module "pap" returns noop for request 0
modcall: leaving group authorize (returns ok) for request 0
rad_check_password:  Found Auth-Type Accept
rad_check_password: Auth-Type = Accept, accepting the user
<H4><b>Login OK: [<?php echo $_SESSION['radius']['user']  ?>/\371\317\021-P\344\211e?v\2334\263\036\312\322] (from client localhost port 1 cli 29513)</H4></b>
Processing the post-auth section of radiusd.conf
modcall: entering group post-auth for request 0
radius_xlat:  '../var/log/radius/radacct/127.0.0.1/reply-detail-20140628.log'
rlm_detail: ../var/log/radius/radacct/%{Client-IP-Address}/reply-detail-%Y%m%d.l
og expands to ../var/log/radius/radacct/127.0.0.1/reply-detail-20140628.log
modcall[post-auth]: module "reply_log" returns ok for request 0
modcall: leaving group post-auth (returns ok) for request 0
<H4><b>Sending Access-Accept of id 1 to <?php echo $_SESSION['radius']['nas-ip']?> port <?php echo $_SESSION['radius']['port']?></H4></b>
Finished request 0
Going to the next request
--- Walking the entire request list ---
Waking up in 6 seconds...
--- Walking the entire request list ---
Cleaning up request 0 ID 1 with timestamp 53ae8646
Nothing to do.  Sleeping until we see a request.





</body>
</html>