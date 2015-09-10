<?php
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

echo ("You are a " .$name. " " .$class. ".");
?>