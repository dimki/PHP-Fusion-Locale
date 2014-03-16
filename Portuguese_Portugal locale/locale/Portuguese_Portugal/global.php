<?php
/*
Portuguese Portugal Language Fileset
Produced by "PHP-Fusion Portugal"
Web: http://www.php-fusion.com.pt
Version: 1.2 draft
TODO: BB Codes

Lead Translator:
Jos� Caneira (jcaneira)

(soon to be) Reviewed by:
Ant�nio Vasconcelos (vasco)

Special Thanks:
PHP-Fusion Brasil translation team

Based on:
Brazilian Portuguese Language Fileset
Original Credits:
"PHP-Fusion Brasil"
Web: http://phpfusion-br.com
Lead Translator:
Patric Forcelini (IceWasp)
Translators Contributors:
Jefferson Silva Mendes (technojeff)
Igor Ferreira Cemim (Splash)
*/

// Locale Settings
setlocale(LC_TIME, "pt_PT","PT"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "en";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "en";

// Full & Short Months
$locale['months'] = "&nbsp|Janeiro|Fevereiro|Mar�o|Abril|Maio|Junho|Julho|Agosto|Setembro|Outubro|Novembro|Dezembro";
$locale['shortmonths'] = "&nbsp|Jan|Fev|Mar|Abr|Mai|Jun|Jul|Ago|Set|Out|Nov|Dez";

// Standard User Levels
$locale['user0'] = "P�blico";
$locale['user1'] = "Membro";
$locale['user2'] = "Administrador";
$locale['user3'] = "Super Administrador";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navega��o";
$locale['global_002'] = "N�o h� links definidos\n";
// Users Online
$locale['global_010'] = "Utilizadores Online";
$locale['global_011'] = "Visitantes Online";
$locale['global_012'] = "Membros Online";
$locale['global_013'] = "N�o h� Membros Online";
$locale['global_014'] = "Membros Registados";
$locale['global_015'] = "Membros Desactivados";
$locale['global_016'] = "�ltimo Membro";
// Forum Side panel
$locale['global_020'] = "T�picos do F�rum";
$locale['global_021'] = "�ltimos T�picos";
$locale['global_022'] = "T�picos Populares";
$locale['global_023'] = "Nenhum T�pico criado";
// Articles Side panel
$locale['global_030'] = "�ltimos Artigos";
$locale['global_031'] = "Nenhum Artigo dispon�vel";
// Welcome panel
$locale['global_035'] = "Bem-vindo(a)";
// Latest Active Forum Threads panel
$locale['global_040'] = "�ltimos T�picos Activos no F�rum";
$locale['global_041'] = "Meus T�picos";
$locale['global_042'] = "Minhas Mensagens";
$locale['global_043'] = "Novas Mensagens";
$locale['global_044'] = "T�pico";
$locale['global_045'] = "Visualiza��es";
$locale['global_046'] = "Respostas";
$locale['global_047'] = "�ltima Mensagem";
$locale['global_048'] = "F�rum";
$locale['global_049'] = "Enviado";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Inqu�rito";
$locale['global_052'] = "Movido";
$locale['global_053'] = "N�o iniciou nenhum t�pico no f�rum.";
$locale['global_054'] = "N�o enviou nenhuma mensagem no f�rum.";
$locale['global_055'] = "H� %u novas mensagens desde sua �ltima visita.";
$locale['global_056'] = "T�picos Acompanhados";
$locale['global_057'] = "Op��es";
$locale['global_058'] = "Parar";
$locale['global_059'] = "Voc� n�o est� a acompanhar nenhum t�pico.";
$locale['global_060'] = "N�o continuar a acompanhar este t�pico?";
// News & Articles
$locale['global_070'] = "Enviado por ";
$locale['global_071'] = "em ";
$locale['global_072'] = "Leia Mais";
$locale['global_073'] = " Coment�rios";
$locale['global_073b'] = " Coment�rio";
$locale['global_074'] = " Leituras";
$locale['global_075'] = "Imprimir";
$locale['global_076'] = "Editar";
$locale['global_077'] = "Not�cias";
$locale['global_078'] = "Nenhuma not�cia foi publicada";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Pr�xima";
$locale['global_092'] = "P�gina ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Entrar";
$locale['global_101'] = "Utilizador";
$locale['global_102'] = "Senha";
$locale['global_103'] = "Lembrar-me";
$locale['global_104'] = "Entrar";
$locale['global_105'] = "Ainda n�o � Membro?<br /><a href='".BASEDIR."register.php' class='side'>Clique aqui</a> para se registar.";
$locale['global_106'] = "Se esqueceu a sua senha?<br />Solicite uma nova <a href='".BASEDIR."lostpassword.php' class='side'>aqui</a>.";
$locale['global_107'] = "Registo";
$locale['global_108'] = "Recuperar senha";
// Member User Menu
$locale['global_120'] = "Editar Perfil";
$locale['global_121'] = "Mensagens Privadas";
$locale['global_122'] = "Lista de Membros";
$locale['global_123'] = "Painel de Administra��o";
$locale['global_124'] = "Sair";
$locale['global_125'] = "Voc� tem %u ";
$locale['global_126'] = "nova mensagem";
$locale['global_127'] = "novas mensagens";
// Poll
$locale['global_130'] = "Inqu�rito";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Fazer login para votar.";
$locale['global_133'] = "Voto";
$locale['global_134'] = "Votos";
$locale['global_135'] = "Votos: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalizada: ";
$locale['global_138'] = "Arquivo de Inqu�ritos";
$locale['global_139'] = "Seleccione um Inqu�rito na lista para v�-lo:";
$locale['global_140'] = "Ver";
$locale['global_141'] = "Ver Inqu�rito";
$locale['global_142'] = "N�o h� inqu�ritos definidos.";
// Shoutbox
$locale['global_150'] = "Mural de Recados";
$locale['global_151'] = "Nome:";
$locale['global_152'] = "Mensagem:";
$locale['global_153'] = "Enviar";
$locale['global_154'] = "Fazer login para enviar uma mensagem.";
$locale['global_155'] = "Arquivo do Mural";
$locale['global_156'] = "Nenhuma mensagem foi enviada.";
$locale['global_157'] = "Apagar";
$locale['global_158'] = "C�digo de Valida��o:";
$locale['global_159'] = "Digite o C�digo de Valida��o:";
// Footer Counter
$locale['global_170'] = "visita �nica";
$locale['global_171'] = "visitas �nicas";
$locale['global_172'] = "Tempo de processamento: %s segundos";
// Admin Navigation
$locale['global_180'] = "In�cio da Administra��o";
$locale['global_181'] = "Voltar ao Site";
$locale['global_182'] = "<strong>Aviso:</strong> Senha Administrativa n�o introduzida ou incorrecta.";
// Miscellaneous
$locale['global_190'] = "Modo de Manuten��o Activado";
$locale['global_191'] = "O seu endere�o de IP est� na lista negra.";
$locale['global_192'] = "Logout como ";
$locale['global_193'] = "Login como ";
$locale['global_194'] = "Esta conta est� suspensa.";
$locale['global_195'] = "Esta conta n�o foi activada.";
$locale['global_196'] = "Nome de utilizador e/ou senha inv�lidos.";
$locale['global_197'] = "Aguarde enquanto � transferido...<br /><br />
[ <a href='index.php'>Clique aqui caso n�o deseje esperar</a> ]";
$locale['global_198'] = "<strong>Alerta:</strong> setup.php detectado. Por favor, remova-o imediatamente.";
$locale['global_199'] = "<strong>Aviso:</strong> senha administrativa indefinida. Clique em <a href='edit_profile.php'>Editar Perfil</a> para defini-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Pesquisa";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."F�rum";
//Themes
$locale['global_210'] = "Ir para o conte�do";
// No themes found
$locale['global_300'] = "Nenhum tema encontrado";
$locale['global_301'] = "A p�gina n�o pode ser exibida. N�o encontramos nenhum tema para o site. Caso voc� seja administrador do site, ent�o utilize seu cliente FTP e fa�a upload, para o diret�rio <em>themes/</em>, de qualquer tema para o <em>PHP-Fusion v7</em>. Ap�s o upload do tema, cheque as suas <em>Configura��es Principais</em> e verifique se o tema selecionado est� na sua pasta <em>themes/</em>. Caso afirmativo, verifique se o tema selecionado possui o mesmo nome (considerando mai�sculas e min�sculas - importante em servidores baseados em UNIX) assim como escolhido na p�gina <em>Configura��es Principais</em>. Se voc� � um utilizador comum deste site, contate o administrador pelo email ".hide_email($settings['siteemail'])." e relate o problema.";
$locale['global_302'] = "O tema escolhido nas Configura��es Principais n�o existe ou est� incompleto!";
?>