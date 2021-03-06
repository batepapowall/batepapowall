<?php get_header(); ?>

<!-- start entries -->
	<div id="entries">

<!-- start breadcrumbs -->
	<div id="breadcrumbs">
		<?php simplenotes_get_breadcrumbs(); ?><div class="clear"></div>
	</div>
<!-- end breadcrumbs -->

<!-- start entry -->
<?php if ( have_posts () ) : while (have_posts()):the_post();?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry">
			<h2><?php the_title(); ?></h2><div class="clear"></div>

<!-- start date -->
	<a href="<?php echo get_permalink(); ?>">
		<div class="date">
			<div class="month"><?php the_time('M') ?></div>
			<div class="day"><?php the_time('d') ?></div>
		</div>
	</a>
<!-- end date -->

<!-- start contents -->
	<div class="contents">
		<?php the_content(); ?><div class="clear"></div>
		<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
<!-- end contents -->

<!-- start meta -->
	<div class="meta">
		<span class="category"><?php the_category(', ', '' ); ?></span>
		<span class="tag"><?php the_tags('', ', ', ''); ?></span>
		<span class="comment"><?php comments_popup_link('0 Comment','1 Comment','% Comments'); ?></span>
		<div class="clear"></div>
	</div>
<!-- end meta -->

		</div>
	</div>
<!-- end entry -->

<?php endwhile; ?>

<?php comments_template('', true); ?>

<?php else : ?>

<!-- start 404 -->
	<div class="entry">
		<h2>404 Not Found</h2><div class="clear"></div>
		<div class="contents">
			<p>Sorry, but you are looking for something that isn't here. </p>
			<p><?php get_search_form(); ?></p>
		</div>
	</div>
<!-- end 404 -->

<?php endif; ?>

	</div>
<!-- end entries -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>