<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Estater
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header class="page-header">
         <?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
      </header>
	<?php real_estater_post_thumbnail(); ?>
	<div class="entry-header">
	</div>
	<div class="entry-content">
			
			<h2 class="entry-title"><?php echo get_the_content()?></h2>
		<ul class="entry-info"> 
			<li class="info"><span class="info-name">Площадь:</span> <span class="info-value"><?php echo get_post_meta( $post->ID, 'area', 1);?>м<sup>2</sup></span></li>
			<li class="info"><span class="info-name">Цена:</span><span class="info-value"> <?php echo get_post_meta( $post->ID, 'price', 1);?></span></li>
			<li class="info"><span class="info-name">Адрес:</span> <span class="info-value"><?php echo get_post_meta( $post->ID, 'adress', 1);?></span></li>
			<li class="info"><span class="info-name">Жилая площадь:</span> <span class="info-value"><?php echo get_post_meta( $post->ID, 'living_area', 1);?>м<sup>2</sup></span></span></li>
			<li class="info"><span class="info-name">Этаж: </span> <span class="info-value"><?php echo get_post_meta( $post->ID, 'level', 1);?></span></li>
		</ul>
		<?php

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'real-estater' ),
			'after'  => '</div>',
		) );
		?>

</article><!-- #post-<?php the_ID(); ?> -->
