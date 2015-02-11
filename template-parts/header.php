<?php

//--------------------------------------------------
// Config

	define('CHARSET', 'UTF-8');
	define('LANG', 'en');

//--------------------------------------------------
// Mime type

	$request_accept = (isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : '');

	$mime_xml = 'application/xhtml+xml';
	if (stripos($request_accept, $mime_xml) === false) {
		$mime_type = 'text/html';
	} else {
		$mime_type = $mime_xml;
	}

//--------------------------------------------------
// Support functions

	function html($text) {
		return htmlspecialchars($text, ENT_QUOTES, CHARSET); // htmlentities does not work for HTML5+XML
	}

	function head($text) {
		return str_replace(array("\r", "\n", "\0"), '', $text);
	}

//--------------------------------------------------
// Headers

	header('Content-Type: ' . head($mime_type) . '; charset=' . head(CHARSET));

?>
<!DOCTYPE html>
<html lang="<?= html(LANG) ?>" xml:lang="<?= html(LANG) ?>" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="<?= html(CHARSET) ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="/favicon.ico" />

		<title>Git Exercise</title>

		<!-- Bootstrap core CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="/css/carousel.css" rel="stylesheet" />
		<link href="/css/customisations.css" rel="stylesheet" />
		<script src="/js/holder.js"></script>
	</head>
<!-- NAVBAR
================================================== -->
	<body>
		<?php include('navbar.php'); ?>