<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h1><?php bloginfo('name');?></h1>
			<div id="nav">
				<ul>
					<?php wp_list_pages('title_li=');?>
				</ul>
			</div>
		</div>

		<div id='main'>
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>

			</div>
		</div>
	</div>
</body>
</html>