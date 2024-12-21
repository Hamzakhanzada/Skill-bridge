<?php echo get_header()?>

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
            <div class="bg-white p-6 shadow rounded-lg">
                <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">01</h2>
                <h3 class="text-lg font-semibold text-gray-700 mb-6">Introduction to UI/UX Design</h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 border border-grey-70  rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium">Understanding UI/UX Design Principles</p>
                            <p class="text-sm text-gray-500">Lesson 01</p>
                        </div>
                        <div class="text-gray-600 text-sm flex items-center">
                            &#9201; 45 Minutes
                        </div>
                    </div>

                    <div
                        class="flex justify-between items-center p-4 border  border-orange-50 shadow shadow-orange-50/40  rounded-lg ">
                        <div>
                            <p class="text-gray-700 font-medium">Importance of User-Centered Design</p>
                            <p class="text-sm text-gray-500">Lesson 02</p>
                        </div>
                        <div class="border border-yellow-300 text-yellow-800 px-3 py-1 text-sm rounded">
                            1 Hour
                        </div>
                    </div>

                    <div class="flex justify-between items-center p-4 border border-grey-70 rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium">The Role of UI/UX Design in Product Development</p>
                            <p class="text-sm text-gray-500">Lesson 03</p>
                        </div>
                        <div class="text-gray-600 text-sm flex items-center">
                            &#9201; 45 Minutes
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 shadow rounded-lg">
                <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">02</h2>
                <h3 class="text-lg font-semibold text-gray-700 mb-6">User Research and Analysis</h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 border border-grey-70  rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium">Conducting User Research and Interviews</p>
                            <p class="text-sm text-gray-500">Lesson 01</p>
                        </div>
                        <div class="bg-yellow-200 text-yellow-800 px-3 py-1 text-sm rounded">
                            1 Hour
                        </div>
                    </div>

                    <div class="flex justify-between items-center p-4 border border-grey-70  rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium">Analyzing User Needs and Behavior</p>
                            <p class="text-sm text-gray-500">Lesson 02</p>
                        </div>
                        <div class="bg-yellow-200 text-yellow-800 px-3 py-1 text-sm rounded">
                            1 Hour
                        </div>
                    </div>

                    <div class="flex justify-between items-center p-4 border border-grey-70  rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium">Creating User Personas and Scenarios</p>
                            <p class="text-sm text-gray-500">Lesson 03</p>
                        </div>
                        <div class="text-gray-600 text-sm flex items-center">
                            &#9201; 45 Minutes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  ?>
</div>

<?php get_footer(); ?>