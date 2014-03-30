<?php


function build_template($data, $file = 'mail_template.html'){
	$content = @file_get_contents($file);
	if( !$content ) return false;
	$variables = explode(' ', 'NAME TITLE DESC URL CONTENT_IMAGE');

	// manipulating data set
	if( $data[CONTENT_IMAGE] ){
		$data[CONTENT_IMAGE] = '<tr><td><img src="'. $data[CONTENT_IMAGE] .'" alt=""></td></tr>';
	}
	if( $data[DESC] ){
		$data[DESC] = $data[DESC] .'<br><br>';
	}

	// injecting variables to template
	foreach ($variables as $key){
		// variable content
		if( $data[ $key ] ) $value = $data[ $key ];
		else $value = '';

		// replacing variables
		$content = str_replace('__'.$key.'__', $value, $content);
	}

	// result
	return $content;
}


?>