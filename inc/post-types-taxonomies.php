<?php
function mindset_register_custom_post_types() {
    $labels = array(
        'name'                     => _x( 'Works', 'post type general name', 'mindset-theme' ),
        'singular_name'            => _x( 'Work', 'post type singular name', 'mindset-theme' ),
        'add_new'                  => _x( 'Add New', 'work', 'mindset-theme' ),
        'add_new_item'             => __( 'Add New Work', 'mindset-theme' ),
        'edit_item'                => __( 'Edit Work', 'mindset-theme' ),
        'new_item'                 => __( 'New Work', 'mindset-theme' ),
        'view_item'                => __( 'View Work', 'mindset-theme' ),
        'view_items'               => __( 'View Works', 'mindset-theme' ),
        'search_items'             => __( 'Search Works', 'mindset-theme' ),
        'not_found'                => __( 'No works found.', 'mindset-theme' ),
        'not_found_in_trash'       => __( 'No works found in Trash.', 'mindset-theme' ),
        'parent_item_colon'        => __( 'Parent Works:', 'mindset-theme' ),
        'all_items'                => __( 'All Works', 'mindset-theme' ),
        'archives'                 => __( 'Work Archives', 'mindset-theme' ),
        'attributes'               => __( 'Work Attributes', 'mindset-theme' ),
        'insert_into_item'         => __( 'Insert into work', 'mindset-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this work', 'mindset-theme' ),
        'featured_image'           => __( 'Work featured image', 'mindset-theme' ),
        'set_featured_image'       => __( 'Set work featured image', 'mindset-theme' ),
        'remove_featured_image'    => __( 'Remove work featured image', 'mindset-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'mindset-theme' ),
        'menu_name'                => _x( 'Works', 'admin menu', 'mindset-theme' ),
        'filter_items_list'        => __( 'Filter works list', 'mindset-theme' ),
        'items_list_navigation'    => __( 'Works list navigation', 'mindset-theme' ),
        'items_list'               => __( 'Works list', 'mindset-theme' ),
        'item_published'           => __( 'Work published.', 'mindset-theme' ),
        'item_published_privately' => __( 'Work published privately.', 'mindset-theme' ),
        'item_revereted_to_draft'  => __( 'Work reverted to draft.', 'mindset-theme' ),
        'item_trashed'             => __( 'Work trashed.', 'mindset-theme' ),
        'item_scheduled'           => __( 'Work scheduled.', 'mindset-theme' ),
        'item_updated'             => __( 'Work updated.', 'mindset-theme' ),
        'item_link'                => __( 'Work link.', 'mindset-theme' ),
        'item_link_description'    => __( 'A link to a work.', 'mindset-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'works' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'fwd-work', $args
    );
    $labels = array(
        'name'                  => _x( 'Testimonials', 'post type general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Testimonial', 'post type singular name', 'mindset-theme' ),
        'menu_name'             => _x( 'Testimonials', 'admin menu', 'mindset-theme' ),
        'add_new'               => _x( 'Add New', 'testimonial', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Testimonial', 'mindset-theme' ),
        'new_item'              => __( 'New Testimonial', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Testimonial', 'mindset-theme' ),
        'view_item'             => __( 'View Testimonial', 'mindset-theme'  ),
        'all_items'             => __( 'All Testimonials', 'mindset-theme' ),
        'search_items'          => __( 'Search Testimonials', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'mindset-theme' ),
        'not_found'             => __( 'No testimonials found.', 'mindset-theme' ),
        'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'mindset-theme' ),
        'item_link'             => __( 'Testimonial link.', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a testimonial.', 'mindset-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array( array( 'core/pullquote' ) ),
        'template_lock'      => 'all'
    );
    register_post_type( 'fwd-testimonial', $args
    );
        // Register job postings post type
        $labels = array(
        'name'                  => _x( 'Job Postings', 'post type general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Job Posting', 'post type singular name', 'mindset-theme' ),
        'menu_name'             => _x( 'Job Postings', 'admin menu', 'mindset-theme' ),
        'add_new'               => _x( 'Add New', 'service', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Job Posting', 'mindset-theme' ),
        'new_item'              => __( 'New Job Posting', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Job Posting', 'mindset-theme' ),
        'view_item'             => __( 'View Job Posting', 'mindset-theme' ),
        'all_items'             => __( 'All Job Postings', 'mindset-theme'  ),
        'search_items'          => __( 'Search Job Postings', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Job Postings:', 'mindset-theme' ),
        'not_found'             => __( 'No Job Postings found.', 'mindset-theme' ),
        'not_found_in_trash'    => __( 'No Job Postings found in Trash.', 'mindset-theme' ),
        'insert_into_item'      => __( 'Insert into Job Posting', 'mindset-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Job Posting', 'mindset-theme' ),
        'item_link'             => __( 'Job Posting link.', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a job posting.', 'mindset-theme' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'careers' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array(
            array( 'core/heading', array( 'level' => 3, 'content' => 'Role', ) ),
            array( 'core/paragraph', array( 'placeholder' => 'Describe the role...' ) ),
            array( 'core/heading', array( 'level' => 3, 'content' => 'Requirements' ) ),
            array( 'core/list' ),
            array( 'core/heading', array( 'level' => 3, 'content' => 'Location' ) ),
            array( 'core/paragraph' ),
            array( 'core/heading', array( 'level' => 3, 'content' => 'How to Apply' ) ),
            array( 'core/paragraph' ),
        )
    );
    register_post_type( 'fwd-job-posting', $args );
    // Register Services post type
    $labels = array(
        'name'                  => _x( 'Services', 'post type general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Service', 'post type singular name', 'mindset-theme' ),
        'menu_name'             => _x( 'Services', 'admin menu', 'mindset-theme' ),
        'add_new'               => _x( 'Add New', 'service', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Service', 'mindset-theme' ),
        'new_item'              => __( 'New Service', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Service', 'mindset-theme' ),
        'view_item'             => __( 'View Service', 'mindset-theme' ),
        'all_items'             => __( 'All Services', 'mindset-theme' ),
        'search_items'          => __( 'Search Services', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Services:', 'mindset-theme' ),
        'not_found'             => __( 'No services found.', 'mindset-theme' ),
        'not_found_in_trash'    => __( 'No services found in Trash.', 'mindset-theme' ),
        'item_link'             => __( 'Service link.', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a service.', 'mindset-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor' ),
    );

    register_post_type( 'fwd-service', $args );   
}
add_action( 'init', 'mindset_register_custom_post_types' );

	function mindset_register_taxonomies() {
    // Add Work Category taxonomy
    $labels = array(
        'name'                  => _x( 'Work Categories', 'taxonomy general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Work Category', 'taxonomy singular name', 'mindset-theme' ),
        'search_items'          => __( 'Search Work Categories', 'mindset-theme' ),
        'all_items'             => __( 'All Work Category', 'mindset-theme' ),
        'parent_item'           => __( 'Parent Work Category', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Work Category:', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Work Category', 'mindset-theme' ),
        'view_item'             => __( 'View Work Category', 'mindset-theme' ),
        'update_item'           => __( 'Update Work Category', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Work Category', 'mindset-theme' ),
        'new_item_name'         => __( 'New Work Category Name', 'mindset-theme' ),
        'template_name'         => __( 'Work Category Archives', 'mindset-theme' ),
        'menu_name'             => __( 'Work Category', 'mindset-theme' ),
        'not_found'             => __( 'No work categories found.', 'mindset-theme' ),
        'no_terms'              => __( 'No work categories', 'mindset-theme' ),
        'items_list_navigation' => __( 'Work Categories list navigation', 'mindset-theme' ),
        'items_list'            => __( 'Work Categories list', 'mindset-theme' ),
        'item_link'             => __( 'Work Category Link', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a work category.', 'mindset-theme' ),
    );
    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => array( 'slug' => 'work-categories' ),
    );
    register_taxonomy( 'fwd-work-category', array( 'fwd-work' ), $args );

    // Add Featured taxonomy
    $labels = array(
        'name'                  => _x( 'Featured', 'taxonomy general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Featured', 'taxonomy singular name', 'mindset-theme' ),
        'search_items'          => __( 'Search Featured', 'mindset-theme' ),
        'all_items'             => __( 'All Featured', 'mindset-theme' ),
        'parent_item'           => __( 'Parent Featured', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Featured:', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Featured', 'mindset-theme' ),
        'view_item'             => __( 'View Featured', 'mindset-theme' ),
        'update_item'           => __( 'Update Featured', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Featured', 'mindset-theme' ),
        'new_item_name'         => __( 'New Work Featured', 'mindset-theme' ),
        'menu_name'             => __( 'Featured', 'mindset-theme' ),
        'template_name'         => __( 'Featured Archives', 'mindset-theme' ),
        'menu_name'             => __( 'Featured', 'mindset-theme' ),
        'not_found'             => __( 'No featured found.', 'mindset-theme' ),
        'no_terms'              => __( 'No featured', 'mindset-theme' ),
        'items_list_navigation' => __( 'Featured list navigation', 'mindset-theme' ),
        'items_list'            => __( 'Featured list', 'mindset-theme' ),
        'item_link'             => __( 'Featured Link', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a featured.', 'mindset-theme' ),
    );
    
    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => array( 'slug' => 'featured' ),
    );
    
    register_taxonomy(
        'fwd-featured',
        array( 'fwd-work', 'fwd-testimonial' ),
        $args
    );
    // Add Service Category taxonomy
    $labels = array(
        'name'                  => _x( 'Service Categories', 'taxonomy general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Service Category', 'taxonomy singular name', 'mindset-theme' ),
        'search_items'          => __( 'Search Service Categories', 'mindset-theme' ),
        'all_items'             => __( 'All Service Categories', 'mindset-theme' ),
        'parent_item'           => __( 'Parent Service Category', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Service Category:', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Service Category', 'mindset-theme' ),
        'view_item'             => __( 'View Service Category', 'mindset-theme' ),
        'update_item'           => __( 'Update Service Category', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Service Category', 'mindset-theme' ),
        'new_item_name'         => __( 'New Service Category Name', 'mindset-theme' ),
        'template_name'         => __( 'Service Category Archives', 'mindset-theme' ),
        'menu_name'             => __( 'Service Categories', 'mindset-theme' ),
        'not_found'             => __( 'No service categories found.', 'mindset-theme' ),
        'no_terms'              => __( 'No service categories', 'mindset-theme' ),
        'items_list_navigation' => __( 'Service Categories list navigation', 'mindset-theme' ),
        'items_list'            => __( 'Service Categories list', 'mindset-theme' ),
        'item_link'             => __( 'Service Category Link', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a service category.', 'mindset-theme' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => array( 'slug' => 'service-categories' ),
    );

    register_taxonomy( 'fwd-service-category', array( 'fwd-service' ), $args );
}
add_action( 'init', 'mindset_register_taxonomies' );

// This will flush permalinks when switching themes
function mindset_rewrite_flush() {
    mindset_register_custom_post_types();
    mindset_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'mindset_rewrite_flush' );