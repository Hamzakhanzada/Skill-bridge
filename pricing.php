<?php
//Template Name:Pricing
get_header()
?>
<div class="max-w-7xl mx-auto px-4 py-8">
    <div
        class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-6 lg:space-y-0 lg:space-x-6">
        <div class="lg:w-1/2">
            <h1 class="text-3xl font-bold text-gray-900">
            Our Pricings
            </h1>
        </div>
        <div class="lg:w-1/2">
            <p class="text-gray-600">
            Welcome to SkillBridge's Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you're an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.
            </p>
        </div>
    </div>
</div>

<span class="flex items-center justify-center mx-auto bg-absolute-white h-16 w-48 rounded-lg">
                <button class="py-3 text-absolute-white bg-orange-50 px-5 rounded-lg">
                    Monthly
                </button>
                <button class="py-3 px-5 text-gray-30">
                    Yearly
                </button>
</span>

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
get_footer()
?>