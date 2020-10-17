<?php 
    if(isset($_GET['sendText']))
	{
	    $reversText='';
		
		if(isset($_GET['newText']))
		{
			$newText=$_GET['newText'];
			
		    for($i=(mb_strlen($newText)-1); $i>=0; $i--)
		    {
			    $reversText.=mb_substr($newText, $i, 1);
		    }
		}
		
	echo "Строка наоборот:";
    echo $reversText;	
	}
?>



<form method='GET' action='form.php'>
    <input type='text' name='newText'><br>
	<button type='submite' name='sendText' value='send'>
	    Отпаравить
	</button>
</form>
