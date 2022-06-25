<?php
if(!empty($_GET['page'])){
	include_once($_GET['page'].".php");
}else{
	include ("content.php");
}
?>