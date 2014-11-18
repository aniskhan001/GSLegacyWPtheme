<div id="comments">
    <ol class="commentlist">
        <?php
            $comments = get_comments(array(
                'status' => 'approve'
            ));

            wp_list_comments(array(
                'per_page' => 10, 
                'reverse_top_level' => false,
                'type' =>'comment',
                'callback'=> 'mytheme_comment_style'
            ), $comments);
        ?>
    </ol>
    <?php comment_form(); ?>
</div>