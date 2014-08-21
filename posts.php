<?php theme_include('header'); ?>

    <section class="content">
        <form id="search" action="<?php echo search_url(); ?>" method="post">
				<input type="search" id="term" name="term" placeholder="Recherches" value="<?php echo search_term(); ?>">
			</form>
        <?php if(has_posts()) : while(posts()) : ?>
            <article>
                <h1>
                    <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                </h1>
                    <p class="date"><i class="fa fa-clock-o"></i> <?php echo relative_time(article_time()); ?></p>
                     <p><?php echo article_markdown(); ?></p>   
            </article>
        <?php endwhile; endif; ?>
    
        <?php if(has_pagination()): ?>
                    <div class="pagination">
			<?php echo posts_prev(); ?>
			<?php echo posts_next(); ?>
                    </div>
    
                <?php endif; ?>
    
    </section>
    
    
<?php theme_include('footer'); ?>
