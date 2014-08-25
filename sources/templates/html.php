<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>jQuery Cheatsheet</title>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<meta name="author" content="Oscar Otero - http://oscarotero.com">
		<meta name="title" content="jQuery Cheatsheet">
		<meta name="description" content="jQuery Cheatsheet in HTML with links to the original API documentation">
		<meta name="keywords" content="jQuery, javascript, cheatsheet, api, resource, web developer">

		<meta property="og:title" content="jQuery Cheatsheet">
		<meta property="og:image" content="http://oscarotero.com/jquery/jquery.png">
		<meta property="og:description" content="jQuery Cheatsheet in HTML with links to the original API documentation">

		<link rel="stylesheet" href="css/styles.css" type="text/css">
		<script type="text/javascript" src="components/requirejs/require.js" data-main="js/main.js"></script>
	</head>

	<body>
		<header class="main">
			<h1>
				<strong><a href="http://jquery.com/" title="Go to jQuery site">jQuery</a></strong>
				Quick API Reference
			</h1>

			<div class="filter filter-version">
				<select id="version" data-placeholder="Version...">
					
					<?php foreach (array_reverse($versions) as $version): ?>
					<option value="<?= $version['value'] ?>"><?= $version['name'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="filter filter-search">
				<select id="search" placeholder="Search...">
					<option></option>
					<?php
					echo $this->render('options.php', $selectors);
					echo $this->render('options.php', $attributes);
					echo $this->render('options.php', $manipulation);
					echo $this->render('options.php', $traversing);
					echo $this->render('options.php', $events);
					echo $this->render('options.php', $effects);
					echo $this->render('options.php', $ajax);
					echo $this->render('options.php', $core);
					?>
				</select>
			</div>

			<a class="about" href="#about" id="about-link">About...</a>
		</header>

		<div class="content">
			<?php
			echo $this->render('article.php', $selectors);
			echo $this->render('article.php', $attributes);
			echo $this->render('article.php', $manipulation);
			echo $this->render('article.php', $traversing);
			echo $this->render('article.php', $events);
			echo $this->render('article.php', $effects);
			echo $this->render('article.php', $ajax);
			echo $this->render('article.php', $core);
			?>
		</div>

		<div id="about" class="mfp-hide">
			<fieldset>
				<strong>Open links:</strong>
				<label><input type="radio" name="open_links" value="modal-window"> Modal window</label><br>
				<label><input type="radio" name="open_links" value="new-window"> New window</label><br>
				<label><input type="radio" name="open_links" value="same-window"> Same window</label>
			</fieldset>

			<p><a rel="license" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons License">Creative Commons</a> | by <a href="http://twitter.com/misteroom">@misteroom</a></p>
		</div>

		<div id="modal" class="mfp-hide">
			<ul>
				<li class="link-api"><a href="">API doc</a></li>
				<li class="link-src"><a href="http://james.padolsey.com/jquery/">Source viewer</a></li>
			</ul>
			<iframe src="about:blank"></iframe>
		</div>

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-110819-12']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
