<?php
get_header(); ?>
 <div id="main-content3" class="row container show-border single-temp">
        <div class="col-md-8 addpad">
            <div class="stories">
                <?php
                    if (is_category('3')){
                        $display = new WP_Query('cat=3&posts_per_page=10');
                    }elseif (is_category('4')) {
                         $display = new WP_Query('cat=4&posts_per_page=10');
                    }  else {
                         $display = new WP_Query('posts_per_page=10');
                    }
                     if ( $display -> have_posts() ) : while ( $display -> have_posts() ) : $display -> the_post(); ?>
                    <p class="plink"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <p class="byline"><?php the_date(); ?></p><hr/>
                    <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4">
             <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?> 
        </div>
        </div><!--End of main-content1 div-->

<?php get_footer('single'); ?>