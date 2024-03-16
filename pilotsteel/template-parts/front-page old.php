<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="about" class="about-section about ls-section-padding container-fluid clearfix">
        <div class="container">
            <div class="row">
                <div class="section-top section-thead ls-text-align-center col-12 clearfix">
                    <h3 class="thead-border-center">About Pilot Steel Inc.</h3>
                    <p>
                        Pilot Steel provides quality services to institutional, commercial and industrial customers throughout the United States.  We have been successful because we have met the requirements of our customers and have continued to enter new markets, as our customers have demanded new services. here are some of the companies that we have had the pleasure of working with
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.bmw.com/en/index.html" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/bmw.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.caterpillar.com/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/Caterpillar.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.electroluxappliances.com/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/Electrolux.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://global.honda/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/honda.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.deere.com/en/index.html" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/John-Deere.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.kubotausa.com/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/Kubota.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.mercedes-benz.com/en/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/mercedez-benz.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.nissan-global.com/EN/index.html" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/nissan.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://oztylerdistillery.com" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/OZ-Tyler.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.tesla.com/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/tesla.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="https://www.toyota.com/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/toyota.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="about-thumb">
                        <a href="http://www.vw.com/" target="_blank"><img src="http://USDemo2.BespokeCodeStudio.com/wp-content/uploads/2018/08/Volkswagen.jpg" alt="" width="400" height="400" class="alignnone size-full wp-image-69" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="equipment-section equipments section-grey ls-section-padding container-fluid clearfix carousel slide" data-ride="carousel">
    	<div class="container">
            <div class="row">
                <div class="section-top section-thead ls-text-align-center col-12 clearfix">
                    <h3 class="thead-border-center">Our Works and Projects</h3>
                    <p>take a look at some of the varied projects we have been involved in.  We provide full support for basic to complex steel work.</p>
                </div>
            </div>

            <?php echo do_shortcode('[rl_gallery id="182"]'); ?>

            <a href="<?php echo esc_url( home_url( '/projects' ) ); ?>" class="btn-primary transition">See More Projects</a>

        	<!-- <div id="eq-inner" class="carousel-inner">

        		<?php  //$args = array( 'post_type' => 'our_projects', 'posts_per_page' => 9 );
				$loop //= new WP_Query( $args );
				//while ( $loop->have_posts() ) : $loop->the_post(); ?>
                	<div class="eq-count col-md-4 col-sm-12">
                		<div class="eq-cont">
                			<div class="eq-thumb">
                				<?php //echo get_the_post_thumbnail($post->ID,'large'); ?>
                			</div>
                			<div class="eq-info">
                                <h4><?php //the_title(); ?></h4>
                				<p><?php //echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                				<a href="<?php //echo get_permalink(); ?>" class="btn-primary transition">View Project</a>
                			</div>
                		</div>
                	</div>
				<?php //endwhile; wp_reset_postdata(); ?>

            </div>
            <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol> -->
        </div>
    </div>
    <div id="carouselExampleControls" class="our-team-section our-team ls-section-padding container-fluid clearfix carousel slide" data-ride="carousel">
        <div class="container">
            <div class="row">
                <div class="section-top section-thead ls-text-align-center col-12 clearfix">
                    <h3 class="thead-border-center">Meet Our Team</h3>
                    <p>
                        Pilot steel has industry leading experts who have decades of experience.  We pride ourselves in our attention to detail and goal of getting projects done right, the first time. 
                    </p>
                </div>
            </div>
            <div id="team-members" class="carousel-inner">

				<?php  $args = array( 'post_type' => 'our_team', 'posts_per_page' => '-1', 'orderby' => 'date', 'order' => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="member-cont ls-text-align-center col-md-6 col-sm-12">
				  		<div class="mem-thumb">
				  			<?php the_post_thumbnail('thumbnail'); ?>
				  		</div>
				  		<h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
				  		<span class="mem-position"><?php echo rwmb_meta( 'mem_position' ); ?></span>
					  	<?php the_excerpt(); ?>
					</div>
			    <?php endwhile; ?>

	        </div>
	        <div class="row">
		        <div class="col le-btn-arrow ls-btn-arrow ls-text-align-center">
	                <a class="prev transition" href="#carouselExampleControls" role="button" data-slide="prev">
	                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
	                </a>
	                <a class="next transition" href="#carouselExampleControls" role="button" data-slide="next">
	                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
	                </a>
	            </div>
	        </div>
        </div>
    </div>

<?php get_footer(); ?>