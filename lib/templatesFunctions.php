<?php

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