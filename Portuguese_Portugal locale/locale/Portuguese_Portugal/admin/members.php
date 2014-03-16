<?php
// Member Management Options
$locale['400'] = "Membros";
$locale['401'] = "Utilizador";
$locale['402'] = "Adicionar Novo Membro";
$locale['403'] = "Tipo de Utilizador";
$locale['404'] = "Op��es";
$locale['405'] = "Ver";
$locale['406'] = "Editar";
$locale['407'] = "Activar";
$locale['408'] = "Desbanir";
$locale['409'] = "Banir";
$locale['410'] = "Remover";
$locale['411'] = "N�o h� membros %s";
$locale['412'] = " com a inicial ";
$locale['413'] = " come�ando com ";
$locale['414'] = "Mostrar Todos";
$locale['415'] = "Pesquisar por membros:";
$locale['416'] = "Pesquisar";
// Member types
$locale['417'] = "Membros";
$locale['418'] = "Desactivados";
$locale['419'] = "Banidos";
// Ban/Unban/Delete Member
$locale['420'] = "Banido";
$locale['421'] = "Desbanido";
$locale['422'] = "Membro Removido";
$locale['423'] = "Voc� tem certeza que deseja remover este membro?";
$locale['424'] = "Membro Activado";
$locale['425'] = "Conta activada em ";
$locale['426'] = "Ol� [USER_NAME],\n
Sua conta em ".$settings['sitename']." foi activada.\n
Voc� j� pode entrar utilizando o nome de utilizador e senha escolhidos.\n
Atentamente,
".$settings['siteusername'];
// Edit Member Details
$locale['430'] = "Editar Membro";
$locale['431'] = "Dados do Membro Actualizados";
$locale['432'] = "Voltar � Administra��o de Membros";
$locale['433'] = "Voltar ao Painel de Administra��o";
$locale['434'] = "N�o foi poss�vel actualizar os dados do Membro:";
// Extra Edit Member Details form options
$locale['440'] = "Gravar Altera��es";
// Update Profile Errors
$locale['450'] = "N�o � poss�vel editar o administrador principal.";
$locale['451'] = "Voc� deve especificar um nome de utilizador e um endere�o de email.";
$locale['452'] = "O nome de utilizador cont�m caracteres inv�lidos.";
$locale['453'] = "O nome de utilizador ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." j� est� em uso.";
$locale['454'] = "Endere�o de email inv�lido.";
$locale['455'] = "O endere�o de email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." j� est� em uso.";
$locale['456'] = "As senhas n�o combinam.";
$locale['457'] = "Senha inv�lida: use apenas caracteres alfanum�ricos.<br />
A senha deve conter, no m�nimo, 6 caracteres.";
$locale['458'] = "<b>Aviso:</b> Execu��o de script inesperada.";
// View Member Profile
$locale['470'] = "Perfil do Membro";
$locale['472'] = "Estat�sticas";
$locale['473'] = "Grupos de Utilizadores";
// Add Member Errors
$locale['480'] = "Adicionar Membro";
$locale['481'] = "A conta do membro foi criada.";
$locale['482'] = "A conta do membro n�o p�de ser criada.";
?>