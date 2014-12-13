<div id="comments">
    <ol class="commentlist">
        <?php
            $comments = get_comments(array(
                'status' 	=> 'approve',
                'post_id' 	=> get_the_ID()
            ));

            wp_list_comments(array(
                'per_page' 			=> 10,
                'avatar_size'       => 30,
                'reverse_top_level' => true,
                'type' 				=>'comment',
                'callback'			=> 'gs_comment_style'
            ), $comments);
        ?>
    </ol>

    <?php 
        $comments_args = array(
            'label_submit'          => 'Post comment',
            'title_reply'           => '',
            'comment_notes_after'   => '',
            'comment_field'         => '<p class="comment-form-comment"><textarea rows="5" placeholder="Enter comments here.." id="comment" name="comment" aria-required="true"></textarea></p>',
            'comment_notes_after'   => ''
        );

        comment_form($comments_args);
     ?>
</div>