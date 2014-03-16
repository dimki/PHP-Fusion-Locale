<?php
// Member Management Options
$locale['400'] = "U��vatelia";
$locale['401'] = "Meno";
$locale['402'] = "Prida� nov�ho u��vate�a";
$locale['403'] = "Typ ��tu";
$locale['404'] = "Nastavenia";
$locale['405'] = "N�h�ad";
$locale['406'] = "Upravi�";
$locale['407'] = "Aktivova�";
$locale['408'] = "Odbanova�";
$locale['409'] = "Zabanova�";
$locale['410'] = "Vymaza�";
$locale['411'] = "Neexistuj� �iadny %s u��vatelia";
$locale['412'] = " za��naj�ci na ";
$locale['413'] = " obsahuj�ci ";
$locale['414'] = "Uk�za� v�etk�ch";
$locale['415'] = "H�ada� u��vate�a:";
$locale['416'] = "H�ada�";
$locale['417'] = "Vybra� akciu";
$locale['418'] = "Ukon�enie";
$locale['419'] = "Obnovi�";
// Ban/Unban/Delete Member
$locale['420'] = "Zabanovan�";
$locale['421'] = "Odbanovan�";
$locale['422'] = "U��vate� bol vymazan�";
$locale['423'] = "Ste si ist�, �e chcete vymaza� tohoto u��vate�a?";
$locale['424'] = "U��vate� aktivovan�";
$locale['425'] = "<h2>Upozornenie!</h2><br />
Ak chcete odstr�ni� u��vate�a <strong>%s</strong> !<br />
Nasleduj�ci obsah <u>pridan� t�mto u��vate�om</u> na tejto str�nke bude odstr�nen�, ak budete pokra�ova�:<br />
- �l�nky<br />
- Novinky<br />
- F�rum t�my. Pr�spevky v t�hto t�mach od in�ch u��vate�ov bud� tie� odstr�nen�.<br />
- F�rum pr�spevky<br />
- F�rum pr�lohy<br />
- Koment�re<br />
- S�kromn� spr�vy<br />
- Hlasy v anket�ch<br />
- Hodnotenia<br />
Ak u��vate� nieje BOT alebo spammer, odpor��ame v�m mu da� ban, deaktivova� alebo mu skry� jeho ��e�.<br />
<br />
Ste si ist�, �e chcete odstr�ni� tohto u��vate�a?<br />";
$locale['426'] = "�no";
$locale['427'] = "Nie";
// Edit Member Details
$locale['430'] = "Upravi� u��vate�a";
$locale['431'] = "Detaily u��vate�a boli aktualizovan�";
$locale['432'] = "N�vrat do administr�cie u��vate�ov";
$locale['433'] = "N�vrat do administr�torsk�ho indexu";
$locale['434'] = "Detaily u��vate�a sa nedaj� upravi�:";
// Extra Edit Member Details form options
$locale['440'] = "Ulo�i� zmeny";
// Update Profile Errors
$locale['450'] = "Nem��em upravi� hlavn�ho administr�tora.";
$locale['451'] = "Mus�te zada� meno a e-mailov� adresu.";
$locale['452'] = "Meno obsahuje nepovolen� znaky.";
$locale['453'] = "Meno ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." u� niekto pou��va. Zvo�te si pros�m in�.";
$locale['454'] = "Nespr�vna e-mailov� adresa.";
$locale['455'] = "Emailov� adresu ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." u� niekto pou��va. Zvo�te si pros�m in�.";
$locale['456'] = "Nov� hesl� sa nezhoduj�.";
$locale['457'] = "Nespr�vne heslo. Pou��vajte len alfa-numerick� znaky.<br>
Heslo mus� ma� minim�lne 6 znakov.";
$locale['458'] = "<strong>Upozornenie:<strong> nepovolen� spustenie skriptu.";
// View Member Profile
$locale['470'] = "Profil";
$locale['472'] = "�tatistiky";
$locale['473'] = "U��vate�sk� skupiny";
// Add Member Errors
$locale['480'] = "Prida� u��vate�a";
$locale['481'] = "Konto bolo �spe�ne vytvoren�.";
$locale['482'] = "Konto nebolo vytvoren�.";
// Suspension Log 
$locale['510s'] = "Z�znam o pozastaven� pre ";
$locale['511s'] = "Nie je z�znam o pozastaven� pre tohto u��vate�a.";
$locale['512s'] = "Predo�l� pozastavenia v ";
$locale['513'] = "�."; // as in number
$locale['514'] = "D�tum";
$locale['515'] = "D�vod";
$locale['516'] = "Pozastavuj�ci administr�tor";
$locale['517'] = "Akcia syst�mu";
$locale['518'] = "Sp� do profilu u��vate�a";
$locale['519'] = "Z�znam o pozastaven� pre tohto u��vate�a ";
$locale['520'] = "Vy�at�: ";
$locale['521'] = "IP: ";
$locale['522'] = "Zatia� neobnoven�";
$locale['540'] = "Chyba";
$locale['541'] = "Chyba: Mus�te uvies� d�vod pre pozastavenie!";
$locale['542'] = "Chyba: Mus�te uvies� d�vod pre bezpe�nostn� BAN!";
// User Management Admin
$locale['550'] = "Pozastaven� u��vate�: ";
$locale['551'] = "Pozastavenie v d�och:";
$locale['552'] = "D�vod:";
$locale['553'] = "Pozastavenie";
$locale['554'] = "Nie je z�znam o pozastaven� pre tohto u��vate�a.";
$locale['555'] = "Ak ste sa rozhodli, �e tento u��vate� by mal by� pozastaven�, kliknite na 'Ban'";
$locale['556'] = "Vy�atie z pozastavenia u��vate�a: ";
$locale['557'] = "Vy�atie z pozastavenia";
$locale['558'] = "Vy�atie z banu u��vate�a: ";
$locale['559'] = "Vy�atie z banu ";
$locale['560'] = "Vy�atie z bezpe�nostn�ho banu u��vate�a: ";
$locale['561'] = "Vy�atie z bezpe�nostn�ho banu";
$locale['562'] = "Ban u��vate�a: ";
$locale['563'] = "Bezpe�nostn� Ban u��vate�a: ";
$locale['585a'] = "Pros�m uve�te d�vod, pre�o je banovan�/odbanovan� ";

