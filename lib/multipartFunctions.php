<?php

/* 
   результаты умножения base на 
   числа от 0 до 10. Возвращает массив.
   Нулевой элемент массива равен base,
   все остальные результатам умножения
*/
function getMultiplicationResults($base) 
{
    $ressultsArray=[];
	$ressultsArray[0]=$base;
	
	for($i=1; $i<11; $i++)
	{
	    $ressultsArray[$i]=$i*$base;
	}
	
	return $ressultsArray;
}


//конкатенация строк
function concatStrings(...$strParam)
{
    $str='';
	
	foreach($strParam as $val)
	{
		$str.=$val;
	}
	
	return $str;
}

/*
    Принимает массив возвращенный функцией getMultiplicationResults
    возвращает строку с таблицей умножения для числа от 1 до 10.
	Не работает без функции concatStrings.
	
*/
function createMultiplicationTable($multiArray)
{
	
	$base=(string)$multiArray[0];
	$tableStr='<table>';
	
	for($i=1; $i<11; $i++)
	{
	    $tableStr.=concatStrings(
		              "<tr><td>", 
			          $base, 
			          " * ", 
					  (string)$i,
			          "=", 
			          (string)$multiArray[$i], 
			          "</td></tr>"
			          );			  
	}
	$tableStr.='</table>';
	
	return $tableStr;
}



//РАЗУКРАШЕНАЯ ТАБЛИЦА 
/* 
    Принимает число number и массив с классами цветов colorClassArr.
	colorClassArr определен в файле conf/configTemplates.php.
	Возвращает строку с разукрашеным числом
	
*/
function decorateMultiplicationTableNumbers($number, $colorClassArr)
{
   $str='';

   
   
	if($number>=0 && $number<10)
	{	   
		
		$str.="<span class='".$colorClassArr[$number]."'>{$number}</span>";
	}
		   
    if($number>=10 && $number<=100)
    {
	    $unitsRank=$number%10;
	    $tensRank=($number-$unitsRank)/10;
	   
	    $str.="<span class='".$colorClassArr[$tensRank]."'>{$tensRank}</span>";
	    $str.="<span class='".$colorClassArr[$unitsRank]."'>{$unitsRank}</span>";
	           
    } 
	   

    return $str;
}


/*
    Принимает массив возвращенный функцией getMultiplicationResults (multiArray)
	и массив с именами классов цветов (colorClassArr).
	Возвращает разукрашенную таблицу умножения для числа от 1 до 10.
	Не работает без функции decorateMultiplicationTableNumbers
*/
function createColorMultiplicationTable($multiArray, $colorClassArr)
{
	$base=$multiArray[0];
	$tableStr='';
	
	$colorBase=decorateMultiplicationTableNumbers($base, $colorClassArr);
	
	$tableStr='<table>';
	
	for($i=1; $i<11; $i++)
	{
		$color_i=decorateMultiplicationTableNumbers($i, $colorClassArr);
		$colorResult=decorateMultiplicationTableNumbers($multiArray[$i], $colorClassArr);
		
	    $tableStr.=concatStrings(
		              "<tr><td>", 
			          $colorBase, 
			          " * ", 
					  $color_i,
			          "=", 
			          $colorResult, 
			          "</td></tr>"
			          );			  
	}
	
    $tableStr.='</table>';
	
	return $tableStr;
}


