<?php
//Template Name:About-Us

get_header();

?>

<div class="max-w-7xl mx-auto px-4 py-8">
    <div
        class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-6 lg:space-y-0 lg:space-x-6">
        <div class="lg:w-1/2">
            <h1 class="text-3xl font-bold text-gray-900">
            About Skillbridge
            </h1>
        </div>
        <div class="lg:w-1/2">
            <p class="text-gray-600">
            Welcome to our platform, where we are passionate about empowering individuals to master the world of design and development. We offer a wide range of online courses designed to equip learners with the skills and knowledge needed to succeed in the ever-evolving digital landscape.
            </p>
        </div>
    </div>
</div>
<hr class="text-white-90">
<section class="max-w-7xl mx-auto mt-24 px-4 py-12 ">
    <?php
    // Fetch posts from 'achievement' post type
    $achievement_posts = get_posts(array(
        'post_type' => 'achievement',
        'posts_per_page' => -1, // Show a single post (adjust as needed)
        'orderby' => 'menu_order',
        'order' => 'ASC',
    ));

    foreach ($achievement_posts as $achievement_post) {
        // Get custom fields
        $section_title = get_post_meta($achievement_post->ID, 'section_title', true);
        $section_description = get_post_meta($achievement_post->ID, 'section_description', true);

        // Achievement 1
        $achievement_1_icon_id = get_post_meta($achievement_post->ID, 'achievement_1_icon', true);
        $achievement_1_icon_url = wp_get_attachment_url($achievement_1_icon_id); // Get the URL for the icon image
        $achievement_1_title = get_post_meta($achievement_post->ID, 'achievement_1_title', true);
        $achievement_1_description = get_post_meta($achievement_post->ID, 'achievement_1_description', true);

        // Achievement 2
        $achievement_2_icon_id = get_post_meta($achievement_post->ID, 'achievement_2_icon', true);
        $achievement_2_icon_url = wp_get_attachment_url($achievement_2_icon_id); // Get the URL for the icon image
        $achievement_2_title = get_post_meta($achievement_post->ID, 'achievement_2_title', true);
        $achievement_2_description = get_post_meta($achievement_post->ID, 'achievement_2_description', true);

        // Achievement 3
        $achievement_3_icon_id = get_post_meta($achievement_post->ID, 'achievement_3_icon', true);
        $achievement_3_icon_url = wp_get_attachment_url($achievement_3_icon_id); // Get the URL for the icon image
        $achievement_3_title = get_post_meta($achievement_post->ID, 'achievement_3_title', true);
        $achievement_3_description = get_post_meta($achievement_post->ID, 'achievement_3_description', true);

        // Achievement 4
        $achievement_4_icon_id = get_post_meta($achievement_post->ID, 'achievement_4_icon', true);
        $achievement_4_icon_url = wp_get_attachment_url($achievement_4_icon_id); // Get the URL for the icon image
        $achievement_4_title = get_post_meta($achievement_post->ID, 'achievement_4_title', true);
        $achievement_4_description = get_post_meta($achievement_post->ID, 'achievement_4_description', true);
    ?>
        <!-- Section Title and Description -->
        <h2 class="text-3xl font-bold text-gray-800 mb-4"><?php echo esc_html($section_title); ?></h2>
        <p class="text-gray-600 mb-10"><?php echo esc_html($section_description); ?></p>

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mb-20">
            <!-- Achievement 1 -->
            <div class="flex flex-col items-start p-12 shadow-lg rounded-lg bg-white-99">
                <div class="text-3xl mb-4">
                    <img src="<?php echo esc_url($achievement_1_icon_url); ?>" alt="Achievement 1 Icon" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo esc_html($achievement_1_title); ?></h3>
                <p class="text-gray-600"><?php echo esc_html($achievement_1_description); ?></p>
            </div>

            <!-- Achievement 2 -->
            <div class="flex flex-col items-start p-12 shadow-lg rounded-lg bg-white-99">
                <div class="text-3xl mb-4">
                    <img src="<?php echo esc_url($achievement_2_icon_url); ?>" alt="Achievement 2 Icon" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo esc_html($achievement_2_title); ?></h3>
                <p class="text-gray-600"><?php echo esc_html($achievement_2_description); ?></p>
            </div>

            <!-- Achievement 3 -->
            <div class="flex flex-col items-start p-12 shadow-lg rounded-lg bg-white-99">
                <div class="text-3xl mb-4">
                    <img src="<?php echo esc_url($achievement_3_icon_url); ?>" alt="Achievement 3 Icon" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo esc_html($achievement_3_title); ?></h3>
                <p class="text-gray-600"><?php echo esc_html($achievement_3_description); ?></p>
            </div>

            <!-- Achievement 4 -->
            <div class="flex flex-col items-start p-12 shadow-lg rounded-lg bg-white-99">
                <div class="text-3xl mb-4">
                    <img src="<?php echo esc_url($achievement_4_icon_url); ?>" alt="Achievement 4 Icon" class="w-12 h-12">
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo esc_html($achievement_4_title); ?></h3>
                <p class="text-gray-600"><?php echo esc_html($achievement_4_description); ?></p>
            </div>
        </div>
    <?php
    }
    ?>
</section>

    
    


    <div class="container margin-top2 design-section p-[80px] mx-auto bg-white-99 rounded relative">
  <div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 md:col-span-8">
      <h2 class="text-4xl font-bold">
        <span class="text-orange-50 font-medium">Together</span>, let's shape the future of digital innovation
      </h2>
      <p class="shape-paragraph">
        Join us on this exciting learning journey and unlock your potential in design and development.
      </p>
    </div>
    <div class="col-span-12 md:col-span-4 flex justify-end items-center">
      <button class="bg-orange-50 flex py-[18px] px-[24px] justify-center items-center gap-2 rounded-lg" type="submit">
        Join Now
      </button>
    </div>
  </div>

  <!-- Decorative Shape -->
  <div class="shape absolute right-[140px] top-0 hidden sm:block">
    <img class="shape-img" src="<?php echo get_template_directory_uri() ?> ./images/shape.png" alt="shape-icon" height="361.563px" width="361.563px">
  </div>
</div>




<?php
get_footer()

?>