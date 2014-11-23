<?php include('Constants.php'); ?>

<!doctype html>
<html xmlns:og="http://ogp.me/ns" lang="pt-br">
<head>
	<meta charset="utf-8" />

	<title><?php echo _TITLE ?></title>

  <!-- META TAGS -->
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="telephone=yes">
  <meta http-equiv="cleartype" content="on">

  <!-- Facebook  -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.dddmg.org" />
  <meta property="og:title" content="DDDMG 2015 | International Simposium on Digital Disease Detection for Masgathering." />
  <meta property="og:image" content="" />
  <meta property="og:description" content="Description here :)" />

  <!-- Twitter -->
  <meta name="twitter:card" value="summary_large_image">
  <meta name="twitter:card" value="summary">
  <meta name="twitter:creator" value="@dddmg2015">
  <meta name="twitter:site" value="@dddmg2015">
  <meta name="twitter:title" content="DDDMG 2015 | International Simposium on Digital Disease Detection for Masgathering.">
  <meta name="twitter:description" content="Description here :)">
  <meta name="twitter:image:src" content="">

  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" href="touch-icon@2x.png">
  <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="touch-icon@2x.png">
  <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad@2x.png">

  <!-- Humans -->
  <link type="text/plain" rel="author" href="http://www.dddmg.org/humans.txt" />

  <!-- CSS -->
  <link rel="stylesheet" href="dist/css/style.min.css">

</head>

<body>
  <header class="header-primary">
	</header>

	<main id="main" class="main">
	</main>

	<footer class="footer-primary">
	</footer>


	<!-- Libs -->
	<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

	<!-- JS -->
  <script src="dist/js/scripts.min.js"></script>
  <script src="dist/js/libs.min.js"></script>

	<!-- BrowserSync -->
  <script type='text/javascript'>//<![CDATA[
;document.write("<script defer src='//HOST:3000/socket.io/socket.io.js'><\/script><script defer src='//HOST:3001/client/browser-sync-client.0.9.1.js'><\/script>".replace(/HOST/g, location.hostname));
//]]></script>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57021707-1', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>
