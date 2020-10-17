<?php
require_once "lib/multipartFunctions.php";
require_once "lib/templatesFunctions.php";

require_once "conf/configTemplates.php";

require_once "templates/template_head.php";
require_once "templates/template_header.php";
require_once "templates/template_menu.php";

echo '<main>';
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
	}
}
else{
	require_once "templates/template_main_page.php";
}

echo '</main>';

require_once "templates/template_footer.php";



