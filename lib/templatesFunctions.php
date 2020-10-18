<?php

/*
    Принимает массив ключами которого являються имена 
	пунктов меню, а значениями ссылки.
	Возвращает меню на основе списков.
*/
function createNavMenuItems($itemsArray)
{
	$items='';
	
	foreach($itemsArray as $key=>$val)
	{
		$items.="<li class='menu-item'>";
	    $items.="<a href='{$val}' class='menu-link'>{$key}</a>";
		$items.="</li>";
	}
	
	return $items;
}