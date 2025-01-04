<?php
echo get_header()

?>
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-6 lg:space-y-0 lg:space-x-6">
        <div class="lg:w-1/2">
            <h1 class="text-3xl font-bold text-gray-900">
                Online Courses on Design and Development
            </h1>
        </div>
        <div class="lg:w-1/2">
            <p class="text-gray-600">
                Welcome to our online course page, where you can enhance your skills in design and development. Choose from our carefully curated selection of 10 courses designed to provide you with comprehensive knowledge and practical experience. Explore the courses below and find the perfect fit for your learning journey.
            </p>
        </div>
    </div>
</div>

<?php
// Fetch posts from 'coursecraft' post type
$coursecraft_posts = get_posts(array(
    'post_type' => 'coursecraft',
    'posts_per_page' => -1, // Show all posts
    'orderby' => 'menu_order', // Sort by the order you set
    'order' => 'ASC' // Ascending order (small to large)
   
));

foreach ($coursecraft_posts as $course_post) {
    // Get custom fields
    $course_title = get_post_meta($course_post->ID, 'course_title', true);
    $course_description = get_post_meta($course_post->ID, 'course_description', true);
    $course_duration = get_post_meta($course_post->ID, 'course_duration', true);
    $difficulty_level = get_post_meta($course_post->ID, 'difficulty_level', true);
    $author_name = get_post_meta($course_post->ID, 'author_name', true);

    // Get image IDs
    $image_one_id = get_post_meta($course_post->ID, 'image_one', true);
    $image_two_id = get_post_meta($course_post->ID, 'image_two', true);
    $image_three_id = get_post_meta($course_post->ID, 'image_three', true);

    // Get image URLs
    $image_one = wp_get_attachment_url($image_one_id);
    $image_two = wp_get_attachment_url($image_two_id);
    $image_three = wp_get_attachment_url($image_three_id);

    // Modules
    $module_1_title = get_post_meta($course_post->ID, 'module_1_title', true);
    $module_2_title = get_post_meta($course_post->ID, 'module_2_title', true);
    $module_3_title = get_post_meta($course_post->ID, 'module_3_title', true);
    $module_4_title = get_post_meta($course_post->ID, 'module_4_title', true);
    $module_5_title = get_post_meta($course_post->ID, 'module_5_title', true);

    // Subtitles
    $sub_title_1 = get_post_meta($course_post->ID, 'sub_title_1', true);
    $sub_title_2 = get_post_meta($course_post->ID, 'sub_title_2', true);
    $sub_title_3 = get_post_meta($course_post->ID, 'sub_title_3', true);
    $sub_title_4 = get_post_meta($course_post->ID, 'sub_title_4', true);
    $sub_title_5 = get_post_meta($course_post->ID, 'sub_title_5', true);
?>

    <div class="max-w-7xl mx-auto bg-white shadow-md mb-10 rounded-lg overflow-hidden">
        <!-- Course Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center p-6 space-y-6 lg:space-y-0 lg:space-x-6">
            <div>
                <h2 class="text-2xl font-bold mb-2"><?php echo esc_html($course_title); ?></h2>
                <p class="text-gray-600 mb-4"><?php echo esc_html($course_description); ?></p>
            </div>
            <div class="flex justify-center lg:justify-end w-full lg:w-auto">
                <button class="bg-blue-500 text-white px-4 py-2 rounded w-32 border-white-90 border bg-white-97">View Course</button>
            </div>
        </div>

        <!-- Images Section -->
        <div class="grid grid-cols-3 gap-4 px-6">
            <img src="<?php echo esc_url($image_one); ?>" alt="Course Image 1" class="w-full rounded-lg">
            <img src="<?php echo esc_url($image_two); ?>" alt="Course Image 2" class="w-full rounded-lg">
            <img src="<?php echo esc_url($image_three); ?>" alt="Course Image 3" class="w-full rounded-lg">
        </div>

        <!-- Course Info (Duration, Difficulty, Author) -->
        <div class="flex justify-between">
            <div class="items-center px-6 py-4 mt-4">
                <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg"><?php echo esc_html($course_duration); ?></span>
                <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg"><?php echo esc_html($difficulty_level); ?></span>
            </div>
            <div class="px-6 py-4 flex items-center mt-4">
                <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">By <?php echo esc_html($author_name); ?></span>
            </div>
        </div>

        <!-- Curriculum Section -->
        <div class="p-6 border border-white-90 rounded-lg m-8">
            <h3 class="text-xl font-semibold mb-4">Curriculum</h3>
            <hr class="w-[1216px] -ml-6 mb-[15px] text-white-90">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="text-left border-r border-white-90 p-4">
                    <p class="text-4xl font-bold text-gray-500"><?php echo esc_html($module_1_title); ?></p>
                    <p class="text-sm text-gray-500"><?php echo esc_html($sub_title_1); ?></p>
                </div>
                <div class="text-left border-r border-white-90 p-4">
                    <p class="text-4xl font-bold text-gray-500"><?php echo esc_html($module_2_title); ?></p>
                    <p class="text-sm text-gray-500"><?php echo esc_html($sub_title_2); ?></p>
                </div>
                <div class="text-left border-r border-white-90 p-4">
                    <p class="text-4xl font-bold text-gray-500"><?php echo esc_html($module_3_title); ?></p>
                    <p class="text-sm text-gray-500"><?php echo esc_html($sub_title_3); ?></p>
                </div>
                <div class="text-left border-r border-white-90 p-4">
                    <p class="text-4xl font-bold text-gray-500"><?php echo esc_html($module_4_title); ?></p>
                    <p class="text-sm text-gray-500"><?php echo esc_html($sub_title_4); ?></p>
                </div>
                <div class="text-left border-r border-white-90 p-4">
                    <p class="text-4xl font-bold text-gray-500"><?php echo esc_html($module_5_title); ?></p>
                    <p class="text-sm text-gray-500"><?php echo esc_html($sub_title_5); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>


<!-- <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg mt-28 overflow-hidden">
    <div
        class="flex flex-col lg:flex-row justify-between items-start lg:items-center p-6 space-y-6 lg:space-y-0 lg:space-x-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">UI/UX Design</h2>
            <p class="text-gray-600 mb-4">Master the art of creating intuitive user interfaces (UI) and enhancing user
                experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.
            </p>
        </div>
        <div class="flex justify-center lg:justify-end w-full lg:w-auto">
            <button class="bg-blue-500 text-white px-4 py-2 rounded w-32 border-white-90 border bg-white-97">View
                Course</button>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 px-6">
        <img src="<?php echo get_template_directory_uri() ?> ./images/ui-one.png" alt="Course Image 1"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/ui-two.png" alt="Course Image 2"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/ui-three.png" alt="Course Image 3"
            class="w-full rounded-lg">
    </div>

    <div class="flex justify-between">
        <div class=" items-center px-6 py-4  mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">6 Weeks</span>
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">Intermidiate</span>

        </div>
        <div class="px-6 py-4 flex items-center mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">By Emily Johnson</span>
        </div>
    </div>

    <div class="p-6 border border-white-90 rounded-lg m-8">
        <h3 class="text-xl font-semibold mb-4">Curriculum</h3>
        <hr class="w-[1216px] -ml-6 mb-[15px] text-white-90">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">01</h4>
                <p class="text-sm text-gray-500">Introduction to UI/UX Design</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">02</h4>
                <p class="text-sm text-gray-500">User Research and Personas</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">03</h4>
                <p class="text-sm text-gray-500">Wireframing and Prototyping</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">04</h4>
                <p class="text-sm text-gray-500">Visual Design and Branding</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">05</h4>
                <p class="text-sm text-gray-500">Usability Testing and Iteration</p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg mt-28 overflow-hidden">
    <div
        class="flex flex-col lg:flex-row justify-between items-start lg:items-center p-6 space-y-6 lg:space-y-0 lg:space-x-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">Mobile App Development</h2>
            <p class="text-gray-600 mb-4">Dive into the world of mobile app development. Learn to build native iOS and
                Android applications using industry-leading frameworks like Swift and Kotlin.</p>
        </div>
        <div class="flex justify-center lg:justify-end w-full lg:w-auto">
            <button class="bg-blue-500 text-white px-4 py-2 rounded w-32 border-white-90 border bg-white-97">View
                Course</button>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 px-6">
        <img src="<?php echo get_template_directory_uri() ?> ./images/mobile-one.png" alt="Course Image 1"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/mobile-two.png" alt="Course Image 2"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/mobile-three.png" alt="Course Image 3"
            class="w-full rounded-lg">
    </div>

    <div class="flex justify-between">
        <div class=" items-center px-6 py-4  mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">8 Weeks</span>
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">Intermidiate</span>

        </div>
        <div class="px-6 py-4 flex items-center mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">By David Brown</span>
        </div>
    </div>

    <div class="p-6 border border-white-90 rounded-lg m-8">
        <h3 class="text-xl font-semibold mb-4">Curriculum</h3>
        <hr class="w-[1216px] -ml-6 mb-[15px] text-white-90">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">01</h4>
                <p class="text-sm text-gray-500">Introduction to Mobile App Development</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">02</h4>
                <p class="text-sm text-gray-500">Fundamentals of Swift Programming (iOS)</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">03</h4>
                <p class="text-sm text-gray-500">Fundamentals of Kotlin Programming (Android)</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">04</h4>
                <p class="text-sm text-gray-500">Building User Interfaces</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">05</h4>
                <p class="text-sm text-gray-500">App Deployment and Testing</p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg mt-28 overflow-hidden">
    <div
        class="flex flex-col lg:flex-row justify-between items-start lg:items-center p-6 space-y-6 lg:space-y-0 lg:space-x-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">Graphic Design for Beginners</h2>
            <p class="text-gray-600 mb-4">Discover the fundamentals of graphic design, including typography, color
                theory, layout design, and image manipulation techniques. Create visually stunning designs for print and
                digital media.</p>
        </div>
        <div class="flex justify-center lg:justify-end w-full lg:w-auto">
            <button class="bg-blue-500 text-white px-4 py-2 rounded w-32 border-white-90 border bg-white-97">View
                Course</button>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 px-6">
        <img src="<?php echo get_template_directory_uri() ?> ./images/graphic-one.png" alt="Course Image 1"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/graphic-two.png" alt="Course Image 2"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/graphic-three.png" alt="Course Image 3"
            class="w-full rounded-lg">
    </div>

    <div class="flex justify-between">
        <div class=" items-center px-6 py-4  mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">10 Weeks</span>
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">Beginner</span>

        </div>
        <div class="px-6 py-4 flex items-center mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">By Sarah Thompson</span>
        </div>
    </div>

    <div class="p-6 border border-white-90 rounded-lg m-8">
        <h3 class="text-xl font-semibold mb-4">Curriculum</h3>
        <hr class="w-[1216px] -ml-6 mb-[15px] text-white-90">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">01</h4>
                <p class="text-sm text-gray-500">Introduction to Graphic Design</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">02</h4>
                <p class="text-sm text-gray-500">Typography and Color Theory</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">03</h4>
                <p class="text-sm text-gray-500">Layout Design and Composition</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">04</h4>
                <p class="text-sm text-gray-500">Image Editing and Manipulation</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">05</h4>
                <p class="text-sm text-gray-500">Designing for Print and Digital Media</p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg mt-28 overflow-hidden">
    <div
        class="flex flex-col lg:flex-row justify-between items-start lg:items-center p-6 space-y-6 lg:space-y-0 lg:space-x-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">Front-End Web Development</h2>
            <p class="text-gray-600 mb-4">Become proficient in front-end web development. Learn HTML, CSS, JavaScript,
                and popular frameworks like Bootstrap and React. Build interactive and responsive websites.</p>
        </div>
        <div class="flex justify-center lg:justify-end w-full lg:w-auto">
            <button class="bg-blue-500 text-white px-4 py-2 rounded w-32 border-white-90 border bg-white-97">View
                Course</button>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 px-6">
        <img src="<?php echo get_template_directory_uri() ?> ./images/front-end-one.png" alt="Course Image 1"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/front-end-two.png" alt="Course Image 2"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/front-end-three.png" alt="Course Image 3"
            class="w-full rounded-lg">
    </div>

    <div class="flex justify-between">
        <div class=" items-center px-6 py-4  mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">10 Weeks</span>
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">Intermidiate</span>

        </div>
        <div class="px-6 py-4 flex items-center mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">By Michael Adams</span>
        </div>
    </div>

    <div class="p-6 border border-white-90 rounded-lg m-8">
        <h3 class="text-xl font-semibold mb-4">Curriculum</h3>
        <hr class="w-[1216px] -ml-6 mb-[15px] text-white-90">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">01</h4>
                <p class="text-sm text-gray-500">HTML Fundamentals</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">02</h4>
                <p class="text-sm text-gray-500">CSS Styling and Layouts</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">03</h4>
                <p class="text-sm text-gray-500">JavaScript Basics</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">04</h4>
                <p class="text-sm text-gray-500">Building Responsive Websites</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">05</h4>
                <p class="text-sm text-gray-500">Introduction to Bootstrap and React</p>
            </div>
        </div>
    </div>
</div> -->
<?php
echo get_footer();
?>