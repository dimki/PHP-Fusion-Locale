<?php
// Member Management Options
$locale['400'] = "Membres";
$locale['401'] = "Usuari";
$locale['402'] = "Afegeix Membre";
$locale['403'] = "Tipus d'Usuari";
$locale['404'] = "Opcions";
$locale['405'] = "mkostra";
$locale['406'] = "Edita";
$locale['407'] = "Activa";
$locale['408'] = "Readmet";
$locale['409'] = "Expulsa";
$locale['410'] = "Esborra";
$locale['411'] = "No hi ha membres %s";
$locale['412'] = " que comencin per ";
$locale['413'] = " coincidint amb ";
$locale['414'] = "Mostra'ls Tots";
$locale['415'] = "Cerca:";
$locale['416'] = "Cerca";
// Member types
$locale['417'] = "Membres";
$locale['418'] = "No Activats";
$locale['419'] = "Expulsats";
// Ban/Unban/Delete Member
$locale['420'] = "Expulsi� imposada";
$locale['421'] = "Expulsi� eliminada";
$locale['422'] = "Membre esborrat";
$locale['423'] = "Vols esborrar aquest membre?";
$locale['424'] = "Membre activat";
$locale['425'] = "Compte Activat en ";
$locale['426'] = "Hola [USER_NAME].\n
El teu compte en ".$settings['sitename']." ha estat activat.\n
Ara ja pots Iniciar Sessi� fent servir el teu nom d'usuari i contrasenya que has escollit.\n
Atentament,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Edita Membre";
$locale['431'] = "Dades actualitzades";
$locale['432'] = "Torna a l'Administraci� de Membres";
$locale['433'] = "Torna a l'Administraci�";
$locale['434'] = "No s'ha pogut actualitzar les dades del membre:";
// Extra Edit Member Details form options
$locale['440'] = "Guarda";
// Update Profile Errors
$locale['450'] = "No s'ha pogut editar l'administrador principal.";
$locale['451'] = "Has d'indicar un nom d'usuari i uncorreu electr�nic.";
$locale['452'] = "El nom d'usuari cont� car�cters inv�lids.";
$locale['453'] = "El nom d'usuari ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." est� en �s.";
$locale['454'] = "El correu electr�nic no �s v�lid.";
$locale['455'] = "El correu electr�nic ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." est� en �s.";
$locale['456'] = "Les noves contrasenyas no coincideixen.";
$locale['457'] = "Contrasenya inv�lida. Utilitza nom�s car�cters alfanum�rics.<br />La contrasenya ha de tenir, com a m�nim, 6 car�cters.";
$locale['458'] = "<strong>ATENCIO:</strong> Execuci� inesperada del programa.";
// View Member Profile
$locale['470'] = "Perfil de Membre";
$locale['472'] = "Estad�stiques";
$locale['473'] = "Grups d'Usuaris";
// Add Member Errors
$locale['480'] = "Afegeix Membre";
$locale['481'] = "El compe del membre ha estat creat.";
$locale['482'] = "No s'ha pogut crear el compte del membre.";
?>