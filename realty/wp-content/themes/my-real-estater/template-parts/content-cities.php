<?php $post_objects = get_field('location');
$archive_button_text = esc_html(get_theme_mod('real_estater_archive_submit',esc_html__('Read More','real-estater')));?>
<header class="page-header">
    <h2>
           <?php the_title( '<h2 class="page-title">', '</h2>' );  ?>
         </h2>
      </header>

<?php
	if( $post_objects ): ?>
		<ul>
			<?php foreach( $post_objects as $post): ?>
		<?php setup_postdata($post); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php real_estater_post_thumbnail(); ?>
    
    <div class="entry-header">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); 
			if (get_theme_mod('real_estater_archive_section_date','no')=='yes') { ?>
				<div class="entry-meta">
				<?php real_estater_posted_on();?>
			</div><!-- .entry-meta -->
				<?php }   ?>
    </div>
                            
	<div class="entry-content">
        <?php
        the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'real-estater' ),
			'after'  => '</div>',
		) );
        ?>
        <?php if($archive_button_text){ ?>
                     <a class="box-button" href="<?php the_permalink(); ?>"><?php echo esc_html($archive_button_text); ?></a>
              <?php } ?> 
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->													
			</a>
		</li>
		<?php endforeach; ?>
			</ul>
			<?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
					<?php endif; ?>