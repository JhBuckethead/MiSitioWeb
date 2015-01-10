<?php
	$link =mysql_connect("localhost","root","epifonandgibson94");
	if($link){
		mysql_select_db("academias",$link);
	}
?>