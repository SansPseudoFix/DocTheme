<?php theme_include('header'); ?>
<section class="content search">
<h1>Recherches pour &rdquo;<?php echo search_term(); ?>&rdquo;.</h1>

<?php if(has_search_results()): ?>
	<ul class="items">
		<?php $i = 0; while(search_results()): $i++; ?>
		<li>
			
		    <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a> <?php if(article_description()): ;?>: <?php echo article_description(); endif; ?>
			
		</li>
		<?php endwhile; ?>
	</ul>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
		<div>
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: ?>
	<p>Malheureusement, il n'y a pas de résultats pour &ldquo;<b><?php echo search_term(); ?></b>&rdquo;.</p>
<?php endif; ?>
</section>
<?php theme_include('footer'); ?>