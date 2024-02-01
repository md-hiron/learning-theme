<?php get_header(); ?>
    <div class="post-content-wrap">
        <div class="container">
            
                <?php
                    if( have_posts() ) :
                        ?>
                        <div class="articles">
                        <?php
                        while( have_posts() ) :
                            the_post();
                            ?>
                            <article <?php post_class('post-class post-class-2'); ?>>
                                <?php the_post_thumbnail( 'large', array(
                                    'class' => 'post-thumbnaiul',
                                    'loading' => 'lazy',
                                    'data-post-id' => $post->ID
                                ) ); ?>
                                <?php
                                $title = get_the_title();

                                if( empty( $title ) ){
                                    echo '<h2>'.$title.'</h2>';
                                }
                                ?>
                                <h2><?php the_title();?></h2>
                                <div class="post-meta">
                                    
                                    <span><?php echo get_the_date('d M, Y');?></span>
                                    <span><?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?> <a href="<?php echo esc_url( get_the_author_meta('user_url') ); ?>"><?php echo get_the_author();?></a></span>
                                    <span><?php 
                                    
                                        // $categories = get_the_category();
                                        // echo '<pre>';
                                        // echo print_r( $categories ) ;
                                        // echo '</pre>';

                                        // echo '<a href="'.get_category_link($categories[0]->term_id).'">'.$categories[0]->name.'</a>';
                                        echo get_the_category_list(' | ');
                                    ?></span>
                                </div>

                                <?php  sprintf('<h2>%s</h2>', get_the_title()); ?>
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink();?>">Read More</a>
                            </article>
                            <?php
                        endwhile;
                        ?>

                        </div>
                        <?php
                    endif;

                ?>

            
        </div>
    </div>
<?php get_footer(); ?>