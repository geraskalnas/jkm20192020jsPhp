<!DOCTYPE HTML>
<html>
<head></head>
<body>
<?php
function arRaides($kin){
	for($i=0;$i<strlen($kin);$i++){
		$o=ord(strtolower($kin[$i]));
		if($o<97 || $o>122){
			return false;
		}
	}
	return true;
}

echo arRaides($_GET["vardas"])?"Egzistuoja tik raides":"Yra visko";
?>
</body>
</html>