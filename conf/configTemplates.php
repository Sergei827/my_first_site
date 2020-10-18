
<?php
/* 
   КОНФИГУРАЦИОННЫЙ ФАЙЛ ДЛЯ ШАБЛОНОВ 
   (каталог templates)
*/
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
//главный файл сайта
define('MAIN_PROGRAM_FILE', 'index.php');

//пункты меню
$navMenu=[];
$navMenu['Главная']=MAIN_PROGRAM_FILE.'?page=main';
$navMenu['Урок 1']=MAIN_PROGRAM_FILE.'?page=lesson1';
$navMenu['Урок 2']=MAIN_PROGRAM_FILE.'?page=lesson2';
$navMenu['Урок 3']=MAIN_PROGRAM_FILE.'?page=lesson3';

$menuItems=createNavMenuItems($navMenu);


/* footer */
//копирайт
define('COPY', '&copy; Сергей Марченко, ');


/* multiplication table */

/*
   массив с именами классов
   для цветной таблицы умножения
*/
$colorClassesArray=[];
$colorClassesArray[0]='';
$colorClassesArray[1]='red-text';
$colorClassesArray[2]='green-text';
$colorClassesArray[3]='yellow-text';
$colorClassesArray[4]='blue-text';
$colorClassesArray[5]='';
$colorClassesArray[6]='';
$colorClassesArray[7]='';
$colorClassesArray[8]='';
$colorClassesArray[9]='';
$colorClassesArray[10]='';

/* 
    необходимо что б файл lib/multipartFunctions.php
	подключался раньше. Функции getMultiplicationResults,
	createMultiplicationTable, createColorMultiplicationTable
	определенны в файле lib/multipartFunctions.php.
*/
//генерация таблиц умножения
$multiArr=getMultiplicationResults(1);
$multiTable1=createMultiplicationTable($multiArr);
$colorMultiTable1=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(2);
$multiTable2=createMultiplicationTable($multiArr);
$colorMultiTable2=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(3);
$multiTable3=createMultiplicationTable($multiArr);
$colorMultiTable3=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(4);
$multiTable4=createMultiplicationTable($multiArr);
$colorMultiTable4=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(5);
$multiTable5=createMultiplicationTable($multiArr);
$colorMultiTable5=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(6);
$multiTable6=createMultiplicationTable($multiArr);
$colorMultiTable6=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(7);
$multiTable7=createMultiplicationTable($multiArr);
$colorMultiTable7=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(8);
$multiTable8=createMultiplicationTable($multiArr);
$colorMultiTable8=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(9);
$multiTable9=createMultiplicationTable($multiArr);
$colorMultiTable9=createColorMultiplicationTable($multiArr, $colorClassesArray);

$multiArr=getMultiplicationResults(10);
$multiTable10=createMultiplicationTable($multiArr);
$colorMultiTable10=createColorMultiplicationTable($multiArr, $colorClassesArray);


/* РЕВЕРС ВВЕДЕННОГО ТЕКСТА */
$messageReversTextForm='Введите строку:';

$messageReversText1='';
$messageReversText2='';
$originalString='';
$reversString=''; 