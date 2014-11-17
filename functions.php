<?php

function mytheme_comment_style($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	    <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
	        <div class="comment-author vcard">
		        <?php echo get_avatar( $comment, 32 ); ?>
		        <?php printf( __( '%s <span class="says">says:</span>', 'mytemp' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		    </div><!-- .comment-author .vcard -->
		    <?php if ( $comment->comment_approved == '0' ) : ?>
		        <em><?php _e( 'Your comment is awaiting moderation.', 'mytemp' ); ?></em>
		        <br />
		    <?php endif; ?>

			<p><?php comment_text(); ?></p>

	        <div class="comment-meta commentmetadata">
	            <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
	            <?php
	                /* translators: 1: date, 2: time */
	                printf( __( '%1$s at %2$s', 'mytemp' ), get_comment_date(), get_comment_time() ); ?>
	            </time></a>
	            <?php edit_comment_link( __( '(Edit)', 'mytemp' ), ' ' );
	            ?>
	        </div><!-- .comment-meta .commentmetadata -->

	        

	        <div class="reply">
	                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	        </div><!-- .reply -->
	    </div>
	</li>

<?php
}