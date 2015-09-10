<?php
$age = 0;
$message0 = "At first, ";
$message1 = "you are age ";
$message2 = "After a while: ";
$message3 = "you die!";

	echo ($message0);

while($age<50){
	$random = rand(1,3);
	if($random==1){
		echo ($message1 . $age . "!<br/>");
		$age += 10;
		echo ($message2);
	}
	elseif($random==2){
		echo ($message1 . $age. "!<br/>");
		echo ($message2);
	}
	elseif($random==3){
		echo ($message1 . $age. "!<br/>");
		echo ($message2);
	}
}
	echo ($message3);
?>