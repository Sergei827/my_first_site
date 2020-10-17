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

//принимает массив возвращенный функцией getMultiplicationResults
//возвращает строку с таблицей умножения
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


function decorateMultiplicationTableNumbers($number, $colorClassArr)
{
   $str='';

   
   for($i=0; $i<count($colorClassArr); $i++)
	   {
		   if($number>=0 && $number<10)
		   {	   
		       if($colorClassArr[$i])
		       {
		           $str.="<span class='>".$colorClassArr[$i]."$i</span>";
		       }
		   }
		   
		   if($number<10 && $number>100)
           {
	           $unitsRank=$number%10;
	           $tensRank=($number-$unitsRank)/10;
	   
	           for($i=0; $i<count($colorClassArr); $i++)
	           {
		           if($colorClassArr[$i])
		           {
		               $str.="<span class='>".$colorClassArr[$i]."$tensRank</span>";
			           $str.="<span class='>".$colorClassArr[$i]."$unitsRank</span>";
		           }
	           }
           } 
	   }

    return $str;
}



function createColorMultiplicationTable($multiArray, $colorClassArr)
{
	$base=$multiArray[0];
	$tableStr='';
	
	$colorBase=decorateMultiplicationTableNumbers($base, $colorClassArr);
	
	for($i=1; $i<11; $i++)
	{
		$color_i=decorateMultiplicationTableNumbers($i);
		$colorResult=decorateMultiplicationTableNumbers($multiArray[$i]);
		
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
	
   
	return $tableStr;
}


