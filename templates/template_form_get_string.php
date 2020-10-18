<!-- ШАБЛОН ФОРМЫ ОТПРАВКИ ТЕКСТОВОЙ СТРОКИ -->

<div class='revers-text-form'>
    <form method='GET' action='<?php echo MAIN_PROGRAM_FILE; ?>'>
        <input type='hidden' name='page' value='lesson3'><br>
	    <p><?php echo $messageReversTextForm; ?></p>
        <input type='text' name='newText' class='revers-text-field'><br><br>
	    <button type='submite' name='sendText' value='send'>
	        Отправить
	    </button>
    </form>
</div>
