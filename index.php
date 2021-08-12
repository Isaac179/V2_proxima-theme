<?php get_header(); ?>
    <section class="presentacion">
        <div class="flex-item1">
            <h2>Noticias</h2>
        <div class="flex-item2">
            <img src="<?php bloginfo('template_url'); ?>/images/portada-metapath.png">
        </div>
    </section>


    <section class="presentacion">
        <div class="flex-item1">
            <h2>Vacantes</h2>
        <div class="flex-item2">
        <div class="row seccion-pagina">
        <div class="cuadricula">

            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                        <div class="cuadro grande-4 chico-12 cuadro-trabajo">
                            <p>Patólogo anátomo</p>
                            <p>&nbsp;&nbsp;Valparaiso</p>
                            &nbsp;&nbsp;<p class="fa fa-map-marker">Tepic Nayarit</p>
                            <br>
                            <a>Ver mas</a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo2">
                            <p>Patólogo anátomo</p>
                            <p>&nbsp;&nbsp;Valparaiso</p>
                            &nbsp;&nbsp;<p class="fa fa-map-marker"> Tepic Nayarit</p>
                            <br>
                            <a>Ver mas</a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo3">
                            <p>Patólogo anátomo</p>
                            <p>&nbsp;&nbsp;Valparaiso</p>
                            &nbsp;&nbsp;<p class="fa fa-map-marker"> Tepic Nayarit</p>
                            <br>
                            <a>Ver mas</a>
                        </div>
                    </div>
                    <br><br>
                        <a href="">Ver todas las ofertas de trabajo ></a>
                </div>
            </div>
        </div>
    </div>
        </div>
        </div>
    </section>

    <section class="presentacion">
        <div class="flex-item1">
            <h2>Empresas</h2>
        <div class="flex-item2">
        <div class="row seccion-empresa">
        <div class="cuadricula">
            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                        
                        <div class="cuadro grande-3 medio-6 chico-12 cuadro-trabajo">
                            <a href="#"><img class="logo-empresa" src="<?php bloginfo('template_url'); ?>/images/marcas/lapcit.svg"></a>
                        </div>

                        <div class="cuadro grande-3 medio-6 chico-12 cuadro-trabajo">
                            <a href="#"><img class="logo-empresa" src="<?php bloginfo('template_url'); ?>/images/marcas/valparaiso.svg"></a>
                        </div>

                        <div class="cuadro grande-3 medio-6 chico-12 cuadro-trabajo">
                            <a href="#"><img class="logo-empresa" src="<?php bloginfo('template_url'); ?>/images/marcas/cencal.svg"></a>
                        </div>

                        <div class="cuadro grande-3 medio-6 chico-12 cuadro-trabajo">
                            <a href="#"><img class="logo-empresa" src="<?php bloginfo('template_url'); ?>/images/marcas/columba.svg"></a>
                        </div>
                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>

    <section class="presentacion">
        <div class="flex-item1">
            <h2>Nosotros</h2>
        <div class="flex-item2">
        <div class="row seccion-nosotros">

            <div class="columns medio-10 grande-11 chico-12 slider-home"> 
                <?php $nostros = get_page_by_title('nosotros');
                    $img_nosotros = get_the_post_thumbnail_url($nostros->ID);
                    $image_id = get_post_thumbnail_id($nostros->ID);
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                ?>
                <img alt="<?php echo $image_alt  ?>" src="<?php echo $img_nosotros  ?>">
                <?php echo $nostros->post_content ?>
            </div>
    </div>
        </div>
    </section>

    <section class="presentacion">
        <div class="flex-item1">
            <h2>Instagram</h2>
        <div class="flex-item2">
        <div class="seccion-insta">
        <div class="cuadricula">

            <div class="cuadro medio-10 grande-11 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                        <div class="cuadro grande-4 chico-12 cuadro-trabajo">
                           <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima-instagram.png"></a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo2">
                            <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima-instagram.png"></a>
                        </div>

                        <div class="cuadro grande-4 chico-12 cuadro-trabajo3">
                            <a href="https://www.instagram.com/" target="_Blank"><img class="img-insta" src="<?php bloginfo('template_url'); ?>/images/proxima-instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <br>
    </div>

</div>

<div class="row footer-proxima">
	<div class="row">
    <div class="row pre-footer">
            <p>SIGUENOS EN FACEBOOK @PROXIMA</p>
	</div>
    </div>
</div>
        </div>
    </section>



    
    
<?php get_footer(); ?>