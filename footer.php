<footer class="footer-section mt-16 flex flex-col p-[60px_80px_20px_80px] bg-white-99">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <div class="col-span-1">
        <!-- <img src="<?php echo get_template_directory_uri() ?> ./images/logo.png" alt="logo-2" class="mb-4"> -->
         <?php
         if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
         ?>
        <ul class="list-none mt-4">
          <li class="flex items-center p-2">
            <img src=" <?php echo get_template_directory_uri() ?>./images/message.png" alt="mail-Icon" class="mr-2">
            <span class="paragraph">hello@skillbridge.com</span>
          </li>
          <li class="flex items-center p-2">
            <img src=" <?php echo get_template_directory_uri() ?>./images/call.png" alt="phone-Icon" class="mr-2">
            <span class="paragraph">+91 91813 23 2409</span>
          </li>
          <li class="flex items-center p-2">
            <img src=" <?php echo get_template_directory_uri() ?>./images/mark.png" alt="location-Icon" class="mr-2">
            <span class="paragraph">Somewhere in the World</span>
          </li>
        </ul>          
      </div>

      <div class="col-span-1">
        <h5 class="footer-headings mb-2 text-[#262626]  text-lg font-semibold leading-6">Home</h5>
        <ul class="list-none">
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Benefits</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our Courses</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our Testimonials</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our FAQ</li>  
        </ul>
      </div>

      <div class="col-span-1">
        <h5 class="footer-headings mb-2 text-[#262626]  text-lg font-semibold leading-6">About Us</h5>
        <ul class="list-none">
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Company</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Achievements</li>
          <li class="benefits-text mb-2 text-[#59595A] font-be-vietnam-pro text-base font-normal leading-6">Our Goals</li>  
        </ul>
      </div>

      <div class="col-span-1">
        <h5 class="footer-headings mb-2 text-[#262626]  text-lg font-semibold leading-6">Social Profiles</h5>
        <div class="flex gap-5">
          <img src="<?php echo get_template_directory_uri() ?> ./images/fb.svg" alt="Facebook" class="w-12 h-12">
          <img src="<?php echo get_template_directory_uri() ?> ./images/tw.svg" alt="Twitter" class="w-12 h-12">
          <img src="<?php echo get_template_directory_uri() ?> ./images/in.svg" alt="inden" class="w-12 h-12">    
        </div>
      </div>
    </div>
    
    <hr class="my-5 text-white-95"> 

    <div class="text-center copyright-text">
      <p class="">© 2023 Skillbridge. All rights reserved.</p>
    </div>
  </div>
</footer>








</body>

</html>