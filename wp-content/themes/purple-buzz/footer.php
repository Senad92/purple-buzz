<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Purple_Buzz
 */

// All required fields from ACF option page

$site_name              = get_field('site_name', 'option');
$description            = get_field('description', 'option');
$facebook_url           = get_field('facebook_url', 'option');
$linkedin_url           = get_field('linkedin_url', 'option');
$whatsapp_url           = get_field('whatsapp_url', 'option');
$flickr_url             = get_field('flickr_url', 'option');
$medium_url             = get_field('medium_url', 'option');
$title                  = get_field('title', 'option');
$company_number         = get_field('company_number', 'option');
$email                  = get_field('e-mail', 'option');
$owner                  = get_field('owner', 'option');
$designer_company       = get_field('designer_company', 'option');

?>

<!-- Start Footer -->
	<footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5"><?php echo $site_name; ?></span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        <?php echo $description; ?>
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="<?php echo $facebook_url; ?>">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="<?php echo $linkedin_url; ?>">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="<?php echo $whatsapp_url; ?>">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="<?php echo $flickr_url; ?>">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="<?php echo $medium_url; ?>">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <?php  dynamic_sidebar( 'footer-1' ); ?> 
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <?php  dynamic_sidebar( 'footer-2' ); ?> 
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300"><?php echo $title; ?></h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:<?php echo $company_number; ?>"><?php echo $company_number; ?></a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            <?php echo $owner; ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <?php echo $designer_company; ?>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
