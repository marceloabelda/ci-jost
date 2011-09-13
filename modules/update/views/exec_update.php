<?php
	$path= BASEPATH.'/../';
	exec('cd $path');
	exec('ls -1 ', $output);
	echo "<pre>";
	print_r( $output);
	echo "</pre>";
