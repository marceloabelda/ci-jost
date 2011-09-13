<?php
	$path= BASEPATH.'/../';
	exec('cd $path');
	/*
	if (ENVIRONMENT=='development') {
		$output='git pull origin master';
	} else {
		exec('git status', $output);
	}
	*/
	exec('git pull origin master', $output);
	echo "<pre>";
	print_r( $output);
	echo "</pre>";
