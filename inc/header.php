<?php
$page = $_SERVER['PHP_SELF'];
$page = explode('/', $page);
$page_path = end($page);

switch ($page_path) {
	case "index.php":
		$title = '';
		$keyword = '';
		$description = '';
		break;
	default:
		$title = '';
		$keyword = '';
		$description = '';
		break;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>IT Service Provider Company</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="icon" type="img/icon" href="assets/img/favicon.io">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="stylesheet" href="assets/css/owl-slider/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body class="d-flex flex-column min-vh-100">