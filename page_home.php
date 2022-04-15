<?php
 /*
Template Name: PAGINA INICIAL
*/
?>
<?php get_header(); ?>

<script>
var topnav = document.getElementById('topnav');
topnav.style.display = 'none';
window.addEventListener('scroll', function() {

    if (window.scrollY > 80) {
        console.log("MOSTRA")
        topnav.style.display = 'block';
    } else {
        console.log("ESCONDE")
        topnav.style.display = 'none';
    }

})
</script>

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
        <div class="col-md-6 box-top"><span>A DETALHE VIDROS</span> POSSUI SOLUÇÕES
            MODERNAS COM ALTA QUALIDADE
            PARA SUA <span>OBRA, CASA OU EMPRESA</span></div>
    </div>
</section>

<div class="container">
    <section class="list-products-home">
        <div class="d-flex item product-espelho">
            <div class="overlay-black">
                <div class="content">
                    <h2>Espelhos</h2>
                    <p class="sub-title">Material altamente delicado, sofisticado e personalizável.
                    </p>
                    <button type="button" class="btn btn-light">SAIBA MAIS</button>
                </div>
            </div>
        </div>

        <div class="d-flex item product-espelho">
            <div class="overlay-black">
                <div class="content">
                    <h2>Boxes</h2>
                    <p class="sub-title">Ao contrário do que muitos pensam, o box pode ser apenas uma instalação
                        simples, mas também algo muito mais rebuscado.
                    </p>
                    <button type="button" class="btn btn-light">SAIBA MAIS</button>
                </div>
            </div>
        </div>

        <div class="d-flex item product-espelho">
            <div class="overlay-black">
                <div class="content">
                    <h2>Fechamento de Varadas</h2>
                    <p class="sub-title">Produto também personalizável destinado principalmente a apartamentos, podendo
                        também ser aplicado a varanda de residências.
                    </p>
                    <button type="button" class="btn btn-light">SAIBA MAIS</button>
                </div>
            </div>
        </div>

        <div class="d-flex item product-espelho">
            <div class="overlay-black">
                <div class="content">
                    <h2>Fechamento de Sacadas</h2>
                    <p class="sub-title">Instalações super modernas que garantem além de proteção, beleza e sofisticação
                        ao ambiente.
                    </p>
                    <button type="button" class="btn btn-light">SAIBA MAIS</button>
                </div>
            </div>
        </div>

        <div class="d-flex item product-espelho">
            <div class="overlay-black">
                <div class="content">
                    <h2>Vidros Temperados</h2>
                    <p class="sub-title">O mais comercializado e um dos mais resistentes, o vidro temperado pode ser
                        aplicado de várias formas, fabricado em diversas cores e espessuras.
                    </p>
                    <button type="button" class="btn btn-light">SAIBA MAIS</button>
                </div>
            </div>
        </div>

        <div class="d-flex item product-espelho">
            <div class="overlay-black">
                <div class="content">
                    <h2>Vidros Laminados</h2>
                    <p class="sub-title">Um dos vidros mais seguros que existem no mercado, sua aplicação no segmento da
                        construção civil vem aumentando cada vez mais.
                    </p>
                    <button type="button" class="btn btn-light">SAIBA MAIS</button>
                </div>
            </div>
        </div>

    </section>
</div>

<?php get_footer(); ?>