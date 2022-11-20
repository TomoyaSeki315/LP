<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
//	header('Location: '.$uri.'/src/portfolio.php');
//S	header('Location: '.$uri. '/hellow.php');
	header('Location: '.$uri. '/src/lp/lp.php');
	exit;
?>
Something is wrong with the XAMPP installation :-(


	