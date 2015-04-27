<?php
require "../common/medoo.php";
$database=new medoo();
$countup=0;
$zeroone=0;
$cricket=0;
$rating=0;
$year=2000;
$month=1;
$day=1;
$count_record=$database->count("record");
if($count_record>0){
	$datas=$database->get(
		"record",
		array("countup","zeroone","cricket","rating","year","month","day"),
		array(
			"ORDER"=>array("year DESC","month DESC","day DESC")
		)
	);
	$countup=$datas["countup"];
	$zeroone=$datas["zeroone"];
	$cricket=$datas["cricket"];
	$rating=$datas["rating"];
	$year=$datas["year"];
	$month=$datas["month"];
	$day=$datas["day"];
}
?>