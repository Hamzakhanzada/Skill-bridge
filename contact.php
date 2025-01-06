<?php
//Template Name:Contact
get_header()
?>

<div class="max-w-7xl mx-auto px-4 py-8">
    <div
        class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-6 lg:space-y-0 lg:space-x-6">
        <div class="lg:w-1/2">
            <h1 class="text-3xl font-bold text-gray-900">
            Contact Us
            </h1>
        </div>
        <div class="lg:w-1/2">
            <p class="text-gray-600">
            Welcome to SkillBridge's Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you're an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.
            </p>
        </div>
    </div>
</div>


<div class="container mx-auto p-6">
    <div class="bg-white-99 shadow-lg rounded-lg p-20 lg:flex lg:space-x-6">
      <!-- Contact Form -->
      <div class="lg:w-2/3">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="">
            <label for="first-name" class="block text-sm font-medium text-gray-700 mb-4">First Name</label>
            <input type="text" id="first-name" placeholder="Enter First Name" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-white-95 w-full outline-none bg-white-97">
          </div>
          <div>
            <label for="last-name" class="block text-sm font-medium text-gray-700 mb-4">Last Name</label>
            <input type="text" id="last-name" placeholder="Enter Last Name" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] w-full border border-white-95 w-full outline-none bg-white-97">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-4">Email</label>
            <input type="email" id="email" placeholder="Enter your Email" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] w-full border border-white-95 w-full outline-none bg-white-97">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-4">Phone</label>
            <input type="tel" id="phone" placeholder="Enter Phone Number" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] w-full border border-white-95 w-full outline-none bg-white-97">
          </div>
        </div>
        <div class="mt-4">
          <label for="subject" class="block text-sm font-medium text-gray-700 mb-4">Subject</label>
          <input type="text" id="subject" placeholder="Enter your Subject" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] w-full border border-white-95 w-full outline-none bg-white-97">
        </div>
        <div class="mt-4">
          <label for="message" class="block text-sm font-medium text-gray-700 mb-4">Message</label>
          <textarea id="message" rows="4" placeholder="Enter your Message here..." class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] w-full border border-white-95 w-full outline-none bg-white-97 h-[170px]"></textarea>
        </div>
        <div class="mt-6 flex items-center justify-center">
          <button class=" w-full md:w-auto px-6 py-2  text-white-99 bg-orange-50 rounded-md hover:bg-orange-600">
            Send Your Message
          </button>
        </div>
      </div>
      <!-- Contact Details -->
      <div class="lg:w-1/3 mt-6 lg:mt-0 space-y-4">
        <div class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border border-white-95 bg-white-97">
          <img src="<?php echo get_template_directory_uri() ?> ./images/message-button.png" alt="">
          <span class="text-gray-700">support@skillbridge.com</span>
        </div>
        <div class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border  border-white-95 bg-white-97">
         <img src=" <?php echo get_template_directory_uri() ?>./images/call-button.png" alt="">
          <span class="text-gray-700">+91 00000 00000</span>
        </div>
        <div class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border  border-white-95 bg-white-97">
          <img src="<?php echo get_template_directory_uri() ?> ./images/map.png" alt="">
          <span class="text-gray-700">Somewhere in the World</span>
        </div>
        <div class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border  border-white-95 bg-white-97">
        <div class="flex gap-4">
          <img src="<?php echo get_template_directory_uri() ?>./images/facebook.png" alt="">
          <img src="<?php echo get_template_directory_uri() ?>./images/twitter.png" alt="">
          <img src="<?php echo get_template_directory_uri() ?>./images/linkdin.png" alt="">
          </div>
          <span class="text-gray-700">Social Profiles</span>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer()
?>