<?php
//Slovak/reactivate.php 7.02.01 OK
// Error messages
$locale['500'] = "Do�lo k chybe";
$locale['501'] = "Reaktiva�n� link u� nie je platn�.<br><br>
Kontaktujte hlavn�ho administr�tora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete po�iada� o ru�n� reaktiv�ciu.";
$locale['502'] = "Reaktiva�n� link je chybn�!<br><br>
Kontaktujte hlavn�ho administr�tora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete po�iada� o ru�n� reaktiv�ciu.";
$locale['503'] = "Reaktiva�n� link nemohol reaktivova� v� ��et.<br>
Mo�no, �e v� ��et u� bol re-aktivovan� a v tom pr�pade by ste mali by� schopn� <a href='".$settings['siteurl']."login.php'>prihl�si� sa tu</a>.<br><br>
Ak sa nem��ete prihl�si�, kontaktujte hlavn�ho administr�tora cez <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> ak chcete po�iada� o ru�n� reaktiv�ciu.";
// Send confirmation mail
$locale['504'] = "��et reaktivovan� pre ".$settings['sitename'];
$locale['505'] = "Ahoj [USER_NAME],\n
V� ��et pre ".$settings['sitename']." bol reaktivovan�. D�fame, �e n�s budete nav�tevova� �astej�ie.\n\n
s pozdravom,\n\n
".$settings['siteusername'];
$locale['506'] = "Reaktivovan� u��vate�.";
?>       