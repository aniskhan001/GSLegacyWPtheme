<?php

// Widget area
function gs_legacy_widgets_init() {
	register_sidebar(array(
		'name' 			=> 'Main Sidebar',
		'id' 			=> 'main_sidebar',
		'before_widget' => '<aside>',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h4>',
		'after_title' 	=> '</h4>'
	));
}

add_action( 'init', 'gs_legacy_widgets_init' );

// Comment section formatting
function gs_comment_style($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	    <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
	        <div class="comment-author vcard">
    	        <div class="comment-meta commentmetadata">
    	        	<?php echo get_avatar( $comment, 30 ); ?>
			        <?php printf( __( '%s', 'mytemp' ), sprintf( '<cite class="fn">%s: </cite>', get_comment_author_link() ) ); ?>
    	            <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
	    	            <time pubdate datetime="<?php comment_time( 'c' ); ?>">
	    	            	<?php /* translators: 1: date, 2: time */ printf( __( '%1$s at %2$s', 'mytemp' ), get_comment_date("n/j/y"), get_comment_time("g:ia") ); ?> 
	    	            </time>
					</a>
    	            <?php edit_comment_link( __( 'Edit', 'mytemp' ), ' ' ); ?>
    	        </div><!-- .comment-meta .commentmetadata -->
		        
		        <p> <?php echo $comment->comment_content; ?> </p> <!-- comment text -->
    			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		    </div><!-- .comment-author .vcard -->
	    </div>
	</li>

<?php
}