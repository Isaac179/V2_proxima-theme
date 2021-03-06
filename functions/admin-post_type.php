<?php

/**
 * En este archivo se incluyen los post type personalizados  y las columnas personalizadas 
 *
 */

/** ==============================================================================================================
 *                                                  HOOKS
 *  ==============================================================================================================
 */

// ------------ post type ---------------------------

add_action( 'init', 'cltvo_posttypes' ); // incluye los post types personalizados 


// ------------ colunmas  ---------------------------

// add_action( 'manage_posts_custom_column' , 'cltvo_tax_col', 10, 2 ); 
// add_action( 'manage_crdmn_proyecto_pt_posts_custom_column' , 'cltvo_tax_col', 10, 2 );

// add_filter( 'manage_edit-post_columns', 'cltvo_nueva_col_post' );
// add_filter( 'manage_edit-crdmn_proyecto_pt_columns', 'cltvo_nueva_col_proy' );



/** ==============================================================================================================
 *                                                TIPOS DE POSTS   
 *  ==============================================================================================================
 */

function cltvo_posttypes(){
	
    register_post_type(
        'trabajos_pt'
    ,   array (
           'has_archive'         => TRUE
        ,   'label'              => 'Trabajos'
        ,	'singular_name'		 => 'trabajo'    
    	,	'capability_type' => 'post'
        ,   'menu_position'      => 2
        ,   'public'             => TRUE
        ,   'rewrite'            => array ( 'slug' => 'bolsa-trabajos' )
        ,   'supports'           => array ( 'editor', 'title', 'thumbnail','excerpt' )
        )
    );
	register_post_type(
        'empresas_pt'
    ,   array (
           'has_archive'         => TRUE
        ,   'label'              => 'Empresas'
        ,	'singular_name'		 => 'Empresa'    
    	,	'capability_type' => 'post'
        ,   'menu_position'      => 2
        ,   'public'             => TRUE
        ,   'rewrite'            => array ( 'slug' => 'empresas' )
        ,   'supports'           => array ( 'editor', 'title', 'thumbnail','excerpt' )
        )
    );
	register_post_type(
        'sucursales_pt'
    ,   array (
           'has_archive'         => TRUE
        ,   'label'              => 'Sucursales'
        ,	'singular_name'		 => 'Sucursal'    
    	,	'capability_type' => 'post'
        ,   'menu_position'      => 2
        ,   'public'             => TRUE
        ,   'rewrite'            => array ( 'slug' => 'sucursales' )
        ,   'supports'           => array ( 'editor', 'title', 'thumbnail','excerpt' )
        )
    );

}


/** ==============================================================================================================
 *                                                  Columnas en PT 
 *  ==============================================================================================================
 */


// ???
function cltvo_nueva_col_post($columns) {
	//este call back se tiene que repetir por cada
	//Post Type que se quiera afectar
	$unsets = array('author', 'categories', 'tags', 'comments', 'date');
	foreach ($unsets as $unset) unset($columns[$unset]);
	$columns['crdmn_proyecto_tax'] = 'Proyecto';
	$columns['tags'] = 'Etiquetas';
	$columns['date'] = 'Fecha';

	return $columns;
}

// ???
function cltvo_nueva_col_proy($columns) {
	//cambiar el sufijo dependiendo de el nombre del Post Type
	$unsets = array('tags', 'date');
	foreach ($unsets as $unset) unset($columns[$unset]);
	$columns['crdmn_cliente_tax'] = 'Cliente';
	$columns['crdmn_servicio_tax'] = 'Servicio';
	$columns['crdmn_proyecto_tax'] = 'Proyecto';
	$columns['tags'] = 'Etiquetas';
	$columns['date'] = 'Fecha';

	return $columns;
}

// ???
function cltvo_tax_col( $column_name, $post_id ) {
	//Muestra en la columna el nombre
	//de las taxonom??as de ese post con su link
	$taxonomy = $column_name;
	$post_type = get_post_type($post_id);
	$terms = get_the_terms($post_id, $taxonomy);

	if (!empty($terms) ) {
		foreach ( $terms as $term )
			//$post_terms[] = $term->name;
			$post_terms[] ="<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " .esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
		echo join('', $post_terms );
	}
}

?>