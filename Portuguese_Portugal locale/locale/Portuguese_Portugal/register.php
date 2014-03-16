<?php
$locale['400'] = "Registo";
$locale['401'] = "Activar Conta";
// Registration Errors
$locale['402'] = "Voc� deve especificar um nome de utilizador, senha e o seu endere�o de email.";
$locale['403'] = "O nome de utilizador cont�m caracteres inv�lidos.";
$locale['404'] = "As duas Senhas n�o combinam.";
$locale['405'] = "Senha inv�lida. Use somente caracteres alfanum�ricos.<br />
A Senha deve conter, no m�nimo, 6 caracteres.";
$locale['406'] = "Seu endere�o de email parece ser inv�lido.";
$locale['407'] = "Desculpe, o nome de utilizador ".(isset($_POST['username']) ? $_POST['username'] : "")." j� existe.";
$locale['408'] = "Desculpe, o endere�o de email ".(isset($_POST['email']) ? $_POST['email'] : "")." j� existe.";
$locale['409'] = "Uma conta desactivada foi registada com este endere�o de email.";
$locale['410'] = "C�digo de valida��o incorreto.";
$locale['411'] = "O seu endere�o ou fornecedor de email est� na lista negra.";
// Email Message
$locale['449'] = "Bem-vindo(a) ao ".$settings['sitename'];
$locale['450'] = "Ol� ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Bem-vindo(a) ao ".$settings['sitename'].". Aqui est�o os dados de sua conta:\n
Nome de Utilizador: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Senha: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Active sua conta clicando no seguinte link:\n";
// Registration Success/Fail
$locale['451'] = "Registo conclu�do";
$locale['452'] = "Voc� pode entrar agora.";
$locale['453'] = "Um administrador activar� sua conta.";
$locale['454'] = "Seu registo est� quase completo: receber� um e-mail contendo os dados de sua conta junto de um link para ativ�-la.";
$locale['455'] = "Sua conta foi verificada.";
$locale['456'] = "O registo falhou";
$locale['457'] = "O envio do email falhou. Por favor, contacte o <a href='mailto:".$settings['siteemail']."'>Administrador do Site</a>.";
$locale['458'] = "O registo falhou pelo(s) seguinte(s) motivo(s):";
$locale['459'] = "Por favor, tente novamente";
// Register Form
$locale['500'] = "Por favor, preencha os dados solicitados abaixo. ";
$locale['501'] = "Um email de verifica��o ser� enviado para o endere�o de email especificado. ";
$locale['502'] = "Os campos marcados com <span style='color:#ff0000;'>*</span> s�o de preenchimento obrigat�rio.
O nome de utilizador e senha diferenciam mai�sculas de min�sculas.";
$locale['503'] = " Uma vez registado, poder� inserir informa��es adicionais em <em>Editar Perfil</em>.";
$locale['504'] = "C�digo de Valida��o:";
$locale['505'] = "Insira o C�digo de Valida��o:";
$locale['506'] = "Registar";
$locale['507'] = "O sistema de registos est� desactivado.";
$locale['508'] = "Termos de Registo";
$locale['509'] = "Eu li e aceito os <a href='".BASEDIR."print.php?type=T' target='_blank'>Termos de Registo</a>.";
// Validation Errors
$locale['550'] = "Por favor, especifique um nome de utilizador.";
$locale['551'] = "Por favor, especifique uma senha.";
$locale['552'] = "Por favor, especifique um endere�o de email.";
?>