<?php //The Template for displaying home page. ?>
<?php get_header(); ?>

<div id="content" class="site-content" role="main">
	<div id="writing">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
	        	<small><?php the_time('F jS, Y') ?></small>
				<p><?php the_content("read more..."); ?></p>
			</div>
		<?php endwhile; ?>
	</div>

	<div id="ads">
		
	</div>
</div><!-- #content .site-content -->

<?php get_footer(); ?>