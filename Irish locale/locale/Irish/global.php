<?php
/*
Irish Language Fileset
Produced by Nick Jones (Digitanium)
Email: conallom@gmail.com
Web: http://www.cuchonaill.com
*/

// Locale Settings
setlocale(LC_TIME, "ga","ga_IE", "Irish"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "ga";
$locale['tinymce'] = "ga";
$locale['phpmailer'] = "ga";

// Full & Short Months
$locale['months'] =     "&nbsp|Ean�ir|Feabhra|M�rta|Aibre�n|Bealtaine|Meitheamh|I�il|L�nasa|Me�n F�mhair|Deireadh F�mhair|Samhain|Nollaig";
$locale['longmonths'] = "&nbsp|Ean�ir|Feabhra|M�rta|Aibre�n|Bealtaine|Meitheamh|I�il|L�nasa|Me�n F�mhair|Deireadh F�mhair|Samhain|Nollaig";
$locale['shortmonths'] = "&nbsp|Ean|Fea|M�r|Aib|Bel|Mei|I�l|L�n|MnF|DrF|Sam|Nol";

// Standard User Levels
$locale['user0'] = "Poibl�";
$locale['user1'] = "Ball";
$locale['user2'] = "Riarth�ir";
$locale['user3'] = "Ard-Riarth�ir";
// Forum Moderator Level(s)
$locale['userf1'] = "Modhn�ir";
// Navigation
$locale['global_001'] = "Nasclean�int";
$locale['global_002'] = "N�or crutha�odh aon naisc\n";
// Users Online
$locale['global_010'] = "�s�ideoir� ar l�ne";
$locale['global_011'] = "Cuairteoir� ar l�ne";
$locale['global_012'] = "Baill ar l�ne";
$locale['global_013'] = "N�l aon bhall ar l�ne";
$locale['global_014'] = "L�on Ioml�n Ball";
$locale['global_015'] = "Baill d�chumasaithe";
$locale['global_016'] = "Ball is nua";
// Forum Side panel
$locale['global_020'] = "Sn�tha F�raim";
$locale['global_021'] = "Sn�tha is nua";
$locale['global_022'] = "Sn�tha is m� consp�ide faoi l�thair";
$locale['global_023'] = "N�l aon Sn�th cruthaithe";
// Articles Side panel
$locale['global_030'] = "Ailt is nua";
$locale['global_031'] = "N�l Alt ar bith ar f�il";
// Welcome panel
$locale['global_035'] = "F�ilte";
// Latest Active Forum Threads panel
$locale['global_040'] = "Gn�omha�ocht is nua i Sn�tha F�raim";
$locale['global_041'] = "Do chuid sn�tha is nua";
$locale['global_042'] = "Do chuid iontr�lacha is nua";
$locale['global_043'] = "Iontr�lacha nua";
$locale['global_044'] = "Sn�th";
$locale['global_045'] = "L�on uaireanta ar f�achadh air";
$locale['global_046'] = "Freagra�";
$locale['global_047'] = "Iontr�il is deireanna�";
$locale['global_048'] = "F�ram";
$locale['global_049'] = "Iontr�ilte";
$locale['global_050'] = "�dar";
$locale['global_051'] = "Suirbh�";
$locale['global_052'] = "Corraithe";
$locale['global_053'] = "N�or chur t� aon sn�th f�raim suas f�s.";
$locale['global_054'] = "N�or chur t� aon teachtaireacht f�raim suas f�s.";
$locale['global_055'] = "T� %u iontr�il nua ann � do chuairt deireanach.";
$locale['global_056'] = "Sn�tha a bhfuil t� ag faire orthu";
$locale['global_057'] = "Roghanna";
$locale['global_058'] = "Stop";
$locale['global_059'] = "N�l t� ag faire ar aon sn�th.";
$locale['global_060'] = "Stop ag faire ar an sn�th seo?";
// News & Articles
$locale['global_070'] = "Curtha suas ag ";
$locale['global_071'] = "an ";
$locale['global_072'] = "L�igh tuilleadh";
$locale['global_073'] = " Tuairim�";
$locale['global_073b'] = " Tuairim";
$locale['global_074'] = " L�on uaireanta ar f�achadh air";
$locale['global_075'] = "Priont�il";
$locale['global_076'] = "Athraigh";
$locale['global_077'] = "Nuacht";
$locale['global_078'] = "N�or cuireadh aon Nuacht suas f�s";
// Page Navigation
$locale['global_090'] = "Siar";
$locale['global_091'] = "Ar aghaidh";
$locale['global_092'] = "Leathanach ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Log�il";
$locale['global_101'] = "Ainm �s�ideora";
$locale['global_102'] = "Pasfhocal";
$locale['global_103'] = "Cuimhnigh orm";
$locale['global_104'] = "Log�il Isteach";
$locale['global_105'] = "Bhfuil t� i do bhall f�s?<br /><a href='".BASEDIR."register.php' class='side'>Gliog�il anseo</a> le cl�r�.";
$locale['global_106'] = "An ndearna t� dearmad ar do phasfhocal?<br />Faigh ceann nua <a href='".BASEDIR."lostpassword.php' class='side'>anseo</a>.";
$locale['global_107'] = "Cl�raigh";
$locale['global_108'] = "Pasfhocal caillte";
// Member User Menu
$locale['global_120'] = "Athraigh do Phr�if�l";
$locale['global_121'] = "Teachtaireachta� Su�mh";
$locale['global_122'] = "Liosta Ball";
$locale['global_123'] = "Pain�al Riarth�ra";
$locale['global_124'] = "Log�il Amach";
$locale['global_125'] = "T� an m�id seo teachtaireachta� nua agat: %u ";
$locale['global_126'] = "";
$locale['global_127'] = "";
// Poll
$locale['global_130'] = "Suirbh� Ball";
$locale['global_131'] = "Caith V�ta";
$locale['global_132'] = "N� m�r log�il isteach le a bheith in ann cl�r�.";
$locale['global_133'] = "V�ta";
$locale['global_134'] = "V�ta�";
$locale['global_135'] = "V�ta�: ";
$locale['global_136'] = "Tosaithe: ";
$locale['global_137'] = "Cr�ochnaithe: ";
$locale['global_138'] = "Cartlann Suirbh�anna";
$locale['global_139'] = "Roghnaigh Suirbh� �n liosta le n-� a fheice�il:";
$locale['global_140'] = "Breathnaigh";
$locale['global_141'] = "Breathnaigh ar shuirbh�";
$locale['global_142'] = "N�or crutha�odh aon suirbh�anna.";
// Shoutbox
$locale['global_150'] = "Scairtbhosca";
$locale['global_151'] = "Ainm:";
$locale['global_152'] = "Teachtaireacht:";
$locale['global_153'] = "Scairt";
$locale['global_154'] = "N� m�r log�il isteach le teachtaireacht a chur suas.";
$locale['global_155'] = "Cartlann Scairtbhosca";
$locale['global_156'] = "N�or seoladh aon teachtaireacht.";
$locale['global_157'] = "Scrios";
$locale['global_158'] = "C�d Fh�oraithe:";
$locale['global_159'] = "Tabhair an C�d Fh�oraithe:";
// Footer Counter
$locale['global_170'] = "chuairt uath�il";
$locale['global_171'] = "cuairt uath�il";
$locale['global_172'] = "Am rindre�la: %s soicind";
// Admin Navigation
$locale['global_180'] = "Bun-Leathanach Riarth�ra";
$locale['global_181'] = "Fill ar an Su�omh";
$locale['global_182'] = "<strong>Fainic:</strong> N�or tugadh aon Phasfhocal Riarth�ra n� tugadh ceann m�cheart.";
// Miscellaneous
$locale['global_190'] = "T� Modh Cothabh�la i bhFeidhm";
$locale['global_191'] = "T� do sheoladh IP ar an d�liosta.";
$locale['global_192'] = "Ag log�il amach mar ";
$locale['global_193'] = "Ag log�il isteach mar ";
$locale['global_194'] = "T� an cuntas seo ar fionra� faoi l�thair.";
$locale['global_195'] = "N�or cuireadh an cuntas seo i ngn�omh f�s.";
$locale['global_196'] = "Ainm �s�ideora n� pasfhocal neamhbhail�.";
$locale['global_197'] = "Fan a fhad agus go n-aistr�tear go dt� an leathanach c�ir t�...<br /><br />
[ <a href='index.php'>N� gliog�il anseo muna bhfuil fonn ort fanacht</a> ]";
$locale['global_198'] = "<strong>Fainic:</strong> air�odh go bhfuil 'setup.php' ann f�s, scrios ar an bpoinnte �.";
$locale['global_199'] = "<strong>Fainic:</strong> n�or socra�odh pasfhocal riarth�ra f�s, gliog�il ar <a href='".BASEDIR."edit_profile.php'>Athraigh do Phr�if�l</a> chun � a shocr�.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cuardach";
$locale['global_203'] = $locale['global_200']."Ceisteanna Coitianta";
$locale['global_204'] = $locale['global_200']."F�ram";
//Themes
$locale['global_210'] = "Ar aghaidh go h�bhar";
// No themes found
$locale['global_300'] = "n�or fritheadh aon t�ama";
$locale['global_301'] = "T�-bhr�n orainn ach n� f�idir an leathanach seo a thaispe�int. N� fios c�n f�th ach n�or aims�odh aon 't�ama su�mh'. M�s Riarth�ir Su�mh t�, �s�id do chliant FTP chun aon t�ama <em>PHP-Fusion v7</em> a chur san fhilte�n <em>themes/</em>. Tar �is � a uasl�d�il duit, seice�il sna <em>Pr�omh-Shocruithe</em> agus seice�il ar uasl�d�ladh i gceart � san fhilte�n <em>themes/</em>. Tabhair faoi deara nach m�r go mbeadh an t-ainm d�reach c�anna ar an bhfilte�n (an c�s in �irithe) agus at� roghnaithe ar leathanach na <em>Pr�omh-Shocruithe</em>.<br /><br /> M�s �s�ideoir rialta t� den su�omh seo, d�an teagmh�il le riarth�ir an tsu�mh tr� ".hide_email($settings['siteemail'])." r�omhphost agus cuir in i�l d� n� di go bhfuil an fadhb seo ann.";
$locale['global_302'] = "N�l an T�ama a roghna�odh sna Pr�omh-Shocruithe ann n� n�l s� ann uile!";
?>
