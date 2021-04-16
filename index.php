<?php

include 'myname.php';
include 'key.php';
include 'superhero.php';
include 'audi.php';
include 'mystatus.php';
include 'assignment.php';


echo '<i style="color:blue;">Answer of Question 1 and 6:<br></i>';

$mn = new Myname();
echo $mn->fullname;	

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 2:<br></i>';

$keyvalue1= new keyvalue;
$keyvalue1->setkey(60);
$keyvalue1->getkey();

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 3:<br></i>';

$tt = new SuperHero();
echo "Iron man has the following abilities: <br>";	

$tt->getironman();

echo "<br>";

echo "Thor has the following abilities: <br>";	

$tt->getThor();

echo "<br>";

echo "Captain America has the following abilities: <br>";	

$tt->getCaptain();

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 4:<br></i>';
echo "<br>";
$newAudi = new Audi;

echo "Audi has the following feathers: <br>";
echo $newAudi->getAEngnine() ." Engnine <br>";
echo $newAudi->getColor(). " Body Color <br>";
echo $newAudi->getSeat(). " Seat Cover <br>";
echo $newAudi->getBreak(). " Break <br>";

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 5:<br></i>';
echo "<br>";


$newStatus = new MyStatus;
echo "My current status: <br>";
$newStatus->gethome();
echo "<br> and ";
$newStatus->getmOney();

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 6:<br></i>';
echo '<i style="color:red;">Answer giving on number 1:<br></i>';

echo "<br>";
echo "<br>";
echo '<i style="color:blue;">Answer of Question 7:<br></i>';

$assign = new Assignment;
echo "<br>";
$assign->wordcount("ADVANCED WEB APPLICATION DEVELOPMENT");
echo "<br>";
$assign->smallword("ADVANCED WEB APPLICATION DEVELOPMENT");
echo "<br>";
$assign->ReplaceWd("ADVANCED WEB APPLICATION DEVELOPMENT");
echo "<br>";
echo "<br>";


?>