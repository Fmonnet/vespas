<?php get_header(); ?>

<section class="title">
	<button id="burger" class="burger">
		<i class="material-icons">menu</i>
	</button>

	<h1>
		<?php
		if (is_front_page()) {
			echo get_bloginfo('name');
		}
		else {
			echo the_title();
		}
		 
		?>
	</h1>
</section>

<?php if ( have_posts() ) : ?>

	<?php if (is_front_page() ) : ?>
	<?= get_slideShow(); ?>
<?php endif; ?>

<?php

while ( have_posts() ) : the_post();

get_template_part( 'partials/content', get_post_format() );	

endwhile;

the_posts_pagination( array(
	'prev_text'          => __( 'Previous page', 'twentysixteen' ),
	'next_text'          => __( 'Next page', 'twentysixteen' ),
	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',	
	) );

else :
	get_template_part( 'partials/content', 'none' );

endif;
?>

<?php get_footer(); ?>