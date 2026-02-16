<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('title')</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Développeur Web fullstack et marketeur digital passionné !">
	<meta name="author" content="Tankoua Brecht">
	<link href="{{ asset('/frontend/favicon.png') }}" rel="icon">
    <link href="{{ asset('/frontend/favicon.png') }}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Bootstrpa Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
	<!-- FontAwesome JS -->
    <script defer src="{{ asset('assets/fontawesome/js/all.js')}}"></script>

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/shine.css')}}">
    <style>

    </style>
</head>


<body class="light-mode">

	<div class="container-fluid">
        @yield('content')
	</div><!--//container-->

	<footer class="footer text-center py-4">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">CV | Tankoua Mfanyi Berthold</small>
	</footer>

</body>
