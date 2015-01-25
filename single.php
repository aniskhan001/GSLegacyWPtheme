<?php //The Template for displaying all single posts. ?>

<?php get_header(); ?>

<div id="content" role="main">
    <div class="news-ads">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- top n -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-2030113156954700"
             data-ad-slot="1091814663"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    
    <div id="gs-sidebar">
        <?php if (dynamic_sidebar('main_sidebar')) : else : endif; ?>
    </div>

    <div id="writing">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> <!-- post title -->
            <small class="post-time"><?php the_time('j<\s\u\p>S</\s\u\p> F Y \a\t g:ia') ?> </small> <!-- post date and time -->
            <?php echo do_shortcode( '[post-views]' ); ?> <!-- post views -->
            <div class="entry">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>

        <div class="gs-comment">
            <?php if(get_comments_number() > 0) : ?>
                <h3 class="reply-header"><a href="#comments"><span>All Replies</span></a></h3>
            <?php endif; ?>

            <?php comments_template(); ?>
        </div>
    </div>
</div><!-- #content -->

<?php get_footer(); ?>