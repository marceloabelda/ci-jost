  <!-- tabs -->
<?php

function echo_tab($tab, $link, $text) {
	
	if ($tab==$link){
		echo "<li class='selected'> ".anchor($link, $text)." </li>";
	} else {
		echo "<li> ".anchor($link, $text)." </li>";
		
	}
	
	
	
}
	echo "<ul>";
    echo_tab($tab, 'opciones', 'Opciones');
    echo "</ul>";
;

?>
