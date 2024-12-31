<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Tailwind CSS Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                colors: {
                    absolute: {
                        white: '#FFF',
                        black: '#000',
                    },
                    orange: {
                        50: '#FF9500',
                        70: '#FFBF66',
                        75: '#FFCA80',
                        80: '#FFD499',
                        90: '#FFEACC',
                        95: '#FFF4E5',
                        97: '#FFF9F0',
                        99: '#FFFDFA',
                    },

                    white: {
                        90: '#E4E4E7',
                        95: '#F1F1F3',
                        97: '#F7F7F8',
                        99: '#FCFCFD',

                    },
                    grey: {
                        10: '#191919',
                        15: '#262626',
                        20: '#333333',
                        30: '#4C4C4D',
                        35: '#59595A',
                        40: '#656567',
                        60: '#98989A',
                        70: '#B3B3B3'
                    }

                }
            }
        }
    </script>

</head>

<body class="bg-white-97 ">




    <?php get_header(); ?>


    <div class="w-full sm:w-3/4 md:w-1/2 mx-auto mt-24">
        <img src="<?php echo get_template_directory_uri(); ?>./images/abstract.png" alt="Abstract line"
            class="relative top-[17px] right-[28px] w-auto">
        <div class="flex p-3 md:p-4 justify-center items-center gap-2 rounded-lg  border-white bg-white-99">
            <img src="<?php echo get_template_directory_uri(); ?>./images/icon.svg" alt="icon container"
                class="w-12 h-12 flex p-3 justify-center items-center gap-2 rounded-md bg-orange-95">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-[150%]">
                <span class="text-orange-50 text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold">Unlock</span>
                <span class="block sm:inline text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold"> Your Creative
                    Potential</span>
            </h1>
        </div>
    </div>


    <div class="text-center mt-6">
        <h2 class="text-grey-15 text-center  text-[28px] font-medium leading-[150%] md:text-[32px] ">
            with Online Design and Development Courses.
        </h2>
        <p
            class="text-center mt-4 font-normal leading-[150%] text-[#262626] text-sm sm:text-base md:text-lg lg:text-xl">
            Learn from Industry Experts and Enhance Your Skills.</p>
    </div>

    <div class="text-center mt-16 space-x-4">
        <button
            class="  items-center gap-2 px-4 py-2 sm:px-5 sm:py-3 rounded-md bg-orange-50 text-center text-[14px] sm:text-[16px] md:text-[18px] font-semibold leading-[21px] text-white-99">Explore
            Courses</button>
        <button
            class=" items-center gap-2 px-4 py-2 sm:px-5 sm:py-3 rounded-md border border-white-95 bg-white-99 text-center text-[14px] sm:text-[16px] md:text-[18px] font-medium leading-[21px] text-[#262626] ">View
            Pricing</button>
    </div>
    <div class="container mx-auto ">
        <section class="bg-white-99 mt-5">
            <div class="p-3 mt-[100px]">
                <ul class="flex  flex-wrap justify-around items-center m-0 space-x-4">

                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/zapier.svg" class="w-24 h-auto"
                            alt="zapier">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/spotify.svg" class="w-24 h-auto"
                            alt="spotify">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/zoom.svg" class="w-24 h-auto"
                            alt="zoom">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/amazon.svg" class="w-24 h-auto"
                            alt="amazon">
                    </li>
                    <li>
                        <img src=" <?php echo get_template_directory_uri(); ?> ./images/adobe.svg" class="w-24 h-auto"
                            alt="adobe">
                    </li>
                    <li>
                        <img src=" <?php echo get_template_directory_uri(); ?> ./images/notion.svg" class="w-24 h-auto"
                            alt="notion">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?> ./images/netflix.svg" class="w-24 h-auto"
                            alt="netflix">
                    </li>
                </ul>
            </div>
        </section>
    </div>


    <section class="py-12">
        <div class="container mx-auto px-4">
            <img src="<?php echo get_template_directory_uri() ?>./images/video-img.png" alt="Course preview"
                class="w-full rounded-lg ">
        </div>
    </section>

    <div class="container mx-auto px-4 mt-[100px] flex flex-col md:flex-row justify-between">
        <div class="w-full md:w-3/4 mb-4 md:mb-0">
            <h3 class="text-[#262626]  text-[38px] font-semibold leading-[150%]">Benefits</h3>
            <h6
                class="text-[#59595A] font-be-vietnam-pro text-[16px] md:text-[18px] lg:text-[20px] font-normal leading-[150%]">
                Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit
                dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.
            </h6>
        </div>
        <div class="flex pt-[14px] pb-[14px] pl-[20px] pr-[20px] justify-center items-center gap-2">
            <button type="button"
                class="rounded-[6px] pt-[14px] pb-[14px] pl-[20px] pr-[20px]  border border-white-95 bg-white-99 text-grey-15 text-center font-be-vietnam-pro text-[14px] md:text-[16px] lg:text-[18px] font-medium leading-[150%]">View
                All</button>
        </div>

    </div>
    <div class="container mx-auto px-4  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-[60px]">
        <!-- <div class="col">
            <div
                class="flex flex-col items-end gap-[20px] md:gap-[40px] p-[20px] md:p-[40px] flex-1 rounded-[10px] bg-white-99">
                <div class="p-5 card-height">
                    <div class="bg-white text-right rounded-3">
                        <h1 class="text-[#262626] text-right font-be-vietnam-pro text-[60px] font-bold leading-[24px]">
                            01</h1>
                    </div>
                    <div class="my-5">
                        <h5
                            class="text-grey-20 font-be-vietnam-pro text-[20px] md:text-[22px]  font-semibold leading-[150%] tracking[-0.12px] mt-[40px]">
                            Flexible Learning Schedule</h5>
                        <p class=" text-[16px] font-normal leading-[150%]  mt-[10px]  ">
                            Fit your coursework around your existing commitments and obligations. </p>
                    </div>
                    <div class="flex justify-end mt-[54px]">
                        <img src="<?php echo get_template_directory_uri() ?>  ./images/up-arrow.svg"
                            class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                            alt="arrowbutton">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div
                class="flex flex-col items-end gap-[20px] md:gap-[40px] p-[20px] md:p-[40px] flex-1 rounded-[10px] bg-white-99">
                <div class="p-5 card-height">
                    <div class="bg-white text-right rounded-3">
                        <h1 class="text-[#262626] text-right font-be-vietnam-pro text-[60px] font-bold leading-[24px]">
                            02</h1>
                    </div>
                    <div class="my-5">
                        <h5
                            class="text-grey-20 font-be-vietnam-pro text-[20px] md:text-[22px]  font-semibold leading-[150%] tracking[-0.12px] mt-[40px]">
                            Expert Instruction</h5>
                        <p class=" text-[16px] font-normal leading-[150%]  mt-[10px]  ">
                            Learn from industry experts who have hands-on experience in design and development. </p>
                    </div>
                    <div class="flex justify-end mt-[54px]">
                        <img src="<?php echo get_template_directory_uri() ?>  ./images/up-arrow.svg"
                            class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                            alt="arrowbutton">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div
                class="flex flex-col items-end gap-[20px] md:gap-[40px] p-[20px] md:p-[40px] flex-1 rounded-[10px] bg-white-99">
                <div class="p-5 card-height">
                    <div class="bg-white text-right rounded-3">
                        <h1 class="text-[#262626] text-right font-be-vietnam-pro text-[60px] font-bold leading-[24px]">
                            03</h1>
                    </div>
                    <div class="my-5">
                        <h5
                            class="text-grey-20 font-be-vietnam-pro text-[20px] md:text-[22px]  font-semibold leading-[150%] tracking[-0.12px] mt-[40px]">
                            Diverse Course Offerings</h5>
                        <p class=" text-[16px] font-normal leading-[150%]  mt-[10px]  ">
                            Explore a wide range of design and development courses covering various topics. </p>
                    </div>
                    <div class="flex justify-end mt-[54px]">
                        <img src="<?php echo get_template_directory_uri() ?>  ./images/up-arrow.svg"
                            class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                            alt="arrowbutton">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div
                class="flex flex-col items-end gap-[20px] md:gap-[40px] p-[20px] md:p-[40px] flex-1 rounded-[10px] bg-white-99">
                <div class="p-5 card-height">
                    <div class="bg-white text-right rounded-3">
                        <h1 class="text-[#262626] text-right font-be-vietnam-pro text-[60px] font-bold leading-[24px]">
                            04</h1>
                    </div>
                    <div class="my-5">
                        <h5
                            class="text-grey-20 font-be-vietnam-pro text-[20px] md:text-[22px]  font-semibold leading-[150%] tracking[-0.12px] mt-[40px]">
                            Updated Curriculum</h5>
                        <p class=" text-[16px] font-normal leading-[150%]  mt-[10px]  ">
                            Access courses with up-to-date content reflecting the latest trends and industry practices.
                        </p>
                    </div>
                    <div class="flex justify-end mt-[54px]">
                        <img src="<?php echo get_template_directory_uri() ?>  ./images/up-arrow.svg"
                            class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                            alt="arrowbutton">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div
                class="flex flex-col items-end gap-[20px] md:gap-[40px] p-[20px] md:p-[40px] flex-1 rounded-[10px] bg-white-99">
                <div class="p-5 card-height">
                    <div class="bg-white text-right rounded-3">
                        <h1 class="text-[#262626] text-right font-be-vietnam-pro text-[60px] font-bold leading-[24px]">
                            05</h1>
                    </div>
                    <div class="my-5">
                        <h5
                            class="text-grey-20 font-be-vietnam-pro text-[20px] md:text-[22px]  font-semibold leading-[150%] tracking[-0.12px] mt-[40px]">
                            Practical Projects and Assignments</h5>
                        <p class=" text-[16px] font-normal leading-[150%]  mt-[10px]  ">
                            Develop a portfolio showcasing your skills and abilities to potential employers. </p>
                    </div>
                    <div class="flex justify-end mt-[54px]">
                        <img src="<?php echo get_template_directory_uri() ?>  ./images/up-arrow.svg"
                            class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                            alt="arrowbutton">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div
                class="flex flex-col items-end gap-[20px] md:gap-[40px] p-[20px] md:p-[40px] flex-1 rounded-[10px] bg-white-99">
                <div class="p-5 card-height">
                    <div class="bg-white text-right rounded-3">
                        <h1 class="text-[#262626] text-right font-be-vietnam-pro text-[60px] font-bold leading-[24px]">
                            06</h1>
                    </div>
                    <div class="my-5">
                        <h5
                            class="text-grey-20 font-be-vietnam-pro text-[20px] md:text-[22px]  font-semibold leading-[150%] tracking[-0.12px] mt-[40px]">
                            Interactive Learning Environment</h5>
                        <p class=" text-[16px] font-normal leading-[150%]  mt-[10px]  ">
                            Collaborate with fellow learners, exchanging ideas and feedback to enhance your
                            understanding. </p>
                    </div>
                    <div class="flex justify-end mt-[54px]">
                        <img src="<?php echo get_template_directory_uri() ?>  ./images/up-arrow.svg"
                            class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                            alt="arrowbutton">
                    </div>
                </div>
            </div>
        </div> -->
        <?php
        $benefits = get_posts(array(
            'post_type' => 'benefit', 
            'posts_per_page' => -1    
        ));
        foreach ($benefits as $post) {
            $card_number = get_post_meta($post->ID, 'card_number', true);
            $card_title = get_post_meta($post->ID, 'card_title', true);
            $card_description = get_post_meta($post->ID, 'card_description', true);
        ?>
            <div class="card bg-white shadow-lg rounded-lg p-6 mb-8">
                <span class="card-number text-3xl font-semibold flex justify-end"><?php echo $card_number; ?></span>
                <h3 class="card-title text-2xl font-bold  mb-2"><?php echo $card_title; ?></h3>
                <p class="card-description text-gray-700  mb-4"><?php echo $card_description; ?></p>
                <div class="flex justify-end mt-[54px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/up-arrow.svg"
                        class="flex p-[10px] md:p-[14px] justify-center items-center gap-2 rounded-[6px] border border-white-95 bg-white-99"
                        alt="arrowbutton">
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="container mx-auto px-4 mt-[100px] flex flex-col md:flex-row justify-between">
        <div class="w-full md:w-3/4 mb-4 md:mb-0">
            <h3 class="text-[#262626]  text-[38px] font-semibold leading-[150%]">Our Courses</h3>
            <h6
                class="text-[#59595A] font-be-vietnam-pro text-[16px] md:text-[18px] lg:text-[20px] font-normal leading-[150%]">
                Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit
                dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.
            </h6>
        </div>
        <div class="flex pt-[14px] pb-[14px] pl-[20px] pr-[20px] justify-center items-center gap-2">
            <button type="button"
                class="rounded-[6px] pt-[14px] pb-[14px] pl-[20px] pr-[20px]  border border-white-95 bg-white-99 text-grey-15 text-center font-be-vietnam-pro text-[14px] md:text-[16px] lg:text-[18px] font-medium leading-[150%]">View
                All</button>
        </div>
    </div>
    <div class="mt-4 container mx-auto px-4 grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- <div class="col">
            <div class="flex flex-col justify-between items-start flex-1  rounded-lg border-grey-70 bg-white-99 p-10">
                <img src="<?php echo get_template_directory_uri() ?> ./images/draw.png" class="w-full rounded-t-lg"
                    alt="webdevImage">
                <div class="p-0">
                    <div class="flex flex-col md:flex-row justify-between my-4">
                        <div class="mb-4">
                            <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">4
                                Weeks</span>
                            <span
                                class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">Beginner</span>
                        </div>
                        <div>
                            <span class="text-base font-medium leading-normal">By John Smith</span>
                        </div>
                    </div>
                    <h5 class="text-[20px] font-semibold leading-[150%] text-grey-10">Web Design Fundamentals</h5>
                    <p class="text-[16px] font-normal leading-[150%] text-grey-30 mt-[10px]">Learn the fundamentals of
                        web design, including HTML, CSS, and responsive design
                        principles. Develop the skills to create visually appealing and user-friendly websites.</p>
                    <div class="mt-4">
                        <button
                            class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-white-97 w-full"
                            type="button">Get it Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flex flex-col justify-between items-start flex-1  rounded-lg border-grey-70 bg-white-99 p-10">
                <img src="<?php echo get_template_directory_uri() ?> ./images/ui-ux.png" class="w-full rounded-t-lg"
                    alt="webdevImage">
                <div class="p-0">
                    <div class="flex flex-col md:flex-row justify-between my-4">
                        <div class="mb-4">
                            <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">6
                                Weeks</span>
                            <span
                                class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">Intermediate</span>
                        </div>
                        <div>
                            <span class="text-base font-medium leading-normal">By Emily Johnson</span>
                        </div>
                    </div>
                    <h5 class="text-[20px] font-semibold leading-[150%] text-grey-10">UI/UX Design</h5>
                    <p class="text-[16px] font-normal leading-[150%] text-grey-30 mt-[10px]">Master the art of creating
                        intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles,
                        wireframing, prototyping, and usability testing techniques.</p>
                    <div class="mt-4">
                        <button
                            class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-white-97 w-full"
                            type="button">Get it Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flex flex-col justify-between items-start flex-1  rounded-lg border-grey-70 bg-white-99 p-10">
                <img src="<?php echo get_template_directory_uri() ?> ./images/mobile.png" class="w-full rounded-t-lg"
                    alt="webdevImage">
                <div class="p-0">
                    <div class="flex flex-col md:flex-row justify-between my-4">
                        <div class="mb-4">
                            <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">8
                                Weeks</span>
                            <span
                                class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">Intermediate</span>
                        </div>
                        <div>
                            <span class="text-base font-medium leading-normal">By David Brown</span>
                        </div>
                    </div>
                    <h5 class="text-[20px] font-semibold leading-[150%] text-grey-10">Mobile App Development</h5>
                    <p class="text-[16px] font-normal leading-[150%] text-grey-30 mt-[10px]">Dive into the world of
                        mobile app development. Learn to build native iOS and Android applications using
                        industry-leading frameworks like Swift and Kotlin.</p>
                    <div class="mt-4">
                        <button
                            class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-white-97 w-full"
                            type="button">Get it Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="flex flex-col justify-between items-start flex-1  rounded-lg border-grey-70 bg-white-99 p-10">
                <img src="<?php echo get_template_directory_uri() ?> ./images/graphic-desgin.png"
                    class="w-full rounded-t-lg" alt="webdevImage">
                <div class="p-0">
                    <div class="flex flex-col md:flex-row justify-between my-4">
                        <div class="mb-4">
                            <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">10
                                Weeks</span>
                            <span
                                class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">Beginner</span>
                        </div>
                        <div>
                            <span class="text-base font-medium leading-normal">By Sarah Thompson</span>
                        </div>
                    </div>
                    <h5 class="text-[20px] font-semibold leading-[150%] text-grey-10">Graphic Design for Beginners</h5>
                    <p class="text-[16px] font-normal leading-[150%] text-grey-30 mt-[10px]">Discover the fundamentals
                        of graphic design, including typography, color theory, layout design, and image manipulation
                        techniques. Create visually stunning designs for print and digital media.</p>
                        <div class="mt-4">
                        <button
                            class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-white-97 w-full"
                            type="button">Get it Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flex flex-col justify-between items-start flex-1  rounded-lg border-grey-70 bg-white-99 p-10">
                <img src="<?php echo get_template_directory_uri() ?> ./images/front-end.png" class="w-full rounded-t-lg"
                    alt="webdevImage">
                <div class="p-0">
                    <div class="flex flex-col md:flex-row justify-between my-4">
                        <div class="mb-4">
                            <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">10
                                Weeks</span>
                            <span
                                class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">Intermediate</span>
                        </div>
                        <div>
                            <span class="text-base font-medium leading-normal">By Michael Adams</span>
                        </div>
                    </div>
                    <h5 class="text-[20px] font-semibold leading-[150%] text-grey-10">Front-End Web Development</h5>
                    <p class="text-[16px] font-normal leading-[150%] text-grey-30 mt-[10px]">Learn the fundamentals of
                        web design, including HTML, CSS, and responsive design
                        principles. Develop the skills to create visually appealing and user-friendly websites.</p>
                    <div class="mt-4">
                        <button
                            class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-white-97 w-full"
                            type="button">Get it Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="flex flex-col justify-between items-start flex-1  rounded-lg border-grey-70 bg-white-99 p-10">
                <img src="<?php echo get_template_directory_uri() ?> ./images/javascript.png"
                    class="w-full rounded-t-lg" alt="webdevImage">
                <div class="p-0">
                    <div class="flex flex-col md:flex-row justify-between my-4">
                        <div class="mb-4">
                            <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">6
                                Weeks</span>
                            <span
                                class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">Advance</span>
                          </div>
                        <div>
                            <span class="text-base font-medium leading-normal">By Jennifer Wilson</span>
                        </div>
                    </div>
                    <h5 class="text-[20px] font-semibold leading-[150%] text-grey-10">Advanced JavaScript</h5>
                    <p class="text-[16px] font-normal leading-[150%] text-grey-30 mt-[10px]">Take your JavaScript skills
                        to the next level. Explore advanced concepts like closures, prototypes, asynchronous
                        programming, and ES6 features. Build complex applications with confidence.</p>
                    <div class="mt-4">
                        <button
                            class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-white-97 w-full"
                            type="button">Get it Now</button>
                    </div>
                </div>
            </div>
        </div> -->

        <?php
        $courses = get_posts(['numberposts' => 10, 'post_type' => 'courses']);
        foreach ($courses as $course) {
        ?>
            <div class="bg-white-99 p-4 shadow rounded-lg mb-6">
                <img src="<?php echo get_the_post_thumbnail_url($course); ?>"
                    class=" object-cover rounded mb-4" />
                <div class="flex flex-col md:flex-row justify-between my-4">
                    <div class="mb-4 flex gap-3">
                        <?php
                        $terms = get_the_terms($course->ID, 'courses_tags');

                        if ($terms) {
                            foreach ($terms as $custom) {
                        ?>
                                <span class="rounded-md border border-white-95 bg-white-99 p-2 gap-2.5 items-start">
                            <?php
                                echo ($custom->name);
                                echo '</span>';
                            }
                        }
                            ?>
                    </div>

                    <div>
                        <span class="text-base font-medium leading-normal">By John Smith</span>
                    </div>
                </div>
                <h2 class="text-xl font-bold mb-3"><?php echo get_the_title($course); ?></h2>
                <p class="text-gray-600"><?php echo get_the_excerpt($course); ?></p>
                <div class="mt-4">
                    <a href="<?php the_permalink($course->ID); ?>"
                        class="flex p-3.5 justify-center items-center gap-2 align-self-stretch rounded-md border-gray-200 bg-white-97 w-full"
                        type="button">Get it Now</a>

                </div>
               
            </div>
        <?php
        }
        ?>


    </div>

    <div class="container mx-auto px-4 mt-[100px] flex flex-col md:flex-row justify-between">
        <div class="w-full md:w-3/4 mb-4 md:mb-0">
            <h3 class="text-[#262626]  text-[38px] font-semibold leading-[150%]">Our Testimonials</h3>
            <h6
                class="text-[#59595A] font-be-vietnam-pro text-[16px] md:text-[18px] lg:text-[20px] font-normal leading-[150%]">
                Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit
                dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.
            </h6>
        </div>
        <div class="flex pt-[14px] pb-[14px] pl-[20px] pr-[20px] justify-center items-center gap-2">
            <button type="button"
                class="rounded-[6px] pt-[14px] pb-[14px] pl-[20px] pr-[20px]  border border-white-95 bg-white-99 text-grey-15 text-center font-be-vietnam-pro text-[14px] md:text-[16px] lg:text-[18px] font-medium leading-[150%]">View
                All</button>
        </div>

    </div>
    <div class="mt-4 container mx-auto px-4  grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- <div class="col ">
            <div class="bg-white-99 border-0 rounded-b-none p-10 items-start gap-2 self-stretch ">
                <p class="text-grey-30  text-base normal-case font-normal leading-6">
                    The web design course provided a solid foundation for me. The instructors were knowledgeable and
                    supportive, and the interactive learning environment was engaging. I highly recommend it!
                </p>
            </div>
            <hr class="border-white-97">
            <div class="flex justify-between items-center p-3 bg-white-95 rounded-b-lg">
                <div class="flex items-center">
                    <img src="<?php echo get_template_directory_uri() ?> ./images/sarah.png" alt="sarah"
                        class="w-10 h-10 rounded-full">
                    <span class="text-base font-normal font-semibold px-2 leading-6">Sarah L</span>
                </div>
                <div>
                    <button
                        class="flex p-4 px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97"
                        type="button">Read Full Story</button>
                </div>
            </div>
        </div>
        <div class="col ">
            <div class="bg-white-99 border-0 rounded-b-none p-10 items-start gap-2 self-stretch ">
                <p class="text-grey-30  text-base normal-case font-normal leading-6">
                    The UI/UX design course exceeded my expectations. The instructor's expertise and practical
                    assignments helped me improve my design skills. I feel more confident in my career now. Thank you!
                </p>
                </p>
            </div>
            <hr class="border-white-97">
            <div class="flex justify-between items-center p-3 bg-white-95 rounded-b-lg">
                <div class="flex items-center">
                    <img src="<?php echo get_template_directory_uri() ?> ./images/json.png" alt="sarah"
                        class="w-10 h-10 rounded-full">
                    <span class="text-base font-normal font-semibold px-2 leading-6">Jason M</span>
                </div>
                <div>
                    <button
                        class="flex p-4 px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97"
                        type="button">Read Full Story</button>
                </div>
            </div>
        </div>
        <div class="col ">
            <div class="bg-white-99 border-0 rounded-b-none p-10 items-start gap-2 self-stretch ">
                <p class="text-grey-30  text-base normal-case font-normal leading-6">
                    The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects
                    helped me grasp the concepts easily. I'm now building my own app. Great course! </p>
            </div>
            <hr class="border-white-97">
            <div class="flex justify-between items-center p-3 bg-white-95 rounded-b-lg">
                <div class="flex items-center">
                    <img src="<?php echo get_template_directory_uri() ?> ./images/women.png" alt="sarah"
                        class="w-10 h-10 rounded-full">
                    <span class="text-base font-normal font-semibold px-2 leading-6">Emily R</span>
                </div>
                <div>
                    <button
                        class="flex p-4 px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97"
                        type="button">Read Full Story</button>
                </div>
            </div>
        </div> -->
        <!-- <div class="col ">
            <div class="bg-white-99 border-0 rounded-b-none p-10 items-start gap-2 self-stretch ">
                <p class="text-grey-30  text-base normal-case font-normal leading-6">
                    I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The
                    instructor's guidance and feedback improved my design abilities significantly. I'm grateful for this
                    course!
            </div>
        </div> -->
        <?php
        $testimonials = get_posts(['numberposts' => 10, 'post_type' => 'testimonials']);
        foreach ($testimonials as $testimonial) {
        ?>
            <div>
                <div class="bg-white p-6 shadow   mx-auto">
                    <p class="text-gray-700 mb-4">
                        <?php echo wp_trim_words($testimonial->post_content, 30, '...'); ?>
                    </p>
                </div>
                <div class="flex p-4 items-center justify-between bg-white-95 rounded-bottom ">
                    <div class="flex items-center">
                        <?php echo get_the_post_thumbnail($testimonial, 'thumbnail', ['class' => 'w-10 h-10 rounded-full mr-3']); ?>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900">
                                <?php echo ($testimonial->post_title); ?>
                            </h3>
                        </div>
                    </div>
                    <div>
                        <button
                            class="flex p-4 px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97"
                            type="button">Read Full Story</button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
    <div class="container mx-auto px-4 mt-[100px] flex flex-col md:flex-row justify-between">
        <div class="w-full md:w-3/4 mb-4 md:mb-0">
            <h3 class="text-[#262626]  text-[38px] font-semibold leading-[150%]">Our Pricing</h3>
            <h6
                class="text-[#59595A] font-be-vietnam-pro text-[16px] md:text-[18px] lg:text-[20px] font-normal leading-[150%]">
                Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit
                dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.
            </h6>
        </div>
        <div class="flex pt-[14px] pb-[14px] pl-[20px] pr-[20px] justify-center items-center gap-2">
            <button type="button"
                class="rounded-[6px] pt-[14px] pb-[14px] pl-[20px] pr-[20px]  border border-white-95 bg-white-99 text-grey-15 text-center font-be-vietnam-pro text-[14px] md:text-[16px] lg:text-[18px] font-medium leading-[150%]">View
                All</button>
        </div>

    </div>
    <div class="container mx-auto my-4">
        <div class="grid grid-cols-1 md:grid-cols-2 flex p-12 items-start bg-white-99 gap-8 self-stretch">
            <div class="col">
                <div class="bg-white-95  rounded-lg overflow-hidden">
                    <div class="p-3">
                        <div
                            class="flex justify-center items-center gap-2 self-stretch p-2 px-6 rounded border border-white-90 bg-white-97">
                            <h6 class="m-0 text-lg font-semibold">Free plan</h6>
                        </div>
                        <div class="flex justify-center">
                            <h3 class="text-3xl p-5">
                                <span
                                    class="text-[#262626] font-be-vietnam-pro text-5xl font-semibold leading-[43.8px]">$0</span>
                                <span class="font-be-vietnam-pro text-base font-medium leading-[11.68px]">/month</span>
                            </h3>
                        </div>
                        <div
                            class="bg-white-99 flex flex-col p-8 items-center gap-6 self-stretch rounded-t-xl border border-white-95 bg-white-99">
                            <div class="p-4">
                                <h3 class="text-[#262626] text-center  text-lg font-medium leading-7">Available Features
                                </h3>
                            </div>
                            <div class="items-container">
                                <ul class="list-none">
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95">
                                        <img src=" <?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Access to selected free
                                            courses.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Limited course
                                            materials and resources.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src=" <?php echo get_template_directory_uri() ?>./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Basic community
                                            support.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">No certification upon
                                            completion.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Ad-supported platform.
                                        </p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/cross.svg"
                                            alt="cross-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Access to exclusive Pro
                                            Plan community forums.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/cross.svg"
                                            alt="cross-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Early access to new
                                            courses and updates.</p>
                                    </li>
                                </ul>
                            </div>




                            <div class="p-4">
                                <!-- <button class="w-auto flex justify-center items-center gap-2 self-stretch p-4 px-6 rounded-b-lg bg-[#FF9500]" type="button">
                                    Get Started
                                </button> -->

                            </div>
                        </div>
                        <button
                            class="flex p-3.5 justify-center text-white-99 items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-orange-50 w-full"
                            type="button">Get it Now</button>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bg-white-95  rounded-lg overflow-hidden">
                    <div class="p-3">
                        <div
                            class="flex justify-center items-center gap-2 self-stretch p-2 px-6 rounded border border-white-90 bg-white-97">
                            <h6 class="m-0 text-lg font-semibold">Pro Plan</h6>
                        </div>
                        <div class="flex justify-center">
                            <h3 class="text-3xl p-5">
                                <span
                                    class="text-[#262626] font-be-vietnam-pro text-5xl font-semibold leading-[43.8px]">$79</span>
                                <span class="font-be-vietnam-pro text-base font-medium leading-[11.68px]">/month</span>
                            </h3>
                        </div>
                        <div
                            class="bg-white-99 flex flex-col p-8 items-center gap-6 self-stretch rounded-t-xl border border-white-97 ">
                            <div class="p-4">
                                <h3 class="text-[#262626] text-center  text-lg font-medium leading-7">Available Features
                                </h3>
                            </div>
                            <div class="items-container">
                                <ul class="list-none">
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-[#F1F1F3]">
                                        <img src=" <?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Unlimited access to all
                                            courses.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-[#F1F1F3] mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Unlimited course
                                            materials and resources.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-[#F1F1F3] mt-[20px]">
                                        <img src=" <?php echo get_template_directory_uri() ?>./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Priority support from
                                            instructors.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-[#F1F1F3] mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Course completion
                                            certificates.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/right-arrow.svg"
                                            alt="tick-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Ad-free experience.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/cross.svg"
                                            alt="cross-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Access to exclusive Pro
                                            Plan community forums.</p>
                                    </li>
                                    <li
                                        class="flex p-3 items-center gap-2 self-stretch rounded-md border border-white-95 mt-[20px]">
                                        <img src="<?php echo get_template_directory_uri() ?> ./images/cross.svg"
                                            alt="cross-mark" class="w-5 h-5 mr-2">
                                        <p class="text-[#4C4C4D]  text-sm font-normal leading-5">Early access to new
                                            courses and updates.</p>
                                    </li>
                                </ul>
                            </div>




                            <div class="p-4">
                            </div>
                        </div>
                        <button
                            class="flex p-3.5 justify-center text-white-99 items-center gap-2 align-self-stretch rounded-md  border-gray-200 bg-orange-50 w-full"
                            type="button">Get it Now</button>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-8 p-6 rounded flex flex-col lg:flex-row w-full max-w-[1279px] bg-white-99">
        <div class="flex flex-col w-full lg:w-5/12">
            <div>
                <h3 class="text-[#262626] font-be-vietnam-pro text-4xl font-semibold leading-[45.6px]">
                    Frequently<br>Asked Questions
                </h3>
                <p class="text-grey-20 font-be-vietnam-pro text-base font-normal leading-6">
                    Still you have any questions? Contact our Team via <a href="mailto:support@skillbridge.com"
                        class="text-blue-500">support@skillbridge.com</a>
                </p>
            </div>
            <div class="mt-5">
                <button type="button"
                    class="flex p-3.5 justify-center items-center gap-2 rounded-md border border-white-95 bg-white text-grey-15 text-center  text-sm font-medium leading-6">
                    See All FAQ’s
                </button>
            </div>
        </div>
        <!-- FAQ section completed -->

        <div class="flex flex-col w-full lg:w-6/12 mt-5 lg:mt-0">
            <div class="rounded bg-white shadow p-5">
                <ul class="list-none">
                    <li
                        class="flex justify-between items-center pb-4 border-b border-white-90 text-[#262626] text-lg font-medium leading-7">
                        Can I enroll in multiple courses at once?
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>./images/button.svg"
                                alt="cross-button-color"></a>
                    </li>
                    <li class="mt-5 mb-5 text-[#4C4C4D] text-base font-normal leading-6 tracking-tight">
                        Absolutely! You can enroll in multiple courses simultaneously and access them at your
                        convenience.
                    </li>
                    <li
                        class="flex justify-between items-center m-0 sub-container2 flex p-4 px-6 items-center self-stretch rounded-md border border-white-95 bg-white-95">
                        Enrollment Process for Different Courses
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>./images/button-arrow.svg"
                                alt="rounded-arrow"></a>
                    </li>
                </ul>
            </div>
            <div class="mt-5">
                <ul class="p-0 m-0 list-none">
                    <li
                        class="flex items-center justify-between m-0 mt-4 p-6 px-10 items-center gap-10 self-stretch rounded-lg border border-white-95 bg-white-99">
                        <span class="w-3/4 text-gray-700">
                            What kind of support can I expect from instructors?
                        </span>
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>./images/plus.svg"
                                alt="plus-icon"></a>
                    </li>
                    <li
                        class="flex items-center justify-between m-0 mt-4 p-6 px-10 items-center gap-10 self-stretch rounded-lg border border-white-95 bg-white-99">
                        <span class="w-3/4 text-gray-700">
                            Are the courses self-paced or do they have specific start and end dates?
                        </span>
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>./images/plus.svg"
                                alt="plus-icon"></a>
                    </li>
                    <li
                        class="flex items-center justify-between m-0 mt-4 p-6 px-10 items-center gap-10 self-stretch rounded-lg border border-white-95 bg-white-99">
                        <span class="w-3/4 text-gray-700">
                            Are there any prerequisites for the courses?
                        </span>
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>./images/plus.svg"
                                alt="plus-icon"></a>
                    </li>
                    <li
                        class="flex items-center justify-between m-0 mt-4 p-6 px-10 items-center gap-10 self-stretch rounded-lg border border-white-95 bg-white-99">
                        <span class="w-3/4 text-gray-700">
                            Can I download the course materials for offline access?
                        </span>
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>./images/plus.svg"
                                alt="plus-icon"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <?php
    get_footer();
    ?>