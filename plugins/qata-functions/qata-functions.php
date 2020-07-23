<?php
/*
Plugin Name: Qata Functions
Description: Site specific code changes for Qata
*/
/* Start Adding Functions Below this Line */
  
/**========================
	Create Post Types.
===========================*/
	
	//Products
	function create_products_posttype() {
		
		// Set UI labels for Custom Post Type
		$labels = array(
			'name'                       => _x( 'Products', 'taxonomy general name', 'qatalpaca' ),
			'singular_name'              => _x( 'Product', 'taxonomy singular name', 'qatalpaca' ),
			'search_items'               => __( 'Search Products', 'qatalpaca' ),
			'popular_items'              => __( 'Popular Products', 'qatalpaca' ),
			'all_items'                  => __( 'All Products', 'qatalpaca' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Product', 'qatalpaca' ),
			'update_item'                => __( 'Update Product', 'qatalpaca' ),
			'add_new_item'               => __( 'Add New Product', 'qatalpaca' ),
			'new_item_name'              => __( 'New Product Name', 'qatalpaca' ),
			'separate_items_with_commas' => __( 'Separate products with commas', 'qatalpaca' ),
			'add_or_remove_items'        => __( 'Add or remove products', 'qatalpaca' ),
			'choose_from_most_used'      => __( 'Choose from the most used products', 'qatalpaca' ),
			'not_found'                  => __( 'No products found.', 'qatalpaca' ),
			'menu_name'                  => __( 'Products', 'qatalpaca' ),
		);
		
		$supports = array(
			'title', 'editor', 'excerpt', 'thumbnail',
		);
		
		register_post_type( 'qata_product',
		array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products/%products_category%'),
			'menu_icon'   => 'dashicons-products',
			'menu_position' => 24,
			'taxonomies'  => array( 'products_category', 'materials' ),
			'supports' => $supports,
			)
		);
	}
	add_action( 'init', 'create_products_posttype' );


/**========================
	Create Taxonomies.
===========================*/

	//Material Taxonomy
	function create_materials_taxonomy() {

	  $labels = array(
		'name' => _x( 'Materials', 'taxonomy general name' ),
		'singular_name' => _x( 'Material', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Materials' ),
		'popular_items' => __( 'Popular Materials' ),
		'all_items' => __( 'All Materials' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Material' ), 
		'update_item' => __( 'Update Material' ),
		'add_new_item' => __( 'Add New Material' ),
		'new_item_name' => __( 'New Material Name' ),
		'separate_items_with_commas' => __( 'Separate topics with commas' ),
		'add_or_remove_items' => __( 'Add or remove Materials' ),
		'choose_from_most_used' => __( 'Choose from the most used Materials' ),
		'menu_name' => __( 'Materials' ),
	  ); 

	  register_taxonomy('materials','qata_product',array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'materials' ),
	  ));
	}

	add_action( 'init', 'create_materials_taxonomy', 0 );


	//Product Categories Taxonomy
	function create_products_category_taxonomy() {

	  $labels = array(
		'name' => _x( 'Product Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Product Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Product Categories' ),
		'popular_items' => __( 'Popular Product Categories' ),
		'all_items' => __( 'All Product Categories' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Product Category' ), 
		'update_item' => __( 'Update  ProductCategory' ),
		'add_new_item' => __( 'Add New Product Category' ),
		'new_item_name' => __( 'New Product Category Name' ),
		'separate_items_with_commas' => __( 'Separate topics with commas' ),
		'add_or_remove_items' => __( 'Add or remove Product Categories' ),
		'choose_from_most_used' => __( 'Choose from the most used Product Categories' ),
		'menu_name' => __( 'Categories' ),
	  ); 

	  register_taxonomy('products_category','qata_product',array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite'      => array('slug' => 'products', 'with_front' => false),
		'supports' => array( 'thumbnail' ),
	  ));
	}

	add_action( 'init', 'create_products_category_taxonomy', 0 );


	//Changing each URL product to: /products/categoryName/item

	function products_category_post_link( $post_link, $id = 0 ){
	    $post = get_post($id);  
	    $terms = wp_get_object_terms( $post->ID, 'products_category' );
	    if( $terms ){
	    	return str_replace( '%products_category%' , $terms[0]->slug , $post_link );
		} else {
	    	return str_replace( '%books%/' , '' , $post_link );
		}
	    return $post_link;  
	}
	add_filter( 'post_type_link', 'products_category_post_link', 1, 3 );

	//Remove TaxonomyName from the archive title

	add_filter( 'get_the_archive_title', function ($title) {    
        if ( is_category() ) {    
                $title = single_cat_title( '', false );    
            } elseif ( is_tag() ) {    
                $title = single_tag_title( '', false );    
            } elseif ( is_author() ) {    
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
            } elseif ( is_tax() ) { //for custom post types
                $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
            } elseif (is_post_type_archive()) {
                $title = post_type_archive_title( '', false );
            }
        return $title;    
    });
  
/* Stop Adding Functions Below this Line */


?>