$locale['566'] = "Ban vy�at�";
$locale['568'] = "Bezpe�nostn� Ban dan�";
$locale['569'] = "Bezpe�nostn� Ban vy�at�";
$locale['572'] = "Pozastaven� u��vate�";
$locale['573'] = "Pozastavenie vy�at�";
$locale['574'] = "Deaktivovan� u��vate�";
$locale['575'] = "Reaktivovan� u��vate�";
$locale['576'] = "��et ukon�en�";
$locale['577'] = "��et nebol ukon�en�";
$locale['578'] = "��et zru�en� a utajen�";
$locale['579'] = "��et nebol utajen�";
$locale['580'] = "Deaktiv�cia neakt�vnych u��vate�ov";
$locale['581'] = "M�te viac ne� 50 neakt�vnych u��vate�ov a budete musie� spusti� deaktiva�n� proces <strong>%d �asov</strong>.";
$locale['582'] = "Reaktiv�cia";
$locale['583'] = "Obnovenie";
$locale['584'] = "Vyberte nov� funkciu";
$locale['585'] = "Tento u��vate� bol p�vodne zak�zan� z bezpe�nostn�ch d�vodov! Ste si ist�, �e chcete zru�i� z�kaz tohto u��vate�a ?";

$locale['590'] = "Pozastavenie";
$locale['591'] = "Obnovenie";
$locale['592'] = "pozastavenie";
$locale['593'] = "obnovenie";
$locale['594'] = "Zadajte pros�m d�vod, pre�o ste  ";
$locale['595'] = " u��vate� ";
$locale['596'] = "Trvanie:";

$locale['600'] = "Bezpe�nostn� ban";
$locale['601'] = "bezpe�nostn� banovanie";
$locale['602'] = "Odban";
$locale['603'] = "odbanovanie";
$locale['604'] = "D�vod:";
// Deactivation System
$locale['610'] = "<strong>%d u��vate�(s)</strong> nebol prihl�sen� <strong>%d de�(dn�)</strong> a bol ozna�en� ako neakt�vny. 
Deaktivovan�m bud� ma� t�to u��vatelia <strong>%d dn�(s)</strong> predt�m, ne� s� %s.";
$locale['611'] = "Vezmite pros�m na vedomie, �e niektor� u��vatelia m��u ma� predlo�en� obsah na va�ich str�nkach, ako s� f�ra, koment�re, fotky at�.
tie bud� vymazan� spolu s deaktivovan�m u��vate�a.";
$locale['612'] = "u��vate�";
$locale['613'] = "u��vatelia";
$locale['614'] = "Deaktiv�cia";
$locale['615'] = "�plne zmazan�";
$locale['616'] = "utajenie";
$locale['617'] = "Varovanie:";
$locale['618'] = "Doporu�uje sa zmeni� deaktiva�n� akciu na anonimiz�ciu, aby sa nestratili d�ta!";
$locale['619'] = "M��ete tak urobi� <a href='".ADMIN."settings_users.php".$aidlink."'>TU</a>.";
$locale['620'] = "utajenie";
$locale['621'] = "Automatick� deaktiv�cia neakt�vnych u��vate�ov.";
?>                     