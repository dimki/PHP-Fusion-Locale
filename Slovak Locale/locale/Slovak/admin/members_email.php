<?php
//Slovak/admin/members_email.php for 7.02.01 OK
$locale['email_create_subject'] = "��et vytvoren�";
$locale['email_create_message'] = "Ahoj [USER_NAME],\n
V� ��et na ".$settings['sitename']." bol vytvoren�.\n
Pre prihl�senie pou�ite nasledovn� �daje:\n
Meno: [USER_NAME]\n
Heslo: [PASSWORD]\n\n
s pozdravom,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "��et aktivovan�";
$locale['email_activate_message'] = "Ahoj [USER_NAME],\n
V� ��et na ".$settings['sitename']." bol aktivovan�.\n
M��ete sa prihl�si� pomocou v�ho mena a hesla.\n\n
s pozdravom,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reaktiv�ciu ��tu po�aduje ".$settings['sitename'];
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],\n
Uplynulo ".$settings['deactivation_period']." dn� od v�ho posledn�ho prihl�senia na ".$settings['sitename'].". Boli ste ozna�en� ako neakt�vny, ale �daje v�ho ��tu ost�vaj� nezmenen�.\n
Na reaktiv�ciu v�ho ��tu kliknite na tento odkaz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
s pozdravom,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "V� ��et na ".$settings['sitename']." bol zabanovan�";
$locale['email_ban_message'] = "Ahoj [USER_NAME],\n
V� ��et ".$userdata['user_name']." na ".$settings['sitename']." bol zabanovan� z t�chto d�vodov:\n
[REASON].\n
Ak chcete viac inform�ci� oh�adne tohto banu, pros�m kontaktujte hlavn�ho administr�tora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "V� ��et na ".$settings['sitename']." bol zabanovan�";
$locale['email_secban_message'] = "Ahoj [USER_NAME],\n
V� ��et ".$userdata['user_name']." na ".$settings['sitename']." bol zabanovan�, preto�e niektor� vami vykonan� akcie boli pova�ovan� za bezpe�nostn� hrozbu pre web.\n
Ak chcete viac inform�ci� oh�adne tohto bezpe�nostn�ho banu, pros�m kontaktujte hlavn�ho administr�tora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "V� ��et na ".$settings['sitename']." bol pozastaven�";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],\n
V� ��et ".$userdata['user_name']." na ".$settings['sitename']." bol pozastaven� od [DATE] (site time) z t�chto d�vodov:\n
[REASON].\n
Ak chcete viac inform�ci� oh�adne tohto pozastavenia ��tu, pros�m kontaktujte hlavn�ho administr�tora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>