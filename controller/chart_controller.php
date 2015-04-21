<?php
require "../class/pData.class.php";
require "../class/pDraw.class.php";
require "../class/pImage.class.php";
require "../common/medoo.php";
$database=new medoo();

//demand field
$dbName="countup";
$lbName="count-up";
if($_GET['gameType']==2){
	$dbName="zeroone";
	$lbName="01";
}elseif($_GET['gameType']==3){
	$dbName="cricket";
	$lbName="cricket";
}elseif($_GET['gameType']==4){
	$dbName="rating";
	$lbName="rating";
}

$scores=array();
$dates=array();
if($_GET['spanType']==1){
	$r_datas=$database->select(
		"record",
		array("month","day",$dbName),
		array(
			"ORDER"=>array("year DESC","month DESC","day DESC"),
			"LIMIT"=>array(0,20)
		)
	);
	$datas=array_reverse($r_datas);
	foreach($datas as $data){
		array_push($scores,$data[$dbName]);
		array_push($dates,$data['month'].'/'.$data['day']);
	}
}else{

}

//get data for chart
$database=new medoo();
$connector->query("select year,month,day,countup from record order by year desc,month desc,day desc limit 0,20");
$r_date=array();
$r_score=array();
while(list($year,$month,$day,$countup)=mysql_fetch_row($connector->result)){
	array_push($r_date,$month."/".$day);
	array_push($r_score,$countup);
}
$date=array_reverse($r_date);
$score=array_reverse($r_score);

$connector->disconnect();

/* Create and populate the pData object */
$MyData = new pData();  
$MyData->addPoints($score,"count-up");

//adjust color
$serieSettings = array("R"=>34,"G"=>139,"B"=>34);
$MyData->setPalette("count-up",$serieSettings);
$MyData->addPoints($date,"Labels");
$MyData->setSerieDescription("Labels","Dates");
$MyData->setAbscissa("Labels");

/* Create the pChart object */
$myPicture = new pImage(700,230,$MyData);

/* Turn of Antialiasing */
$myPicture->Antialias = FALSE;

/* Add a border to the picture */
$myPicture->drawRectangle(0,0,699,229,array("R"=>0,"G"=>0,"B"=>0));
 
/* Set the default font */
$myPicture->setFontProperties(array("FontName"=>"../fonts/pf_arma_five.ttf","FontSize"=>6));

/* Define the chart area */
$myPicture->setGraphArea(60,40,650,200);

/* Draw the scale */
$scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE);
$myPicture->drawScale($scaleSettings);

/* Turn on Antialiasing */
$myPicture->Antialias = TRUE;

/* Draw the line chart */
$myPicture->drawLineChart();

/* Write the chart legend */
$myPicture->drawLegend(540,20,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));

/* Render the picture (choose the best way) */
$myPicture->autoOutput("finish.png");
?>
