<?php
if (ENVIRONMENT=='development') {
	$path= '/home/marcelo/Escritorio/*';
} else {
	$path=  '/home/*';
}
		
exec('ls -1 '.$path, $output);
echo "<pre>";
print_r( $output);
echo "</pre>";
