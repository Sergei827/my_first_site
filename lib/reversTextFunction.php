<?php 

//принимает строку 
//и возвращает ее в обратном порядке
function reverseText($text)
{
	$reversText='';
	
    for($i=(mb_strlen($text)-1); $i>=0; $i--)
    {
	   $reversText.=mb_substr($text, $i, 1);
    }
	
	return $reversText;
}