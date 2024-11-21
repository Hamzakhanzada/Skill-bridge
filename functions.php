<?php

register_nav_menus(array(
	'primary-menu' => __('Header Menu'),
	'form-menu'    => __('Form Menu'),
));

add_theme_support(
	'custom-logo',
	array(
		'width' => 54,
		'height' => 54
	)
);

add_theme_support('post-thumbnails');

register_post_type(
	'courses',
	array(
		'labels'      => array(
			'name'          => __('Our Courses'),
			'singular_name' => __('Our Courses'),
		),
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt',),

		'public'      => true,
		'has_archive' => true,
	)
);
// Register Custom Post Type: Courses
register_post_type(
	'courses',
	array(
		'labels'      => array(
			'name'          => __('Our Courses'),
			'singular_name' => __('Our Course'),
		),
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'public'      => true,
		'has_archive' => true,
	)
);
 
function register_courses_tags() {
    register_taxonomy(
        'courses_tags',
        'courses', 
        array(
            'label'             => __('Course Tags'),
            'rewrite'           => array('slug' => 'courses-tags'), 
            'hierarchical'      => false,
            'show_ui'           => true,
            'show_admin_column' => true, // Display in the admin columns
            'query_var'         => true, // Enable query variable
            'public'            => true, // Make it publicly available
        )
    );
}
add_action('init', 'register_courses_tags');

function create_course_category_taxonomy()
{
	register_taxonomy(
		'course_category',
		'courses',
		array(
			'labels' => array(
				'name'              => __('Course Categories'),
				'singular_name'     => __('Course Category'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'rewrite'           => array('slug' => 'course-category'),
		)
	);
}
add_action('init', 'create_course_category_taxonomy');

function create_benefit_category_taxonomy()
{
	register_taxonomy(
		'benefit_category',
		'benefits',
		array(
			'labels' => array(
				'name'              => __('Benefit Categories'),
				'singular_name'     => __('Benefit Category'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'rewrite'           => array('slug' => 'benefit-category'),
		)
	);
}
add_action('init', 'create_benefit_category_taxonomy');


register_post_type(
	'benefits',
	array(
		'labels'      => array(
			'name'          => __('Benefits'),
			'singular_name' => __('Benefits'),
		),
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt',),

		'public'      => true,
		'has_archive' => true,
	)
);
 
function create_testimonial_category_taxonomy()
{
	register_taxonomy(
		'testimonial_category',
		'testimonials',
		array(
			'labels' => array(
				'name'              => __('Testimonial Categories'),
				'singular_name'     => __('Testimonial Category'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'rewrite'           => array('slug' => 'testimonial-category'),
		)
	);
}
add_action('init', 'create_testimonial_category_taxonomy');

register_post_type(
	'testimonials',
	array(
		'labels'      => array(
			'name'          => __(' Our Testimonials'),
			'singular_name' => __('Our Testimonials'),
		),
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt',),

		'public'      => true,
		'has_archive' => true,
	)
);