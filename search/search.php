<?php
/**
* Easy Search Redirect GeHackE
*/
if ( isset( $_GET["s"] ) && !empty( $_GET["s"] ) && isset( $_GET["r"] ) && !empty( $_GET["r"] ) ) {

	$tag = @$_GET["s"]; #laber%20rababer
	
	$url = @$_GET["r"]; #<https://domain.tld>/<feedname>/show/search/ 

	header('location: '.$url. '/show/search/'.$tag.'');
}

?>
