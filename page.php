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

<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div
        class="flex flex-col lg:flex-row justify-between items-start lg:items-center p-6 space-y-6 lg:space-y-0 lg:space-x-6">
        <div>
            <h2 class="text-2xl font-bold mb-2">Web Design Fundamentals</h2>
            <p class="text-gray-600 mb-4">Learn the fundamentals of web design, including HTML, CSS, and responsive
                design principles. Develop the skills to create visually appealing and user-friendly websites.</p>
        </div>
        <div class="flex justify-center lg:justify-end w-full lg:w-auto">
            <button class="bg-blue-500 text-white px-4 py-2 rounded w-32 border-white-90 border bg-white-97">View
                Course</button>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 px-6">
        <img src="<?php echo get_template_directory_uri() ?> ./images/painting.png" alt="Course Image 1"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/painting-two.png" alt="Course Image 2"
            class="w-full rounded-lg">
        <img src="<?php echo get_template_directory_uri() ?> ./images/painting-three.png" alt="Course Image 3"
            class="w-full rounded-lg">
    </div>

    <div class="flex justify-between">
        <div class=" items-center px-6 py-4  mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">4 Weeks</span>
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">Beginner</span>

        </div>
        <div class="px-6 py-4 flex items-center mt-4">
            <span class="text-sm px-2 py-2 text-gray-500 border border-white-90 rounded-lg">By John Smith</span>
        </div>
    </div>

    <div class="p-6 border border-white-90 rounded-lg m-8">
        <h3 class="text-xl font-semibold mb-4">Curriculum</h3>
        <hr class="w-[1216px] -ml-6 mb-[15px] text-white-90">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">01</h4>
                <p class="text-sm text-gray-500">Introduction to HTML</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">02</h4>
                <p class="text-sm text-gray-500">Styling with CSS</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">03</h4>
                <p class="text-sm text-gray-500">Introduction to Responsive Design</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">04</h4>
                <p class="text-sm text-gray-500">Design Principles for Web</p>
            </div>
            <div class="text-center border-r border-white-90 p-4">
                <h4 class="text-lg font-bold">05</h4>
                <p class="text-sm text-gray-500">Building a Basic Website</p>
            </div>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg mt-28 overflow-hidden">
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
</div>
<?php
echo get_footer();
?>