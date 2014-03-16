<?php
$locale['400'] = "Cl�raigh";
$locale['401'] = "Cuir Cuntas i ngn�omh";
// Registration Errors
$locale['402'] = "Caithfidh t� ainm �s�ideora, pasfhocal r�omhphoist a thabhairt.";
$locale['403'] = "T� caractair neamh-bhail� san ainm �s�ideora.";
$locale['404'] = "N� hionann an d� Phasfhocal.";
$locale['405'] = "Pasfhocal neamh-bhail�, na h�s�id ach litreacha agus digit�.<br />
Caith s� a bheith ar a laghad 6 charachtair ar fhad.";
$locale['406'] = "T� cuma ar an seoladh r�omhphoist nach bhfuil s� bail�.";
$locale['407'] = "T� an ainm �s�ideora ".(isset($_POST['username']) ? $_POST['username'] : "")." in �s�id cheana.";
$locale['408'] = "T� an seoladh r�omhphoist ".(isset($_POST['email']) ? $_POST['email'] : "")." in �s�id cheana.";
$locale['409'] = "T� cuntas nach bhfuil gn�omhach cl�ruithe leis an seoladh r�omhphoist sin.";
$locale['410'] = "C�d bail�ochtaithe m�cheart (validation code).";
$locale['411'] = "T� do sheoladh r�omhphoist, n� fearann do sheoladh r�omhphoist ar an d�liosta.";
// Email Message
$locale['449'] = "F�ilte go ".$settings['sitename'];
$locale['450'] = "A ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
F�ilte go ".$settings['sitename'].". Seo do chuid sonra� log�la:\n
Ainm �s�ideora: ".(isset($_POST['username']) ? $_POST['username'] : "")."
pasfhocal: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Cuir do chuntas ag obair leis ann nasc seo, le do thoil:\n";
// Registration Success/Fail
$locale['451'] = "Cl�r� cr�ochnaithe";
$locale['452'] = "F�adfaidh t� log�il isteach anois.";
$locale['453'] = "Cuireadh riarth�ir do chuntas i ngn�omh ar ball beag.";
$locale['454'] = "T� an pr�iseas cl�raithe beagnach cr�ochnaithe. Gheobhaidh t� r�omhphost go luath le do chuid sonra� log�la agus le nasc le do chuntas a fh�or�.";
$locale['455'] = "T� do chuntas f�oraithe.";
$locale['456'] = "Theip ar an gcl�r�";
$locale['457'] = "Theip ar an r�omhphost seoladh, d�an teagmh�il leis an <a href='mailto:".$settings['siteemail']."'>Riarth�ir Su�mh</a>.";
$locale['458'] = "Theip ar an gcl�r� mar gheall de bharr an/na f�th(anna) seo a leanas:";
$locale['459'] = "Triail ar�s";
// Register Form
$locale['500'] = "Tabhair do chuid sonra� th�os. ";
$locale['501'] = "Seolfar r�omhphost f�or�ch�in go do chuntas r�omhphoist. ";
$locale['502'] = "Caithfidh t� r�ims� at� marc�ilte le <span style='color:#ff0000;'>*</span> a l�onadh.
T� do ainm �s�ideora agus do phasfhocal c�s�ogair (case-sensitive).";
$locale['503'] = " F�adfaidh t� tuilleadh eolais a thabhairt tr� ghliog�il ar 'Athraigh do Phr�if�l' nuair a bh�onn t� log�ilte isteach.";
$locale['504'] = "C�d f�or�ch�in:";
$locale['505'] = "Cuir an c�d f�or�ch�in isteach:";
$locale['506'] = "Cl�raigh";
$locale['507'] = "T� an c�ras cl�raithe d�chumasaithe faoi l�thair.";
$locale['508'] = "T�arma� Chomhaontaithe (Terms of Agreement)";
$locale['509'] = "L�igh m� na <a href='".BASEDIR."print.php?type=T' target='_blank'>T�arma� Chomhaontaithe</a> agus aonta�m leo.";
// Validation Errors
$locale['550'] = "Tabhair ainm �s�ideora.";
$locale['551'] = "Tabhair pasfhocal.";
$locale['552'] = "Tabhair seoladh r�omhphoist.";
?>