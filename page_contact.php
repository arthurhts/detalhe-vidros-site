<?php
 /*
Template Name: PAGINA CONTATO
*/
?>
<?php get_header(); ?>

<div class="header-page container-page">
    <div class="container">
        <h2>Contato</h2>
        <div>HOME > CONTATO</div>
    </div>
</div>

<div class="container content-page content-page-about">
    <div class="row">
        <div class="col-md-6">
            <h2>MENSAGEM</h2>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <h2>ENDEREÇO</h2>
                    Rua Prof. Renato Alves de Godoy, 150 - Nova Aliança</br>
                    Ribeirão Preto – SP</br>
                    CEP: 14026-592</br>
                    Edifício Jéssica Campez</br>
                </div>
            </div>
            <div class="row content-fone-email">
                <div class="col-6">
                    <h2>TELEFONE</h2>
                    (16) 99109-2354
                </div>
                <div class="col-6">
                    <h2>EMAIL</h2>
                    CONTATO@DETALHEVIDROS.COM.BR
                </div>
            </div>
            <img class="mt-4 img-fluid"
                src="<?php bloginfo('template_url'); ?>/assets/images/global/contato-detalhe-vidros.png">
        </div>
    </div>
</div>

<?php get_footer(); ?>