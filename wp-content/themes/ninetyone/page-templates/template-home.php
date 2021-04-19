<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                    <div class="title">Functions</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>
                    Welcome to
                </span>
                The Backbeach Eating House
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button">Read More<i class="fa fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="home-news">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-md-6">
                <a href="#" class="news-img">
                    <div class="image"></div>
                    <div class="date">Sun 13 May</div>
                    <div class="category">What's On</div>
                </a>
            </div>
            <div class="col-lg-1 d-none d-xl-block"></div>
            <div class="col-md-6">
                <h2>Mother's Day</h2>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <a href="#" class="button">Read More<i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <div class="top-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-about-top.png" alt="" width="100%">
        </div>
        <div class="bottom-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-about-bottom.png" alt="" width="100%">
        </div>
    </div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>
                    Served fresh
                </span>
                from the paddock to the plate
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button">Read More<i class="fa fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="home-about-images">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
            
            </div>
            <div class="col-lg-7">
                <h2>Happy Customers</h2>
                <div class="testimonial-holder">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="separator"></div>
                    <div class="author">Saad Ulde</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>
                    Sign Up
                </span>
                Subscribe to our email newsletter
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Newsletter Subscription"]') ?>
            </div>
        </div>
    </div>
</div>

<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Socials</span>
                Follow us on Facebook and Instagram
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="facebook-holder">
                    <div class="title">
                        <i class="fa fa-facebook-square"></i> What's new on Facebook
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/call-to-action-1.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"><i class="fa fa-calendar"></i> Posted Jan 31 2021</div>
                                    <div class="likes"><i class="fa fa-thumbs-up"></i> 24 Likes</div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="#" class="button">Read on Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram-holder">
                    <div class="title">
                        <i class="fa fa-instagram"></i> @backbeachcafe
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
