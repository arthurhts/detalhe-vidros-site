<?php
 /*
Template Name: PAGINA INICIAL
*/
?>
<?php get_header(); ?>

<section class="top-home">
    <div class="menu-home">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
                </div>
            </div>
        </nav>
    </div>
    <div class="row content-top align-items-center">
        <div class="d-flex col-md-6 justify-content-center align-items-center"><img
                src="<?php bloginfo('template_url'); ?>/assets/images/home/logo-topo-home.png"></div>
        <div class="d-flex col-md-6 justify-content-center box-top">A DETALHE VIDROS POSSUI SOLUÇÕES
            MODERNAS COM ALTA QUALIDADE
            PARA SUA OBRA, CASA OU EMPRESA</div>
    </div>
</section>

<div class="container">
    <section class="list-products-home">
        <div class="d-flex item product-espelho">
            <h2>ESPELHOS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis finibus velit, eu auctor ipsum
                commodo
                ac. Morbi in sollicitudin quam. Maecenas in felis ac felis scelerisque commodo nec non nibh. </p>
            <button>Saiba Mais</button>
        </div>

        <div class="d-flex item product-espelho">
            <h2>ESPELHOS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis finibus velit, eu auctor ipsum
                commodo
                ac. Morbi in sollicitudin quam. Maecenas in felis ac felis scelerisque commodo nec non nibh. </p>
            <button>Saiba Mais</button>
        </div>

        <div class="d-flex item product-espelho">
            <h2>ESPELHOS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis finibus velit, eu auctor ipsum
                commodo
                ac. Morbi in sollicitudin quam. Maecenas in felis ac felis scelerisque commodo nec non nibh. </p>
            <button>Saiba Mais</button>
        </div>

        <div class="d-flex item product-espelho">
            <h2>ESPELHOS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mollis finibus velit, eu auctor ipsum
                commodo
                ac. Morbi in sollicitudin quam. Maecenas in felis ac felis scelerisque commodo nec non nibh. </p>
            <button>Saiba Mais</button>
        </div>
    </section>
</div>

<?php get_footer(); ?>