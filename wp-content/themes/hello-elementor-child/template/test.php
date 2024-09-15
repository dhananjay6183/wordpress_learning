<?php
/*
Template Name: Test Template
*/

get_header();
?>
<?php if( have_rows('section_list', 90) ): ?>
    <?php while( have_rows('section_list', 90) ): the_row(); ?>
        <?php if( get_sub_field('select_section') == 'sub_banner_section_left' ): ?>
            <?php

                $sub_banner_section_left = get_sub_field('sub_banner_section_left');
                // Fetch the subfields
                $banner_title_left = $sub_banner_section_left['banner_title_left'];
                $banner_subtitle_left = $sub_banner_section_left['banner_subtitle_left'];
                $banner_description_left = $sub_banner_section_left['banner_description_left'];
                $banner_image_left = $sub_banner_section_left['banner_image_left'];
                
                // Check if image is an array and get URL
                $banner_image_left_url = isset($banner_image_left['url']) ? $banner_image_left['url'] : '';
            ?>
            <div class="sub-banner-section" style="background-image: url('<?php echo esc_url($banner_image_left_url); ?>')">
                <div class="container-box">
                    <div class="sub-banner-box">
                        <h1><?php echo esc_html($banner_title_left); ?></h1>
                        <h6><?php echo esc_html($banner_subtitle_left); ?></h6>
                        <p><?php echo esc_html($banner_description_left); ?></p>
                    </div>
                </div>
            </div>
        <?php
    endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<div class="full-width ">
    <div class="container-box">
        <div class="info-box info-top">
            <span class="sm-heading">Heading</span>
            <h2>Placeholder Text Example Here ie: Transform your company with a digital first approach.</h2>
            <div class="description-box">
                <h5>Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam in vitae malesuada fringilla.</h5>
                <p>Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet commodo consectetur convallis risus. Sed condimentum enim dignissim adipiscing faucibus consequat, urna. Viverra purus et erat auctor aliquam. Risus, volutpat vulputate posuere purus sit congue convallis aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque ultricies eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc lectus in tellus, pharetra, porttitor.</p>
                <blockquote>
                    <p>"Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque congue eget consectetur turpis. Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean tempus."</p>
                </blockquote>
                <p>Tristique odio senectus nam posuere ornare leo metus, ultricies. Blandit duis ultricies vulputate morbi feugiat cras placerat elit. Aliquam tellus lorem sed ac. Montes, sed mattis pellentesque suscipit accumsan. Cursus viverra aenean magna risus elementum faucibus molestie pellentesque. Arcu ultricies sed mauris vestibulum.</p>
            </div>
            <hr>
        </div>
        <div class="info-img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Image-Set-Square.jpg" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/Image3.jpg" alt="" />
        </div>
        <div class="info-box info-bottom">
            <hr>
            <div class="description-box">
                <h4>Conclusion</h4>
                <p>Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.</p>
                <p>Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et. Quis lobortis at sit dictum eget nibh tortor commodo cursus.</p>
                <p>Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut id eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc tortor.Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere cursus diam.</p>
            </div>
        </div>
    </div>
</div>

<div class="full-width">
    <div class="container-box">
        <div class="watt-main">
            <div class="watt-title-box">
                <span class="sm-heading">Heading</span>
                <h4>Moon 6/9W 240V <span>performance in an eco friendly package.</span></h4>
            </div>
            <div class="watt-col">
                <div class="watt-col-box">
                    <h2>300</h2>
                    <p>Innovative thinking of designers</p>
                </div>
                <div class="watt-col-box">
                    <h2>50%</h2>
                    <p>Five basic principles of UI design</p>
                </div>
                <div class="watt-col-box">
                    <h2>30min</h2>
                    <p>Product design from a psychological perspective</p>
                </div>
                <div class="watt-col-box">
                    <h2>16kw/h</h2>
                    <p>Five basic principles of UI design</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Banner -->
<div class="full-width inner-banner">
    <div class="inner-banner-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/inner-banner-img.jpg')">
        <div class="container-box">
            <div class="inner-banner-box">
                <span class="sm-heading">Tagline</span>
                <h4>Example Heading Here</h4>
                <p>MOON Series is one of the most well designed series that allows a versatile range of products to be suitable for almost any interior application. MOON Series combines a stylish half sphere body design with a dedicated fascia depending on the light effect required. Part of a family of pendant light, semi-recessed light.</p>
            </div>
        </div>
    </div>
