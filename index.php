<?php /* Template Name: Inicio */ get_header(); $post_id = get_the_ID(); ?>

<!--Block banner-->
<section class="block-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                <h1><?= get_field('block_banner_title', $post_id) ?></h1>
                <small><?= get_field('block_banner_text', $post_id) ?></small>
                <a href="" target="_self" class="btn btn-primary">Contactar</a>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <?php $block_banner_image = get_field('block_banner_image', $post_id) ?>
                <img src="<?= $block_banner_image['url'] ?>" class="img-fluid" alt="Image" title="<?= $block_banner_image['title'] ?>">
            </div>
        </div>
    </div>
</section>
<!--End block banner-->
<!--Block our services-->
<section class="block-our-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nuestros Servicios</h2>
            </div>
            <?php $data_slider = new WP_Query(array(
                'post_type'         => 'custom_services',
                'meta_key'          => 'block_services_order',
                'orderby'           => 'meta_value_num',
                'order'             => 'ASC',
                'post_status'       => 'publish',
                'posts_per_page'    => -1
            ));
            if ($data_slider->have_posts()):
                foreach ($data_slider->posts as $key => $value): ?>
                    <div class="col-12 col-md-6 col-lg-3 d-flex flex-column justify-content-start align-items-start">
                        <div class="items">
                            <?php $block_services_image = get_field('block_services_image', $value->ID) ?>
                            <img src="<?= $block_services_image['url'] ?>" class="img-fluid" alt="Image" title="<?= $block_services_image['title'] ?>">
                            <h4><?= get_field('block_services_text', $value->ID) ?></h4>
                            <h3><?= $value->post_title ?></h3>
                        </div>
                    </div>
                <?php endforeach;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!--End block our services-->
<!--Block about us-->
<section class="block-about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start">
                <h2><?= get_field('block_about_us_title', $post_id) ?></h2>
                <?= get_field('block_about_us_text', $post_id) ?>
            </div>
            <div class="col-12 col-lg-6">
                <?php $block_about_us_image = get_field('block_about_us_image', $post_id) ?>
                <div class="container-image" style="background-image: url('<?= $block_about_us_image['url'] ?>');"></div>
            </div>
        </div>
    </div>
</section>
<!--End block about us-->
<!--Block contact-->
<section class="block-contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= get_field('block_contact_title', $post_id) ?></h2>
                <?= get_field('block_contact_text', $post_id) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?= get_field('block_form_zoho', $post_id) ?>
            </div>
        </div>
    </div>
</section>
<!--End block contact-->

<?php get_footer(); ?>