<?php
/*
Paquet d'Idioma Catal� per a PHP-Fusion
Produ�t per Fernando P. Mart�nez (Centralsoft - centralsoft@centralsoft.es)
Revisat per Marc Riera (mrc2407 - mrc2407@gmail.com)
Web Oficial de Suport: http://php-fusion.es
*/

// Locale Settings
setlocale(LC_TIME, "es","es_ES"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "es";
$locale['tinymce'] = "es";
$locale['phpmailer'] = "es";

// Full & Short Months
$locale['months'] = "&nbsp|gener|febrer|mar�|abril|maig|juny|juliol|agost|septembre|octubre|novembre|desembre";
$locale['shortmonths'] = "&nbsp|gen|feb|mar|abr|mai|jun|jul|ago|sep|oct|nov|dec";

// Standard User Levels
$locale['user0'] = "P�blic";
$locale['user1'] = "Membre";
$locale['user2'] = "Administrador";
$locale['user3'] = "S�per Administrador";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegaci�";
$locale['global_002'] = "No s'ha definit cap enlla�\n";
// Users Online
$locale['global_010'] = "Usuaris Connectats";
$locale['global_011'] = "Invitats";
$locale['global_012'] = "Membres";
$locale['global_013'] = "Cap";
$locale['global_014'] = "Total Membres";
$locale['global_015'] = "Membres Sense Activar";
$locale['global_016'] = "�ltim Membre";
// Forum Side panel
$locale['global_020'] = "Temes del F�rus";
$locale['global_021'] = "�ltims Temes";
$locale['global_022'] = "Temes Populars";
$locale['global_023'] = "No s'ha creat cap tema";
// Articles Side panel
$locale['global_030'] = "�ltims Articles";
$locale['global_031'] = "No hi ha cap article disponible";
// Welcome panel
$locale['global_035'] = "Benvingut/da";
// Latest Active Forum Threads panel
$locale['global_040'] = "�ltims Temes Actius del F�rum";
$locale['global_041'] = "Els meus Temes Recents";
$locale['global_042'] = "Els meus Missatges Recents";
$locale['global_043'] = "Nous Missatges";
$locale['global_044'] = "Tema";
$locale['global_045'] = "Visites";
$locale['global_046'] = "Respostes";
$locale['global_047'] = "�ltim Missatge";
$locale['global_048'] = "F�rum";
$locale['global_049'] = "Publicat el";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Enquesta";
$locale['global_052'] = "Mogut";
$locale['global_053'] = "No has iniciat cap tema al F�rum.";
$locale['global_054'] = "No has publicat cap Missatge al F�rum.";
$locale['global_055'] = "Nous Missatges des de l'�ltima visita: %u.";
$locale['global_056'] = "Els meus Temes en Seguiment";
$locale['global_057'] = "Opcions";
$locale['global_058'] = "Atura";
$locale['global_059'] = "No est�s fent el seguiment de cap tema.";
$locale['global_060'] = "Vols aturar el seguiment d'aquest tema?";
// News & Articles
$locale['global_070'] = "Publicat per ";
$locale['global_071'] = "el ";
$locale['global_072'] = "Segueix llegint";
$locale['global_073'] = " Comentaris";
$locale['global_073b'] = " Comentari";
$locale['global_074'] = " Lectures";
$locale['global_075'] = "Imprimeix";
$locale['global_076'] = "Edita";
$locale['global_077'] = "Not�cies";
$locale['global_078'] = "No s'ha publicat cap not�ca";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Seg�ent";
$locale['global_092'] = "P�gina ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Iniciar Sessi�";
$locale['global_101'] = "Nom d'Usuari";
$locale['global_102'] = "Contrasenya";
$locale['global_103'] = "Recorda'm";
$locale['global_104'] = "Iniciar Sessi�";
$locale['global_105'] = "�Encara no ets Membre?<br />Fes clic <a href='".BASEDIR."register.php' class='side'><strong>aqu�</strong></a> per a registrar-te.";
$locale['global_106'] = "Ha perdut la contrasenya?<br />Fes clic <a href='".BASEDIR."lostpassword.php' class='side'><strong>aqu�</strong></a> per a obtenir una nova contrasenya.";
$locale['global_107'] = "Reg�stra't";
$locale['global_108'] = "Has perdut la contrasenya?";
// Member User Menu
$locale['global_120'] = "Edita Perfil";
$locale['global_121'] = "Missatges Privats";
$locale['global_122'] = "Llista de Membres";
$locale['global_123'] = "Administraci�";
$locale['global_124'] = "Surt de la Sessi�";
$locale['global_125'] = "Tens %u ";
$locale['global_126'] = "nou Missatge";
$locale['global_127'] = "nous Missatges";
// Poll
$locale['global_130'] = "Enquesta Membres";
$locale['global_131'] = "Vota";
$locale['global_132'] = "Has d'iniciar sessi� per a votar.";
$locale['global_133'] = "Vot";
$locale['global_134'] = "Vots";
$locale['global_135'] = "Vots: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalitzada: ";
$locale['global_138'] = "Arxiu d'Enquestes";
$locale['global_139'] = "Selecciona una enquesta de la llista per a mirar-la:";
$locale['global_140'] = "Mira-la";
$locale['global_141'] = "Mira l'Enquesta";
$locale['global_142'] = "No s'ha creat cap enquesta.";
// Shoutbox
$locale['global_150'] = "Mini Xat";
$locale['global_151'] = "Nom:";
$locale['global_152'] = "Missatge:";
$locale['global_153'] = "Envia";
$locale['global_154'] = "Has d'iniciar sessi� per a enviar un Missatge.";
$locale['global_155'] = "Arxiu de converses";
$locale['global_156'] = "No s'ha enviat cap Missatge.";
$locale['global_157'] = "Esborra";
$locale['global_158'] = "Codi de Validaci�:";
$locale['global_159'] = "Introdueix el Codi de Validaci�:";
// Footer Counter
$locale['global_170'] = "Visita �nica";
$locale['global_171'] = "Visitas �niques";
$locale['global_172'] = "Temps de generaci�: %s segons";
// Admin Navigation
$locale['global_180'] = "Inici d'Administraci�";
$locale['global_181'] = "Torna al Web";
$locale['global_182'] = "<strong>Av�s</strong>: Contrasenya d'Administraci� no introdu�da o incorrecta.";
// Miscellaneous
$locale['global_190'] = "Mode de mantenimient activat";
$locale['global_191'] = "La teva direcci� IP est� expulsada.";
$locale['global_192'] = "Surtint de la Sessi� de ";
$locale['global_193'] = "Iniciant la Sessi� de ";
$locale['global_194'] = "Aquest compte est� susp�s.";
$locale['global_195'] = "Aquest compte no est� activat.";
$locale['global_196'] = "El nom d'usuari o la contrasenya no s�n v�lids.";
$locale['global_197'] = "Espera mentres ets transferit...<br /><br />
[ <a href='index.php'>o b� fes clic aqu� si no vols esperar</a> ]";
$locale['global_198'] = "<strong>ATENCI�:</strong> S'ha detectat l'arxiu 'setup.php'. Has d'esborrar-lo immediatament.";
$locale['global_199'] = "<strong>ATENCI�:</strong> No est� configurada la contrasenya d'administrador. Fes clic a <a href='".BASEDIR."edit_profile.php'>Edita Perfil</a> per a configurar-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cerca";
$locale['global_203'] = $locale['global_200']."PMF";
$locale['global_204'] = $locale['global_200']."F�rum";
//Themes
$locale['global_210'] = "Saltar al contingut";
// No themes found
$locale['global_300'] = "No s'han trobat Temes";
$locale['global_301'] = "No es pot mostrar aquesta p�gina. Per alguna circumst�ncia no s'ha trobat el Tema de la web. Si ets l'Administrador del lloc web, usa el teu gestor FTP i transfereix al directori <em>themes/</em> qualsevol Tema dissenyat per a <em>PHP-Fusion v7</em>. Despr�s de transferir el Tema, comprova en la <em>Configuraci� Principal</em> que el Tema seleccionat es troba en el directori <em>themes/</em>. Si �s aix�, comprova que el Tema transferit t� el mateix nom (incloent maj�scules i min�scules - important en servidors basats en UNIX) que el triat en la p�gina de la <em>Configuraci� Principal</em>.<br /><br />Si ets un usuari normal d'aquesta web, contacta per email amb l'Administrador (".hide_email($settings['siteemail']).") i informa-li d'aquest problema.";
$locale['global_302'] = "El Tema triat en la Configuraci� Principal no existeix o est� incomplet.";
?>