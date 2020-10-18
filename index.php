<?php

//подключение библиотеки функций
require_once "lib/reversTextFunction.php";
require_once "lib/multipartFunctions.php";
require_once "lib/templatesFunctions.php";

//подключение конфигурационного файла шаблонов
require_once "conf/configTemplates.php";

//подключение шаблонов head, header, menu
require_once "templates/template_head.php";
require_once "templates/template_header.php";
require_once "templates/template_menu.php";

//начало вывода содержимого страниц
echo '<main>';

//маршрутизация
if(isset($_GET['page']))
{
    switch($_GET['page'])
	{
		case 'main':
		    require_once "templates/template_main_page.php";
		    break;
		case 'lesson1':
			require_once "templates/template_multiplication_table.php";
            break;
        case 'lesson2':
            require_once "templates/template_color_multiplication_table.php";
            break;
        case 'lesson3':
            require_once "templates/template_form_get_string.php";
			
			//обработка введенной пользователем строки 
			//вывод строки в обратном порядке
			if(isset($_GET['sendText']))
	        {
	            $reversText='';
		
		        if(isset($_GET['newText']) && ($_GET['newText']!==''))
		        {
				 $messageReversText1='Вы ввели: <br>';
                 $messageReversText2='Ваша строка наоборот: <br>';					 
	
			     $text=htmlentities($_GET['newText']);
				 $originalString=$text;
				 
				 //функция reverseText определенна
				 //в файле lib/reversTextFunction.php
		         $reversString=reverseText($originalString);
				 
				 require_once "templates/template_form_get_string.php";
			     require_once "templates/template_revers_text.php";
		        }
		
	        }
			
            break;			
	}
}
else{
	require_once "templates/template_main_page.php";
}

echo '</main>';

require_once "templates/template_footer.php";



