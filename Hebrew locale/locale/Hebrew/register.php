<?php
$locale['400'] = "הרשמה";
$locale['401'] = "ביצוע אקטיבציה לחשבון";
// Registration Errors
$locale['402'] = "יש לספק שם משתמש, סיסמא וכתובת דואל";
$locale['403'] = "שם משתמש מכיל תווים לא חוקיים";
$locale['404'] = "שתי הסיסמאות אינן זהות";
$locale['405'] = "סיסמא לא חוקית, יש להשתמש בתווי אותיות ומספרים בלבד<br />
הסיסמא חייבת להכיל 6 תווים לפחות";
$locale['406'] = "כתובת הדואל אינה חוקית";
$locale['407'] = "מצטערים שם המשתמש ".(isset($_POST['username']) ? $_POST['username'] : "")." כבר בשימוש";
$locale['408'] = "מצטערים כתובת הדואל ".(isset($_POST['email']) ? $_POST['email'] : "")." כבר בשימוש";
$locale['409'] = "חשבון לא פעיל כבר נרשם עם כתובת דואל זו";
$locale['410'] = "קוד האימות אינו נכון";
$locale['411'] = "כתובת הדואל או הדומיין של כתובת הדואל מופיעים ברשימה השחורה";
// Email Message
$locale['449'] = "ברוכים הבאים לאתר ";//.$settings['sitename'];
$locale['450'] = "שלום ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
ברוכים הבאים לאתר ".$settings['sitename'].". להלן פרטי החיבור שלך:\n
שם משתמש: ".(isset($_POST['username']) ? $_POST['username'] : "")."
סיסמא: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
יש לבצע אקטיבציה לחשבונך בעזרת קישור זה:\n";
// Registration Success/Fail
$locale['451'] = "ההרשמה הסתיימה";
$locale['452'] = "כעת ניתן להתחבר";
$locale['453'] = "מנהל יפעיל את חשבונך בזמן הקרוב";
$locale['454'] = "ההרשמה שלך כמעט הסתיימה, בקרוב ישלח אליך דואל המכיל את פרטי החיבור שלך וכן קישור לאימות החשבון.";
$locale['455'] = "החשבון שלך אומת";
$locale['456'] = "ההרשמה נכשלה";
$locale['457'] = "שליחת הדואל נכשלה, אנא פנה <a href='mailto:".$settings['siteemail']."'>למנהל האתר</a>.";
$locale['458'] = "הרשמה נכשלה בשל הסיבות הבאות:";
$locale['459'] = "אנא נסו שוב";
// Register Form
$locale['500'] = "נא למלא את הטופס הבא! ";
$locale['501'] = "דואל אימות ישלח לכתובת הדואל שמסרת. ";
$locale['502'] = "יש למלא שדות המסומנים בכוכבית <span style='color:#ff0000;'>*</span> .
תשומת לבכם שיש למלא את שם המשתמש <span style='color:#ff0000;'>באנגלית או בעברית</span> וכן שיש חשיבות לאותיות גדולות וקטנות בשם המשתמש ובסיסמא.";
$locale['503'] = " לאחר החיבור לאתר ניתן לערוך ולהוסיף פרטים על ידי לחיצה על עריכת פרופיל.";
$locale['504'] = "קוד אימות:";
$locale['505'] = "הכנסת קוד אימות:";
$locale['506'] = "הרשמה";
$locale['507'] = "מערכת ההרשמה אינה פעילה כרגע";
$locale['508'] = "תנאי ההסכם";
$locale['509'] = "קראתי את <a href='".BASEDIR."print.php?type=T' target='_blank'>תנאי ההסכם</a> ואני מסכים ומאשר אותם.";
// Validation Errors
$locale['550'] = "יש לספק שם משתמש";
$locale['551'] = "יש לספק סיסמא";
$locale['552'] = "יש לספק כתובת דואל";
?>