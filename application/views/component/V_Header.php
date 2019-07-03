<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="dns-prefetch" href="<?= base_url(); ?>">
    <title>Guest Book | BPTIK</title>
    <meta name="title" content="Guest Book | BPTIK">
    <meta name="description" content="Aplikasi buku tamu BPTIK DIKBUD Provinsi Jawa Tengah">
	<meta property="og:url" content="<?= base_url(); ?>" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:site_name" content="Guest Book | BPTIK" />
	<meta property="og:title" content="Guest Book | BPTIK"/>
	<meta property="og:description" content="Aplikasi buku tamu BPTIK DIKBUD Provinsi Jawa Tengah." />
	<link type="image/x-icon" rel="shortcut icon"
		href="<?= base_url('assets/img/favicon.ico'); ?>">
	<link type="image/png" rel="icon"
		href="<?= base_url('assets/img/favicon-16x16.png'); ?>" sizes="16x16" />
	<link type="image/png" rel="icon"
		href="<?= base_url('assets/img/favicon-32x32.png'); ?>" sizes="32x32" />
	<link type="image/png" rel="apple-touch-icon"
		href="<?= base_url('assets/img/favicon-32x32.png'); ?>">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/bulma/css/bulma.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/bulma/extensions/bulma-carousel.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/bulma/extensions/bulma-calendar.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/bulma/extensions/bulma-checkradio.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/bulma/extensions/bulma-quickview.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/bulma/extensions/bulma-dataTables.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/animate/animate.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/main.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<link type="text/css" rel="preload" as="style"
		href="<?= base_url('assets/css/fontawesome/css/all.min.css'); ?>"
		onload="javascript:this.onload=null; this.rel='stylesheet';">
	<noscript>
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/bulma/css/bulma.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/bulma/extensions/bulma-carousel.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/bulma/extensions/bulma-calendar.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/bulma/extensions/bulma-checkradio.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/bulma/extensions/bulma-quickview.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/datatables/jquery.dataTables.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/main.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/animate/animate.min.css'); ?>">
		<link type="text/css" rel="stylesheet"
			href="<?= base_url('assets/css/fontawesome/css/all.min.css'); ?>">
	</noscript>
	<script type="text/javascript">window.base_url = '<?= base_url(); ?>';</script>
</head>
<body class="has-background-light">