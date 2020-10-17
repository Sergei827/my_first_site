
<?php

//TEMPLATE
//head title
define('TITLE', 'NIX lessons');

/* 
    Header
    Определение констант и переменных 
	шапки сайта 
*/

define('HEAD_FIRST_TITLE', 'NIX');
define('HEAD_SECOND_TITLE', 'lessons');

/* пункты навигационого меню сайта */
define('MAIN_PROGRAM_FILE', 'index.php');

$navMenu=[];
$navMenu['Главная']=MAIN_PROGRAM_FILE.'?page=main';
$navMenu['Урок 1']=MAIN_PROGRAM_FILE.'?page=lesson1';
$navMenu['Урок 2']='#';

$menuItems=createNavMenuItems($navMenu);


/* footer */
define('COPY', '&copy; Сергей Марченко, ');


/* multiplication table */

$multiArr=getMultiplicationResults(1);
$multiTable1=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(2);
$multiTable2=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(3);
$multiTable3=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(4);
$multiTable4=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(5);
$multiTable5=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(6);
$multiTable6=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(7);
$multiTable7=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(8);
$multiTable8=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(9);
$multiTable9=createMultiplicationTable($multiArr);

$multiArr=getMultiplicationResults(10);
$multiTable10=createMultiplicationTable($multiArr);