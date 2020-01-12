<?php
function duomenu_atrinkimas($skiltys, $lentele){
	$sql="SELECT ";
	foreach($skiltys as $skiltis){
		$sql .= "$skiltis, ";
	}
	$sql = substr($sql, 0, -2);//sunaikina paskutinius 2 simbolius
	$sql .= "FROM $lentele;"
	$result = $conn->query($sql)
	return $row;
}
function duomenu_iterpimas(){
	
}
function duomenu_atnaujinimas(){
	
}
function duomenu_trynimas(){
	
}
?>