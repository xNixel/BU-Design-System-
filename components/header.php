<?php

// Version Control
// patrick: Adjust version as needed
$version = "BUDz v1.0";

// Current Filename
$pagename = basename($_SERVER["SCRIPT_FILENAME"], '.php');

// Modify filename 
// - replace underscores (_) with space
// - expand ampersand (&) with space ( & )
// - Uppercase first letter of each word
$pagename = str_replace("_", ' ', $pagename);
$pagename = str_replace("&", ' & ', $pagename);
$pagename = preg_replace_callback(
	'/(?<=( |-))./',
	function ($m) {
		return strtoupper($m[0]);
	},
	$pagename
);

$pagename = ucfirst($pagename);

// Manual filename modification
switch ($pagename) {
	case "Blockui":
		$pagename = "BlockUI";
		break;
	case "Faqs":
		$pagename = "FAQs";
		break;
	case "Sweetalert2":
		$pagename = "SweetAlert2";
		break;
	default:
		break;
}
;

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>

	<!-- Mobile Specific Metas -->
	<meta charset=" utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Bicol University Design System">
	<meta name="author" content="Bicol University ICTO">

	<!-- Dynamic Title -->
	<!-- patrick: This title automatically adjusts base on which file/page it is in -->
	<title>
		<?php if ($pagename == "Index") {
			echo $version;
		} else { ?>
			<?php echo $pagename ?> ·
			<?php echo $version;
		} ?>
	</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo $path ?>assets/img/favicon/favicon.ico" />

	<!-- Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<!-- CUSTOM CSS -->
	<!-- <link href="<?php echo $path ?>assets/css/docs.css" rel="stylesheet"> -->
	<link href="<?php echo $path ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo $path ?>assets/css/custom_bootstrap.css" rel="stylesheet">

	<link href="<?php echo $path ?>assets/css/budz.css" rel="stylesheet">

	<!-- 
	<link href="assets/css/sneat.css" rel="stylesheet">
	<link href="ssets/vendor/css/core.css" rel="stylesheet">
	<link href="assets/vendor/css/theme-default.css" rel="stylesheet">
	<link href="assets/vendor/css/demo.css" rel="stylesheet"> -->

	<!-- SNEAT -->
	<link rel="stylesheet" href="<?php echo $path ?>assets/vendor/libs/swiper/swiper.css" />

	<link rel="stylesheet" href="<?php echo $path ?>assets/vendor/css/pages/ui-carousel.css" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900'
		rel='stylesheet' type='text/css'>
	<link href="http://fonts.cdnfonts.com/css/proxima-nova-2" rel="stylesheet">

	<!-- Icons -->
	<link
		href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
		integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?php echo $path ?>assets/plugins/themify-icons/themify-icons.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<!-- Highlight -->
	<link href="<?php echo $path ?>assets/css/prism.css" rel="stylesheet">

</head>