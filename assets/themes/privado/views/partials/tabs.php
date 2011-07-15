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
    echo_tab($tab, 'tablero', 'Tablero');
    echo_tab($tab, 'opciones', 'Opciones');
    echo_tab($tab, 'modulo1', 'Modulo 1');
    echo "</ul>";

?>

