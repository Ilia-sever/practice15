<?php
//формат даты дд.мм.гггг
function isdate ($d) {
	if (gettype($d)<>"string") {return false;}
	if (strlen($d)<>10) {return false;}
	if ($d[2]<>"."||$d[5]<>".") {return false;}
	if (checkdate((int)($d[3].$d[4]),(int)($d[0].$d[1]),(int)($d[6].$d[7].$d[8].$d[9]))==false) {return false;}
	return true;
}
if (isdate("19.03.2017")) {echo "Дата действительна";} else {echo "Дата недействительна";};
?>
