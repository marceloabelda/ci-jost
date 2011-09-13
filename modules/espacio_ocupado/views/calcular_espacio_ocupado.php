<?php

	if (ENVIRONMENT=='development') {
		$path= '/home/marcelo/Escritorio/*';
	} else {
		$path=  '/home/*';
	}
	exec('du -csh '.$path, $output);
	echo "<pre>";
	print_r( $output);
	echo "</pre>";
