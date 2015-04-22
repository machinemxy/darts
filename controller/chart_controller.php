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
	$r_lastDays=$database->query("select year,month,max(day) day from record group by year,month order by year desc,month desc limit 0,20")->fetchAll();
	$lastDays=array_reverse($r_lastDays);
	foreach($lastDays as $lastDay){
		$score=$database->get(
			"record",
			$dbName,
			array(
				"AND"=>array(
					"year"=>$lastDay['year'],
					"month"=>$lastDay['month'],
					"day"=>$lastDay['day']
				)
			)
		);
		array_push($scores,$score);
		array_push($dates,$lastDay['year'].'/'.$lastDay['month']);
	}
}

/* Create and populate the pData object */
$MyData = new pData();  
$MyData->addPoints($scores,$lbName);

//adjust color
$serieSettings = array("R"=>34,"G"=>139,"B"=>34);
if($_GET['gameType']==2){
	$serieSettings = array("R"=>255,"G"=>0,"B"=>0);
}elseif($_GET['gameType']==3){
	$serieSettings = array("R"=>11,"G"=>11,"B"=>229);
}elseif($_GET['gameType']==4){
	$serieSettings = array("R"=>218,"G"=>165,"B"=>32);
}
$MyData->setPalette($lbName,$serieSettings);
$MyData->addPoints($dates,"Labels");
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
