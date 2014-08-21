<!DOCTYPE html>
<html lang="fr">
	<head>
			<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
			<meta name="description" content="<?php echo site_description(); ?>">
			<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
			<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
			<link rel="stylesheet" href="<?php echo theme_url('/css/font-awesome-4.1.0/css/font-awesome.min.css'); ?>">
			
	</head>
	<body>
		<header id="top">
			<a id="logo" href="<?php echo base_url(); ?>"><!--<i class="fa fa-code-fork"></i>--><div id="titre"><?php echo site_name(); ?></div></a>
			<a href="#menu" id="menu-mobile">Menu</a>
			<?php if(has_menu_items()): ?>
			
			<nav id="menu" role="navigation">
				<ul>
					<?php while(categories()) : ?>
						<li>
							<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>"><?php echo category_title(); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>
				
			</nav>
						
			
			<?php endif; ?>
			
			
		</header>
	