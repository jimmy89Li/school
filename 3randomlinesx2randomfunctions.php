<?php
function getClass(){	
	$class = "Level 1";
	$random = rand(0,3);
	
	if($random==0)
	{
	$class = "Level 2";
	}
	elseif($random==1)
	{
	$class = "Level 3";
	}
	elseif($random==2)
	{
	$class = "Level 4";
	}
	return($class);
}

function getName(){
	$name = "Apprentice";
	$random = rand(0,3);
	
	if($random==0)
	{
	$name = "Intermediate Apprentice";
	}
	elseif($random==1)
	{
	$name = "Advanced Apprentice";
	}
	elseif($random==2)
	{
	$name = "Higher Apprentice";
	}
	elseif($random==3)
	{
	$name = "Proffesional";
	}
	return($name);
}

function getAction(){
	$action = "FIGHT!";
	$random = rand(0,3);
	
	if($random==0){
		$action = ("FIGHT!");
	}
	elseif($random==1){
		$action = ("RUN!");
	}
	elseif($random==2){
		$action = ("SCREAM!");
	}
	elseif($random==3){
		$action = ("DANCE!");
	}
	return($action);
}


$class1 = getCLass();
$name1 = getName();

$class2 = getCLass();
$name2= getName();

$class3 = getCLass();
$name3 = getName();

$action = getAction();

echo ("You are a " .$name1. " " .$class1. ".<br/>");
echo ("In your left there is a $name2 $class2 <br/>");
echo ("In your right there is a " .$name3. " " .$class3. ".<br/>");
echo (getAction());
echo ($action);
?>