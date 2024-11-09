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

register_post_type('courses',
		array(
			'labels'      => array(
				'name'          => __('Our Courses'),
				'singular_name' => __('Our Courses'),
			),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', ),

				'public'      => true,
				'has_archive' => true,
		)
	);

    register_post_type('benefits',
		array(
			'labels'      => array(
				'name'          => __('Benefits'),
				'singular_name' => __('Benefits'),
			),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', ),

			'public'      => true,
			'has_archive' => true,
		)
	);

    register_post_type('testimonials',
		array(
			'labels'      => array(
				'name'          => __(' Our Testimonials'),
				'singular_name' => __('Our Testimonials'),
			),
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', ),

			'public'      => true,
			'has_archive' => true,
		)
	);
?>