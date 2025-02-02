<?php
echo get_header();
?>

<div class="bg-white-99 shadow-lg rounded-lg p-20 lg:flex lg:space-x-6">
    <!-- Contact Form -->
    <div class="lg:w-2/3">
        <?php echo do_shortcode('[contact-form-7 id="5b8fa38" title="contact form 2"]'); ?>
    </div>
    <!-- Contact Details -->
    <div class="lg:w-1/3 mt-6 lg:mt-0 space-y-4">
        <div
            class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border border-white-95 bg-white-97">
            <img src="<?php echo get_template_directory_uri() ?>/images/message-button.png" alt="">
            <span class="text-gray-700">support@skillbridge.com</span>
        </div>
        <div
            class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border border-white-95 bg-white-97">
            <img src="<?php echo get_template_directory_uri() ?>/images/call-button.png" alt="">
            <span class="text-gray-700">+91 00000 00000</span>
        </div>
        <div
            class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border border-white-95 bg-white-97">
            <img src="<?php echo get_template_directory_uri() ?>/images/map.png" alt="">
            <span class="text-gray-700">Somewhere in the World</span>
        </div>
        <div
            class="flex flex-col justify-center items-center gap-5 p-7 flex-[1_0_0] self-stretch rounded-lg border border-white-95 bg-white-97">
            <div class="flex gap-4">
                <img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/images/linkdin.png" alt="">
            </div>
            <span class="text-gray-700">Social Profiles</span>
        </div>
    </div>
</div>


<style>
    .wpcf7-form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        background-color: white;
        padding: 2rem;
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .wpcf7-form p {
        margin: 0;
        grid-column: span 2 / span 2;
    }

    .wpcf7-form label {
        font-size: 0.875rem;
        font-weight: 500;
        color: #4b5563;
        display: block;
        margin-bottom: 0.5rem;
    }

    .wpcf7-form input,
    .wpcf7-form textarea {
        width: 100%;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        font-size: 0.875rem;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        transition: box-shadow 0.2s, border-color 0.2s;
        margin-bottom: 1rem;
    }

    .wpcf7-form input:focus,
    .wpcf7-form textarea:focus {
        outline: none;
        border-color: #6366f1;
        box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
    }

    .wpcf7-form textarea {
        height: 8rem;
    }

    .wpcf7-form input[type="submit"] {
        background-color: #f97316;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
        grid-column: span 2 / span 2;
    }

    .wpcf7-form input[type="submit"]:hover {
        background-color: #ea580c;

    }
</style>

<?php
echo get_footer();
?>