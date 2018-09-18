<?php
//case studies loop starts here
$loop = new WP_Query( array( 'post_type' => 'case_study', 'orderby' => 'post_id', 'order' => 'ASC' ) );



//////////////////////////
//-CASE STUDIES
/////////////////////
while( $loop->have_posts() ) : $loop->the_post();

    $siteRoot = get_site_url();
    $imageLocation = get_the_post_thumbnail_url(get_the_ID(),'large');
    $image = $siteRoot . $imageLocation;?>

    <section class=" case-study-section container-fluid  parallaxin2">

        <div class="overlay" style="<?php echo get_field('overlay_background_grad'); ?>"></div>


        <a class="case-study-box" href="<?php the_permalink(); ?>">
            <div class="title-card-flex layer" data-relative-input="true" data-depth="0.15">
                <h1 class="case-study-title">
                    <span class="title"><?php the_title(); ?></span>
<!--                   Some day I want to try a thing where I separate the bar out from the text and then have it thinner and move according to parallax.js I'm close to getting it figured out. -->
                </h1>

                <h2 class="case-study-subheading">
                    <span><?php $field = 'case_study_subheading'; echo tag_stripped_field($field); ?>
                    </span>
                </h2>

            </div>
        </a>
    <div class="rellax" data-rellax-speed="-10" >
        <div class="img-container layer" data-relative-input="true" data-depth="0.08"    >
            <img class="section-img lazy"  data-src="<?php echo $imageLocation ?>">
                <!-- the above echo of image location was done because Local by Flywheel was acting wonky.   -->
            </img>
        </div>
    </section>


<?php endwhile; wp_reset_query();



<figure class="blog-post-section lazy" style="<?php $field = 'overlay_background_grad'; echo tag_stripped_field($field); ?>">

<!--            image Container-->
            <div class="img-container rellax" data-rellax-speed="-8" data-rellax-percentage="0.5">
                <div style="background-image: url(<?php echo $imageLocation ?> " class="blog-preview-img"> </div>
            </div>

<!--            Figure caption and Titles-->
            <figcaption class="blog-text">
                <h2 class="blog-title">
                    <span><?php $field = 'html_title'; echo tag_stripped_field($field);   ?></span>
                </h2>

                <p class="blog-exerpt">
                    <span><?php echo get_the_excerpt(); ?></span>
                </p>

            </figcaption>

            <a href="<?php the_permalink(); ?>">View more</a>

        </figure>

    </main>
<?php endwhile; wp_reset_query(); ?>
