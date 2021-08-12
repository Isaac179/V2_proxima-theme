<?php get_header(); ?>
<div class="row seccion-pagina">
        <div class="cuadricula">

            <div class="cuadro medio-1 grande-12 chico-12 slider-home">
                <div class="row">
                    <div class="cuadricula">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php $empresa_relacionada = get_post_meta( $post->ID, 'empresa_relacionada_meta', true );
                        $empresa_relacionada = $empresa_relacionada[0];
                    ?>
                    
                        <div class="cuadro grande-12 chico-12 cuadro-trabajo" style="border-bottom: 20px solid <?php echo get_post_meta( $empresa_relacionada, 'color_destacado_meta', true ); ?>;">
                           <a href="<?php echo get_permalink(); ?>"> <p><?php the_title();  ?>   </p>
                           
                            <p><?php echo get_the_title($empresa_relacionada);?></p>
                            <p> Tepic Nayarit</p>
                            Ver mas</a>
                            <?php echo get_post_meta( $empresa_relacionada, 'logo_destacado_meta', true ); ?>
                        </div>
                        <?php endwhile ; endif ;  ?>   
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>