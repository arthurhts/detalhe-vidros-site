<?php
 /*
Template Name: PAGINA SOBRE NÓS
*/
?>
<?php get_header(); ?>

<section class="top-home">
    <div class="menu-home">
        <nav class="nav-home">
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
</section>

<section class="list-products">

</section>

<h1 class="text-center">Hello World</h1>
<h1 class="text-center">Hello World</h1>
<h1 class="text-center">Hello World</h1>
<h1 class="text-center">Hello World</h1>

<?php get_footer(); ?>