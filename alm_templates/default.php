
<div class="block">
        <div>
             <?php if (is_active_sidebar('before-entry')) : ?>
                <div id="primary-sidebar" >
                    <?php dynamic_sidebar('before-entry'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<div class="coat">
    <div class="block small-12 large-8">
        <div class="post-container">

            <div class="post-thumbnail">
                <img src="<?php the_post_thumbnail_url( 'trend_default' )?>" />
            </div>
           
            <div class="post-title">
                <div class="category-single-post"><?php the_category('<span class="trend-point">&bull;</span>'); ?></div>
                <h1><?php the_title() ?></h1>
            </div>

            <div class="post-meta">
                <ul class="">
                     <li class="item">Por <?php the_author(); ?></li>
                    <li class="item"><?php the_time('M d, Y'); ?></li>
                </ul>
            </div>

            <div class="post-content">
                <!-- Before content -->
                <?php do_action('share'); ?>

                <!-- Content -->
                <?php the_content(); ?>

                <!-- After content -->                              
                <?php do_action('share'); ?>
            </div>
            <div style="margin-bottom:20px">
                <?php do_action('comment'); ?>
            </div>


    <div class="block small-12 large-4">
             <?php if (is_active_sidebar('sidebar-1')) : ?>
                <div id="primary-sidebar" style="padding-top:30px;position: sticky;top: 0" class="smushi">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
    </div>

</div>
