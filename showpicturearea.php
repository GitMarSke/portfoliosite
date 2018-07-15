<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $page->title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/style.css" />
	<script src="main.js"></script>
</head>
<body>
	<div id="header"> 
			<div id="letterhighlight">
				<?php echo $page->TitleHighlight; ?>
			</div>
		<?php echo $page->title; ?> 
	</div>
		<div id="contact">
			<?php echo $page->contact; ?>
		</div>
	
	<div id="wrapper">
	
		<p>
		<img src="<?php echo $page->pictures->first->httpUrl; ?>" 
				alt="<?php echo $page->pictures->first->description; ?>"
					width="100%"			/>
		
		<img src="<?php echo $page->pictures->eq(1)->httpUrl; ?>" 
				alt="<?php echo $page->pictures->eq(1)->description; ?>"
					width="100%"			/>
	
		<img src="<?php echo $page->pictures->eq(2)->httpUrl; ?>" 
				alt="<?php echo $page->pictures->eq(2)->description; ?>"
					width="100%"			/>
		</p>
	</div>
	<footer>
		<?php echo $page->footer; ?>
	</footer>
</body>
</html>