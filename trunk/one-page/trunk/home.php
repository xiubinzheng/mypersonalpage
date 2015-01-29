<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<?php get_header(); ?>
    <div class="clear"></div>
    <!-- Header condition2 starts here -->

    <!-- **********************header ends************************* -->
    <!-- **********************slider************************* -->
    <div class="homepage_top_feature">
        <div class="slider_img_container">
            <?php $site_url = 'http://inkthemes.com'; ?>
            <?php if (onepage_get_option('onepage_slideimage1') != '') { ?>
                <img src="<?php echo onepage_get_option('onepage_slideimage1'); ?>" alt="Slide Image 1"/>
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="slides img1">
            <?php } ?>

            <div class="slider_text_container">
                <div class="container_24">
                    <div class="grid_24">
                        <?php if (onepage_get_option('onepage_sliderheading1') != '') { ?>
                            <h2>
                                <a href="<?php echo onepage_get_option('onepage_Sliderlink1'); ?>"><?php echo onepage_get_option('onepage_sliderheading1'); ?></a>
                            </h2>
                        <?php } else { ?>
                            <h2><a><?php _e('A bene placito.', 'onepage'); ?></a></h2>
                        <?php } ?>
                        <?php if (onepage_get_option('onepage_sliderdes1') != '') { ?>
                            <p><a><?php echo onepage_get_option('onepage_sliderdes1'); ?></a></p>
                        <?php } else { ?>

                            <p>
                                <a><?php _e('You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.', 'onepage'); ?></a>
                            </p>

                        <?php } ?>
                    </div>

                </div>

            </div>

        </div>


        <!-- slider 8 ends --------------------------------------------------------------->


    </div>
    <div class="clear"></div>
    <!-- ***********************Featured Text Area Block************************* -->
<div class="featured_text_area default_bg">

    <!-- the php code is still visible <div class="bbc">
            <?php if (onepage_get_option('onepage_page_main_heading') != '') { ?>
                <h1 id="fta_top"><?php echo stripslashes(onepage_get_option('onepage_page_main_heading')); ?></h1>
            <?php } else { ?>
                <h2 id="fta_top"><?php _e('About Me', 'onepage'); ?></h2>
            <?php } ?>
            <?php if (onepage_get_option('onepage_page_sub_heading') != '') { ?>
                <p id="fta_bottom"><?php echo stripslashes(onepage_get_option('onepage_page_sub_heading')); ?></p>
            <?php } else { ?>
                <p id="fta_bottom"><?php _e('Jughgfhgfhgf', 'onepage'); ?></p>
            <?php } ?>
        </div> -->

    <div class="bbc">
    </div>
    <div class="clear"></div>
    <!-- ***********************Our Services block************************* -->
    <!-- <div class="homepage_nav_title services">
    <?php if (onepage_get_option('onepage_our_services_heading') != '') { ?>
        <h1 class="index_titles"><?php echo stripslashes(onepage_get_option('onepage_our_services_heading')); ?></h1>
    <?php } else { ?>
        <h1 class="index_titles"><?php _e('Our Services', 'onepage'); ?></h1>
    <?php } ?>

