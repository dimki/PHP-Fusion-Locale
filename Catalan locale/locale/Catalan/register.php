<?php
$locale['400'] = "Registre";
$locale['401'] = "Activa Compte";
// Registration Errors
$locale['402'] = "Has d'especificar un Nom d'Usuari, una Contrasenya i una adre�a de correu electr�nic.";
$locale['403'] = "El Nom d'Usuari cont� car�cters inv�lids.";
$locale['404'] = "Les dues contrasenyes no coincideixen.";
$locale['405'] = "Contrasenya inv�lida. Nom�s pots fer servir car�cters alfanum�rics i<br />
ha de tenir un m�nim de 6 car�cters.";
$locale['406'] = "L'adre�a de correu electr�nic sembla no ser v�lida.";
$locale['407'] = "Ho sentim, per� el Nom d'Usuari ".(isset($_POST['username']) ? $_POST['username'] : "")." ja est� agafat.";
$locale['408'] = "Ho sentim, per� l'adre�a de correu electr�nic ".(isset($_POST['email']) ? $_POST['email'] : "")." ja est� agafada.";
$locale['409'] = "S'ha registrat un Compte Inactiu amb la direcci� email.";
$locale['410'] = "El codi de seguretat �s incorrecte.";
$locale['411'] = "La teva adre�a o domini de correu electr�nic est� expulsat.";
// Email Message
$locale['449'] = "Benvingut/da a ".$settings['sitename'];
$locale['450'] = "Hola, ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Benvingut/da a ".$settings['sitename'].". Aqu� tens els detalls del teu compte:\n
Usuari: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Contrasenya: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Abans d'Iniciar Sessi�, has d'activar el compte des d'aquest enlla�:\n";
// Registration Success/Fail
$locale['451'] = "Registre complet";
$locale['452'] = "Ara pots Iniciar Sessi�.";
$locale['453'] = "D'aqu� a poc temps, un Administrador activar� el teu compte.";
$locale['454'] = "El registre est� gaireb� acabat. Rebr�s un correu electr�nic amb els detalls del compte, juntament amb un enlla� per a activar el teu compte.";
$locale['455'] = "El teu Compte est� activat.";
$locale['456'] = "El Registre ha fallat";
$locale['457'] = "L'enviament del correu electr�nic ha fallat. Contacta amb l'<a href='mailto:".$settings['siteemail']."'>Administrador de la web</a>.";
$locale['458'] = "El registre ha fallat per les raons seg�ents:";
$locale['459'] = "Sisplau, torna-ho a intentar";
// Register Form
$locale['500'] = "Introdueix les teves dades: ";
$locale['501'] = "S'enviar� un correu electr�nic d'activaci� a l'adre�a de correu electr�nic especificada. ";
$locale['502'] = "Els camps marcats amb un <span style='color:#ff0000;'>*</span> s�n obligatoris. El Nom d'Usuari i la Contrasenya distingeixen maj�scules de min�scules.";
$locale['503'] = " Pots afegir informaci� addicional des d'<strong>Edita Perfil</strong> un cop hagis iniciat sessi�.";
$locale['504'] = "Codi de Seguretat:";
$locale['505'] = "Escriu el Codi de Seguretat:";
$locale['506'] = "Registre";
$locale['507'] = "Actualment, el Sistema de Registre est� desactivat.";
$locale['508'] = "Condicions del Registre";
$locale['509'] = "He llegit i accepto les <a href='".BASEDIR."print.php?type=T' target='_blank'>Condicions del Registre</a>.";
// Validation Errors
$locale['550'] = "Escriu un Nom d'Usuari.";
$locale['551'] = "Escriu una Contrasenya.";
$locale['552'] = "Escriu una Adre�a de Correu Electr�nic.";
?>