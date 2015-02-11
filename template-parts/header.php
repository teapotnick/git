<?php

//--------------------------------------------------
// Config

	define('CHARSET', 'UTF-8');
	define('LANG', 'en');
	define('FRAMING', 'DENY');

//--------------------------------------------------
// Mime type

	$request_accept = (isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : '');

	$mime_xml = 'application/xhtml+xml';
	if (stripos($request_accept, $mime_xml) !== false) {
		$mime_type = $mime_xml;
	} else {
		$mime_type = 'text/html';
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
// Content Security Policy

	$csp = array(
			'default-src'     => array("'none'"),
			'form-action'     => array("'self'"),
			'style-src'       => array("'self'"),
			'font-src'        => array("'self'"),
			'img-src'         => array("'self'", 'data:', 'https://placekitten.com/'),
			'script-src'      => array("'self'", 'https://ajax.googleapis.com'),
			'reflected-xss'   => 'block',
		);

	$enforced = true;

	if ($enforced) {
		$header = 'Content-Security-Policy';
	} else {
		$header = 'Content-Security-Policy-Report-Only';
	}

	if (FRAMING == 'DENY') {
		$csp['frame-ancestors'] = "'none'";
	} else if (FRAMING == 'SAMEORIGIN') {
		$csp['frame-ancestors'] = "'self'";
	}

	$output = array();
	foreach ($csp as $directive => $value) {
		if ($value !== NULL) {
			if (is_array($value)) {
				$value = implode(' ', $value);
			}
			$output[] = $directive . ' ' . str_replace('"', "'", $value);
		}
	}

	header($header . ': ' . head(implode('; ', $output)));

//--------------------------------------------------
// Headers

	header('Content-Type: ' . head($mime_type) . '; charset=' . head(CHARSET));
	header('X-XSS-Protection: 1; mode=block');
	header('X-Frame-Options: ' . head(FRAMING));

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
	</head>
<!-- NAVBAR
================================================== -->
	<body>
		<?php include('navbar.php'); ?>