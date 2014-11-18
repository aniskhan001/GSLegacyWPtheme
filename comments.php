<div id="comments">
    <ol class="commentlist">
        <?php
            $comments = get_comments(array(
                'status' => 'approve'
            ));

            wp_list_comments(array(
                'per_page' => 10,
                'avatar_size'       => 64,
                'reverse_top_level' => true,
                'type' =>'comment',
                'callback'=> 'gs_comment_style'
            ), $comments);
        ?>
    </ol>
    <?php comment_form(); ?>
</div>