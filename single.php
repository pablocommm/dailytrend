<?php
/**
 *  Single
 * 
 * @package Daily Trend
 * @author COMM MEDIA NETWORK
 */
get_header(); ?>

<div class="coat">

    <div class="block small-12 medium-8">

        <div class="post-container">
            <div class="post-thumbnail">
                <img src="<?php the_post_thumbnail_url( 'trend_default' )?>" />
            </div>
            <div class="post-title">
                <h1><?php the_title() ?></h1>
            </div>
        </div>

        <div class="post-content">
             <?php the_content(); ?>
        </div>

    </div>


    <div class="block small-12 medium-4">

             <?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>

    </div>

</div>



<?php get_footer(); ?>
