<?php get_header(); ?>
    <div class="post-content-wrap">
        <div class="container">
            
                <?php
                    if( have_posts() ) :
                        ?>
                        <div class="articles">
                        <?php
                        while( have_posts() ){
                            the_post();
                            ?>
                            <article <?php post_class('post-class post-class-2'); ?>>
                                <?php the_post_thumbnail( 'large', array(
                                    'class' => 'post-thumbnaiul',
                                    'loading' => 'lazy',
                                    'data-post-id' => $post->ID
                                ) ); ?>
                                <h2><?php the_title();?></h2>
                                <div class="post-meta">
                                    <?php echo get_the_date('d M, Y');?>
                                </div>

                                <?php  //sprintf('<h2>%s</h2>', get_the_title()); ?>
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink();?>">Read More</a>
                            </article>
                            <?php
                        }
                        ?>

                        </div>
                        <?php
                    endif;
                ?>
        </div>
    </div>
<?php get_footer(); ?>