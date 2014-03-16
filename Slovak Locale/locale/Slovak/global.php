<?php
/*
Slovak Language Fileset  global.php 7.02.01 OK
Translate control by Peter �eff (Marten)
Email: admin@phpfusion.sk
Web: http://www.phpfusion.sk
*/

// Locale Settings
setlocale(LC_ALL, 'sk_SK', 'slovak');
$locale['charset'] = "Windows-1250";
$locale['xml_lang'] = "sk";
$locale['tinymce'] = "sk";
$locale['phpmailer'] = "sk";

// Full & Short Months
$locale['months'] = "&nbsp|Janu�r|Febru�r|Marec|Apr�l|M�j|J�n|J�l|August|September|Okt�ber|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|M�j|J�n|J�l|Aug|Sept|Okt|Nov|Dec";

// Standard User Levels
$locale['user0'] = "Verejnos�";
$locale['user1'] = "U��vate�";
$locale['user2'] = "Administr�tor";
$locale['user3'] = "Hlavn� Administr�tor";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Anonym";
// Standard User Status
$locale['status0'] = "Aktivovan�";
$locale['status1'] = "Zabanovan�";
$locale['status2'] = "Neaktivovan�";
$locale['status3'] = "Pozastaven�";
$locale['status4'] = "Bezpe�nostn� BAN";
$locale['status5'] = "Zru�en�";
$locale['status6'] = "Anonym";
$locale['status7'] = "Deaktivovan�";
$locale['status8'] = "Neakt�vny";
// Forum Moderator Level(s)
$locale['userf1'] = "Moder�tor";
// Navigation
$locale['global_001'] = "Navig�cia";
$locale['global_002'] = "�iadne odkazy neboli definovan�";
// Users Online
$locale['global_010'] = "Kto je Online";
$locale['global_011'] = "Host� Online";
$locale['global_012'] = "U��vate�ov Online";
$locale['global_013'] = "�iadny u��vate� nie je Online";
$locale['global_014'] = "Registrovan� u��vatelia";
$locale['global_015'] = "Neaktivovan� u��vatelia";
$locale['global_016'] = "Najnov�� u��vate�";
// Forum Side panel
$locale['global_020'] = "T�my f�ra";
$locale['global_021'] = "Najnov�ie t�my";
$locale['global_022'] = "Najhor�cej�ie t�my";
$locale['global_023'] = "�iadne t�my";
// Comments Side panel
$locale['global_025'] = "Posledn� koment�re";
$locale['global_026'] = "�iadne koment�re";
// Articles Side panel
$locale['global_030'] = "Posledn� �l�nky";
$locale['global_031'] = "Neboli pridan� �iadne �l�nky";
// Downloads Side panel
$locale['global_032'] = "Posledn� s�bory na stiahnutie";
$locale['global_033'] = "�iadne s�bory na stiahnutie";
// Welcome panel
$locale['global_035'] = "Vitajte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Posledn� akt�vne t�my vo f�re";
$locale['global_041'] = "Moje t�my";
$locale['global_042'] = "Moje pr�spevky";
$locale['global_043'] = "Nov� pr�spevky";
$locale['global_044'] = "T�ma";
$locale['global_045'] = "Prezret�";
$locale['global_046'] = "Odpovede";
$locale['global_047'] = "Posledn� pr�spevok";
$locale['global_048'] = "F�rum";
$locale['global_049'] = "Pridan�";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Anketa";
$locale['global_052'] = "Presunul";
$locale['global_053'] = "Nezalo�ili ste e�te �iadne t�my.";
$locale['global_054'] = "Neposlali ste e�te �iadny pr�spevok do f�ra.";
$locale['global_055'] = "Bolo nap�san�ch %u nov�ch pr�spevkov, od va�ej poslednej n�v�tevy.";
$locale['global_056'] = "Moje sledovan� t�my";
$locale['global_057'] = "Nastavenie";
$locale['global_058'] = "Zastavi�";
$locale['global_059'] = "Nem�te �iadne sledovan� t�my.";
$locale['global_060'] = "Zastavi� sledovanie t�m?";
// News & Articles
$locale['global_070'] = "Pridal ";
$locale['global_071'] = "d�a ";
//$locale['global_072'] = "��tajte viac";
$locale['global_072'] = "<span class='blink'><span style='color:#f00'>��tajte viac</span><span style='color:#000'>��tajte viac</span><span style='color:#0c0'>��tajte viac</span></span>";
$locale['global_073'] = " Koment�rov";
$locale['global_073b'] = " Koment�rov";
$locale['global_074'] = " Pre��tan�";
$locale['global_075'] = "Vytla�i�";
$locale['global_076'] = "Upravi�";
$locale['global_077'] = "Novinky";
$locale['global_078'] = "�iadne novinky e�te neboli nap�san�";
$locale['global_079'] = "V ";
$locale['global_080'] = "Nekategorizovan�";
// Page Navigation
$locale['global_090'] = "Sp�";
$locale['global_091'] = "�alej";
$locale['global_092'] = "Strana ";
$locale['global_093'] = " z ";
// Guest User Menu
$locale['global_100'] = "Prihl�senie";
$locale['global_101'] = "Meno";
$locale['global_102'] = "Heslo";
$locale['global_103'] = "Zapam�ta�";
$locale['global_104'] = "Prihl�si�";
$locale['global_105'] = "Nie ste u��vate�om?<br><a href='".BASEDIR."register.php' class='side'><strong>Kliknite sem</strong></a><br> a zaregistrujte sa.";
$locale['global_106'] = "Zabudli ste heslo?<br>Pre z�skanie nov�ho  <br><a href='".BASEDIR."lostpassword.php' class='side'><strong>Kliknite sem</strong></a>.";
$locale['global_107'] = "Registr�cia";
$locale['global_108'] = "Zabudnut� heslo";
// Member User Menu
$locale['global_120'] = "Upravi� profil";
$locale['global_121'] = "Spr�vy";
$locale['global_122'] = "U��vatelia";
$locale['global_123'] = "Administr�cia";
$locale['global_124'] = "Odhl�si�";
$locale['global_125'] = "M�te %u nov�/nov� ";
$locale['global_126'] = "spr�vu";
$locale['global_127'] = "spr�vy";
$locale['global_128'] = "podanie";
$locale['global_129'] = "podania";
// Poll
$locale['global_130'] = "Anketa";
$locale['global_131'] = "Odosla� hlas";
$locale['global_132'] = "Len prihl�sen� m��u hlasova�.";
$locale['global_133'] = "Hlas";
$locale['global_134'] = "Hlasy";
$locale['global_135'] = "Hlasy: ";
$locale['global_136'] = "Za�iatok hlasovania: ";
$locale['global_137'] = "Koniec hlasovania: ";
$locale['global_138'] = "Arch�v ankiet";
$locale['global_139'] = "Vyber anketu zo zoznamu:";
$locale['global_140'] = "Prezrie�";
$locale['global_141'] = "Prezrie� anketu";
$locale['global_142'] = "�iadne ankety.";