</div> -->
    <div class="clear"></div>
    <!-- **content starts here** -->
    <div class="services_block default_bg">

        <div class="grid_24">
            <!-- box -->

            <div class="services_box_container">
                <ul class="ch-grid">
                    <!-- box1 -->
                    <li id="services_box_container1">


                        <div class="ch-item ch-img-1"
                             style="background: url(<?php echo get_template_directory_uri(); ?>/images/me_img.jpg);">


                        </div>
                        <div class="rect_box">
                            <?php if (onepage_get_option('onepage_our_services_title1') != '') { ?>
                                <p class="services_box_rect_head"><a
                                        <?php if (onepage_get_option('onepage_services_title_link1') != '') { ?>href="<?php echo stripslashes(onepage_get_option('onepage_services_title_link1')); ?><?php } else { ?><?php } ?>"
                                        target="_blank"><?php echo stripslashes(onepage_get_option('onepage_our_services_title1')); ?></a>
                                </p>
                            <?php } else { ?>
                                <p class="services_box_rect_head"><a
                                        href="<?php echo esc_url($site_url); ?>"><?php _e('About Me', 'onepage'); ?></a>
                                </p>
                            <?php } ?>
                            <?php if (onepage_get_option('onepage_our_services_desc1') != '') { ?>
                                <p class="services_box_rect_para"><?php echo stripslashes(onepage_get_option('onepage_our_services_desc1')); ?></p>
                            <?php } else { ?>

                                <p class="services_box_rect_para"><?php _e('Since 2011, I have been involved in hundreds of web development projects.', 'onepage'); ?></p>
                            <?php } ?>
                        </div>
                    </li>


                </ul>
            </div>


            <div class="clear"></div>
        </div>
    </div>


    <!-- ***Recent blog container starts** -->
<?php if (onepage_get_option('onepage_bodybg') != '') { ?>
    <div class="featured_blog_content default_bg"
         style="background: url(<?php echo stripslashes(onepage_get_option('onepage_bodybg')); ?>);">
    <?php } else { ?>
    <div class="featured_blog_content default_bg">
<?php } ?>


    </div>
    <div class="clear"></div>
    <!-- ***Recent blog container* ends** -->

    <!-- ***********************Contact Page************************* -->
    <div class="homepage_nav_title contact">
        <?php if (onepage_get_option('onepage_our_contact_heading') != '') { ?>
            <h1 class="index_titles"><?php echo stripslashes(onepage_get_option('onepage_our_contact_heading')); ?></h1>
        <?php } else { ?>
            <h1 class="index_titles"><?php _e('Contact', 'onepage'); ?></h1>
        <?php } ?>
    </div>



    <div class="clear"></div>
    <!-- ***contact content*** -->
<?php if (onepage_get_option('onepage_bodybg') != '') { ?>
    <div class="contact_wrapper default_bg"
         style="background: url(<?php echo stripslashes(onepage_get_option('onepage_bodybg')); ?>);">
    <?php } else { ?>
    <div class="contact_wrapper default_bg">
<?php } ?>
    <div class="container_24">
        <div class="grid_24">
            <div class="contact_container">
                <div class="add_n_map">
                    <div class="anchor_bordera">
                        <?php if (onepage_get_option('onepage_our_contact_sub_heading') != '') { ?>
                            <h1><?php echo stripslashes(onepage_get_option('onepage_our_contact_sub_heading')); ?></h1>
                        <?php } else { ?>
                            <h1><?php _e('Address', 'onepage'); ?></h1>
                        <?php } ?>
                    </div>
                    <div>
                        <div class="contact-image-bookmark-icon"></div>
                        <?php if (onepage_get_option('onepage_contact_address') != '') { ?>
                            <p><?php echo stripslashes(onepage_get_option('onepage_contact_address')); ?></p>
                        <?php } else { ?>
                            <p><?php _e('Address -  The Address', 'onepage'); ?></p>
                        <?php } ?>
                    </div>
                    <div>
                        <div class="contact-image-tele-icon"></div>
                        <?php if (onepage_get_option('onepage_contact_phone_no') != '') { ?>
                            <p><?php echo stripslashes(onepage_get_option('onepage_contact_phone_no')); ?></p>
                        <?php } else { ?>
                            <p><?php _e('Phone - 1245 213 689', 'onepage'); ?></p>
                        <?php } ?>
                    </div>
                    <div>
                        <div class="contact-image-mail-icon"></div>
                        <?php if (onepage_get_option('onepage_ontact_email') != '') { ?>
                            <p><?php echo stripslashes(onepage_get_option('onepage_ontact_email')); ?></p>
                        <?php } else { ?>
                            <p><?php _e('Email - name@example.com', 'onepage'); ?></p>
                        <?php } ?>
                    </div>
                    <div>
                        <div class="contact-image-globe-icon"></div>
                        <?php if (onepage_get_option('onepage_contact_website') != '') { ?>
                            <p><?php echo stripslashes(onepage_get_option('onepage_contact_website')); ?></p>
                        <?php } else { ?>
                            <p><?php _e('Website - www.example.com', 'onepage'); ?></p>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="clear"></div>


    <!-- ***********************Contact Page Ends************************* -->
<?php
get_footer();
?>