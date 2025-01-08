<?php echo get_header() ?>

<div class="max-w-7xl mx-auto px-4 py-8">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <p>No posts found.</p>
    <?php endif; ?>
    <div class="mb-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h1 class="text-4xl font-bold mb-4">
                <?php the_title(); ?>
            </h1>
        </div>
        <div>
            <p class="text-gray-600">
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>

    <div class="relative mb-8">
        <img src="<?php the_post_thumbnail_url('default'); ?>" alt="<?php the_title(); ?>"
            class="w-full rounded-lg object-cover">
    </div>

    <div class="max-w-7xl mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php
    // Fetch posts from 'course-modules' post type
    $courses_modules = get_posts(array(
        'post_type' => 'course-modules',
        'posts_per_page' => -1,  // Show all posts
        'meta_key' => 'section_number', // Meta key to sort by
         'orderby' => 'meta_value_num', // Sort numerically (assuming section_number is a number)
         'order' => 'ASC' 
    ));

    foreach ($courses_modules as $course_module) {
        // setup_postdata($post);

        // Get custom fields
        $section_number = get_post_meta($course_module->ID, 'section_number', true);
        $section_title = get_post_meta($course_module->ID, 'section_title', true);
        $lesson_1_title = get_post_meta($course_module->ID, 'lesson_1_title', true);
        $lesson_1_subtitle = get_post_meta($course_module->ID, 'lesson_1_subtitle', true);
        $lesson_1_duration = get_post_meta($course_module->ID, 'lesson_1_duration', true);

        $lesson_2_title = get_post_meta($course_module->ID, 'lesson_2_title', true);
        $lesson_2_subtitle = get_post_meta($course_module->ID, 'lesson_2_subtitle', true);
        $lesson_2_duration = get_post_meta($course_module->ID, 'lesson_2_duration', true);

        $lesson_3_title = get_post_meta($course_module->ID, 'lesson_3title', true);
        $lesson_3_subtitle = get_post_meta($course_module->ID, 'lesson_3_subtitle', true);
        $lesson_3_duration = get_post_meta($course_module->ID, 'lesson_3_duration', true);
    ?>
            <div class="bg-white p-6 shadow rounded-lg">
                <h2 class="text-5xl font-bold text-end text-gray-800 mb-4"><?php echo($section_number); ?></h2>
                <h3 class="text-lg font-semibold text-gray-700 mb-6"><?php echo ($section_title); ?></h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 border border-grey-70 rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium"><?php echo ($lesson_1_title); ?></p>
                            <p class="text-sm text-gray-500"><?php echo ($lesson_1_subtitle); ?></p>
                        </div>
                        <div class="text-gray-600 text-sm flex items-center">
                            &#9201; <?php echo ($lesson_1_duration); ?>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 border border-grey-70 rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium"><?php echo ($lesson_2_title); ?></p>
                            <p class="text-sm text-gray-500"><?php echo ($lesson_2_subtitle); ?></p>
                        </div>
                        <div class="text-gray-600 text-sm flex items-center">
                            &#9201; <?php echo ($lesson_2_duration); ?>
                        </div>
                    </div>

                    <div class="flex justify-between items-center p-4 border border-grey-70 rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium"><?php echo ($lesson_3_title); ?></p>
                            <p class="text-sm text-gray-500"><?php echo ($lesson_3_subtitle); ?></p>
                        </div>
                        <div class="text-gray-600 text-sm flex items-center">
                            &#9201; <?php echo ($lesson_3_duration); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
        </div>

    </div>
    <?php  ?>
</div>

<?php get_footer(); ?>