// Captcha
$locale['global_150'] = "Valida�n� k�d:";
$locale['global_151'] = "Vlo�te valida�n� k�d:";

// Footer Counter
$locale['global_170'] = "n�v�tev";
$locale['global_171'] = "n�v�tev";
$locale['global_172'] = "Vygenerovan� za: %s sek�nd";
$locale['global_173'] = "DB dop.";
// Admin Navigation
$locale['global_180'] = "Admin Index";
$locale['global_181'] = "Sp� na str�nku";
$locale['global_182'] = "<strong>Upozornenie:</strong> Heslo admina nebolo zadan�, alebo je nespr�vne.";
// Miscellaneous
$locale['global_190'] = "M�d na �dr�bu bol aktivovan�";
$locale['global_191'] = "Z tejto IP adresy nem�te povolenie pristupova� na t�to str�nku.";
$locale['global_192'] = "Odhlasovanie ";
$locale['global_193'] = "Prihlasovanie ";
$locale['global_194'] = "V� ��et bol zablokovan�.";
$locale['global_195'] = "Tento ��et e�te nebol aktivovan�.";
$locale['global_196'] = "Nespr�vne meno alebo heslo.";
$locale['global_197'] = "Po�kajte pros�m, prihlasovanie m��e chv�u trva�...<br><br>
[ <a href='index.php'>Kliknite sem ak sa str�nka nezobraz� do 10 sek�nd</a> ]";
$locale['global_198'] = "<strong>Upozornenie:</strong> setup.php nebol vymazan�, vyma�te ho �o najsk�r.";
$locale['global_199'] = "<strong>Upozornenie:</strong> Admin heslo nie je nastaven�, kliknite na <a href='edit_profile.php'>Editova� profil</a> a nastavte ho.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Vyh�ad�vanie";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."F�rum";
//Themes
$locale['global_210'] = "Prejs� na obsah"; 
// No themes found
$locale['global_300'] = "�iadne vzh�ady";
$locale['global_301'] = "Prep��te, ale str�nka sa ned� zobrazi�. Ned� sa n�js� �iadna t�ma na str�nke. Ak ste administr�tor, pou�ite v� FTP mana��r pre nahratie <em>vzh�adu/</em> do adres�ra ur�en�ho pre vzh�ady <em>PHP-Fusion v7</em>. Po nahrat� vzh�adu vojdite do <em>Hlavn� nastavenia</em> a zvo�te vzh�ad ktor� se nahrali do adres�ra <em>vzh�adov/</em>.<br><br>Ak ste be�n�m u��vate�om tejto str�nky, kontaktujte administr�tora ".hide_email($settings['siteemail'])." e-mailom a ozn�mte mu t�to z�le�itos�.";
$locale['global_302'] = "Vzh�ad zvolen� v hlavnom nastaven�, neexistuje alebo nie je kompletn�!";
// JavaScript Not Enabled
$locale['global_303'] = "Ale nie! Toto je <strong>JavaScript</strong>?<br>V� prehliada� nem� povolen� pou��vanie JavaScriptu, alebo JavaScript nie je podporovan�. Pros�m <strong>povolte JavaScript</strong> vo va�om prehliada�i aby sa spr�vne zobrazila t�to str�nka,<br> alebo <strong>obnovte</strong> v� prehliada� s podporou JavaScriptu; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> alebo nov�iu verziu <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorera</a>.";
// User Management
// Member status
$locale['global_400'] = "do�asne pozastaven�";
$locale['global_401'] = "zabanovan�";
$locale['global_402'] = "deaktivovan�";
$locale['global_403'] = "vymedzen� ��et";
$locale['global_404'] = "utajen� ��et";
$locale['global_405'] = "utajen� u��vate�";
$locale['global_406'] = "Tento ��et je zabanovan� z d�vodu:";
$locale['global_407'] = "Tento ��et je do�asne zru�en� a� do ";
$locale['global_408'] = " z d�vodu:";
$locale['global_409'] = "Tento ��et je zabanovan� z bezpe�nostn�ch d�vodov.";
$locale['global_410'] = "D�vod pre toto je: ";
$locale['global_411'] = "Tento ��et bol ukon�en�.";
$locale['global_412'] = "Tento ��et bol anonimizovan� pravdepodobne preto, �e bol neakt�vny.";
// Banning due to flooding
$locale['global_440'] = "Automatick� BAN od kontroly prete�enia"; //Automatic Ban by Flood Control
$locale['global_441'] = "V� ��et ".$settings['sitename']."bol zabanovan�";
$locale['global_442'] = "Ahoj [USER_NAME],\n
V� ��et ".$settings['sitename']." bol pre prive�a pr�spevkov v kr�tkom �ase z IP ".USER_IP.", pozastaven�. Jedn� sa o prevenciu pred SPAM-botmi s mno�stvom pr�spevkov.\n
Pros�m kontaktujte hlavn�ho administr�tora cez ".$settings['siteemail']." na uvo�nenie ��tu, ak sa nejedn� o poru�enie bezpe�nosti.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Do�asn� pozastavenie automaticky zru�en� syst�mom";
$locale['global_451'] = "Do�asn� pozastavenie zru�en� na ".$settings['sitename'];
$locale['global_452'] = "Ahoj USER_NAME,\n
Do�asn� pozastavenie v�ho ��tu na ".$settings['siteurl']." bolo zru�en�. Tu s� detaily v�ho loginu:\n
U��vate�sk� meno: USER_NAME
Heslo: Skryt� z bezpe�nostn�ch d�vodov\n
Ak ste zabudli heslo, kliknite na nasleduj�ci link: LOST_PASSWORD\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['global_453'] = "Ahoj USER_NAME,\n
Do�asn� pozastavenie v�ho ��tu na ".$settings['siteurl']." bolo zru�en�.\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['global_454'] = "��et obnoven� na ".$settings['sitename'];
$locale['global_455'] = "Ahoj USER_NAME,\n
Posledne ste boli prihl�sen� v obnovenom ��te na ".$settings['siteurl']." a v� ��et u� nie je ozna�en� ako neakt�vny.\n\n
s pozdravom,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Pr�zdny";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Budete presmerovan� do %s, pros�m, �akajte. Ak ste neboli presmerovan�, kliknite sem.";

// Captcha Locales
$locale['global_600'] = "Valida�n� k�d";
$locale['recaptcha'] = "sk";

//Miscellaneous
$locale['global_900'] = "Nemo�no previes� HEX na DEC";
?>              