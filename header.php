<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
<body <?php body_class();?>>

<header>
    <div class="container">
        <div class="header-wrapper">
            <div class="header-left">
                <?php 
                if( has_custom_logo() ){
                    the_custom_logo();
                }else{
                    ?>
                    <a href="<?php echo esc_url( home_url() ); ?>"><?php echo bloginfo('title');?></a>
                    <p><?php echo bloginfo('description');?></p>
                    <?php
                }
                ?>

            </div>
            <div class="header-right">
                <?php

                $args = array(
                    'theme_location' => 'menu-1',
                    'container' => 'nav',
                    'container_class' => 'test-nav',
                    'menu_class' => 'test-menu',
                    'menu_id' => 'test-menu-id'
                );
                wp_nav_menu( $args );
                ?>
            </div>
        </div>
    </div>
</header>