</div>
<!-- Inner Banner -->

<div class="full-width">
    <div class="container-box">
        <div class="center-title">
            <span class="sm-heading">Key Callout</span>
            <h3>MOON Series is one of the most well designed series that allows a versatile range of products to be suitable for almost any interior application.</h3>
        </div>
    </div>
    <hr>
</div>
<!-- Text and Image Section -->
<div class="full-width">
    <div class="container-box">
        <div class="image-with-text-section">
            <div class="image-with-text-box">
                <?php if (have_rows('section_list', 90)) : // Check if the section_list repeater field has rows ?>
                    <?php while (have_rows('section_list', 90)) : the_row(); // Loop through the section_list rows ?>
                        <?php
                        $select_section = get_sub_field('select_section');
                        if ($select_section == 'content_block_section') :
                            // We are in the correct section, now get the content_block repeater field
                            if (have_rows('content_block')) :
                                while (have_rows('content_block')) : the_row(); // Loop through the content_block rows
                                    $content_tagline = get_sub_field('content_tagline');
                                    $content_header = get_sub_field('content_header');
                                    $content_description = get_sub_field('content_description');
                                    $content_image = get_sub_field('content_image');
                                    ?>
                                    <div class="img-text-left">
                                        <span class="sm-heading"><?php echo esc_html($content_tagline); ?></span>
                                        <h4><?php echo esc_html($content_header); ?></h4>
                                        <p><?php echo esc_html($content_description); ?></p>
                                        <a href="#" class="outline-btn img-text-btn">Action</a>
                                    </div>
                                    <div class="img-text-right">
                                        <img src="<?php echo esc_url($content_image['url']); ?>" alt="<?php echo esc_attr($content_image['alt']); ?>" />
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p>No content blocks found.</p>
                            <?php endif; ?>
                        <?php else : ?>
                            <p>Section is not a content block section.</p>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No sections found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<!-- Text and Image Section End-->

<!-- Amazing Features Section -->
<div class="full-width">
    <div class="container-box">
        <div class="amazing-features-section">
            <span class="sm-heading">Features</span>
            <h4>Amazing Features</h4>
            <div class="amazing-features-box">
                <div class="amazing-features-col">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/images/ArrowsOut.svg" alt="" /></i>
                    <b>Feature Heading Here</b>
                    <p>Transform your company with a digital first approach with Melbourne’s best award winning digital agency servicing clients Australia-wide.</p>
                </div>
                <div class="amazing-features-col">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/images/BaseballCap.svg" alt="" /></i>
                    <b>Feature Heading Here</b>
                    <p>Transform your company with a digital first approach with Melbourne’s best award winning digital agency servicing clients Australia-wide.</p>
                </div>
                <div class="amazing-features-col">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/images/Bluetooth.svg" alt="" /></i>
                    <b>Feature Heading Here</b>
                    <p>Transform your company with a digital first approach with Melbourne’s best award winning digital agency servicing clients Australia-wide.</p>
                </div>
                <div class="amazing-features-col">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/images/ArrowsOut.svg" alt="" /></i>
                    <b>Feature Heading Here</b>
                    <p>Transform your company with a digital first approach with Melbourne’s best award winning digital agency servicing clients Australia-wide.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Amazing Features Section End-->

<!-- Inner Banner -->
<div class="full-width inner-banner">
    <div class="inner-banner-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/inner-banner-img.jpg')">
        <div class="container-box">
            <div class="inner-banner-box">
                <span class="sm-heading">Tagline</span>
                <h4>Example Heading Here</h4>
                <p>MOON Series is one of the most well designed series that allows a versatile range of products to be suitable for almost any interior application. MOON Series combines a stylish half sphere body design with a dedicated fascia depending on the light effect required. Part of a family of pendant light, semi-recessed light.</p>
            </div>
        </div>
    </div>
</div>
<!-- Inner Banner -->

<?php get_footer(); ?>