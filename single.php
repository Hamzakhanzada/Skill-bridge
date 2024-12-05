<?php get_header(); ?>

<div class="single-course-content max-w-4xl mx-auto py-8 px-4">
    <!-- Course Title -->
    <h1 class="text-3xl font-bold text-center mb-6"><?php the_title(); ?></h1>

    <!-- Course Thumbnail -->
    <div class="course-thumbnail mb-6 text-center">
        <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="w-full rounded-lg shadow-lg">
        <?php } ?>
    </div>

    <!-- Course Content (Main Description) -->
    <div class="course-content text-gray-700 mb-6">
        <?php the_content(); ?>
    </div>

    <!-- Course Excerpt (To Avoid Repetition) -->
    <div class="course-excerpt text-gray-600 mb-6">
        <h3 class="text-xl font-semibold mb-4">Course Overview</h3>
        <p><?php echo get_the_excerpt(); ?></p>
    </div>

    <!-- Course Tags (Meta Information) -->
    <div class="course-meta mt-8">
        <h4 class="text-lg font-semibold mb-2">Tags:</h4>
        <div class="flex gap-2 flex-wrap">
            <?php
            $terms = get_the_terms(get_the_ID(), 'courses_tags');
            if ($terms) {
                foreach ($terms as $term) {
                    echo '<span class="bg-gray-200 text-gray-800 rounded-full py-1 px-3">' . $term->name . '</span>';
                }
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
