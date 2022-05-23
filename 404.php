<?php /* Template Name: Error */ get_header(); ?>

<!--Block page error 404-->
<section class="block-error-thanks">
    <div class="container-fluid container-lg">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <h2>ERROR 404</h2>
                <p>No pudimos encontrar la página que buscas. Aquí hay algunos enlaces que pueden ayudarte:</p>
                <ul>
                    <li><a href="<?= home_url(); ?>/stands" target="_self" class="btn btn-primary">ESPACIOS</a></li>
                    <li><a href="<?= home_url(); ?>/marcas" target="_self" class="btn btn-primary">SERVICIOS</a></li>
                    <li><a href="<?= home_url(); ?>/proyectos" target="_self" class="btn btn-primary">PROYECTOS</a></li>
                    <li><a href="<?= home_url(); ?>/clientes" target="_self" class="btn btn-primary">CLIENTES</a></li>
                    <li><a href="<?= home_url(); ?>/nosotros" target="_self" class="btn btn-primary">NOSOTROS</a></li>
                    <li><a href="<?= home_url(); ?>/contacto" target="_self" class="btn btn-primary">CONTACTO</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-start align-items-start p-0">
                <div class="container-image" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/ASESORIA\ BARBERAN_2\ Copy\ 8.jpg');"></div>
            </div>
        </div>
    </div>
</section>
<!--End block page error 404-->

<?php get_footer(); ?>