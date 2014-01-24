<div id="main-content1" class="row container">
    <div class="col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    
    </div>
        <div class="col-md-4">
            <div class="block">
                <h2>It's time to create good jobs. It's time to move forward with new exports.</h2>
                <p><a class="button" href="#">Pledge Your Support</a></p>
            </div>
            <div class="block">
                <h2>Keep up-to-date and get involved.</h2>
            <form>
                <input type="text" name="UEmail" placeholder="Email Address" class="col-md-6"/>
                <input type="submit" name="submit" value="Sign Up" class="button col-md-6"/>
            </form>
            </div>
        </div>
        </div><!--End of main-content1 div-->
        <div id="main-content2" class="row container">
            <div class="col-md-4">
                <div class="main-widget">
                <h2>Get the Facts</h2>
                <h1 class="fact-number">$1.5 billion</h1>
                <p class="fact-desc">The amount of private investment developers of the three terminals have pledged to build projects to full capacity.</p>
                <a class="read-more" href="#">Learn more about jobs and economic development »</a>
                </div>
                <div class="main-widget1">
                    <h2>FEATURED VIDEO</h2>
                    <img src="assets/images/video.PNG" />
                </div>
            </div>
            <div class="col-md-8 adjust-pad">
                <h2>latest news</h2>
                <div class="stories">
                       <?php $latest_news = new WP_Query( 'category_name=news' );
				if ($latest_news -> have_posts()): while ($latest_news -> have_posts()):	?>
                                          <div class="story">
                                              <p class="plink"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                              <p class="byline"><?php the_date(); ?></p>
					</div>
                    					
					<p class="read-more"><a href="#">More news »</a></p>
                </div>
            </div>
        </div>