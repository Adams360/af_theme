<?php
    $contact_heading  =  get_field('homepage_contact__heading');
    $contact_form_id  =  get_field('homepage_contact__form');
?>

    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <h2><?php echo $contact_heading; ?></h2>
            <!-- Form goes here -->
            <?php if( $contact_form_id ) {
                echo do_shortcode( '[contact-form-7 id="'. $contact_form_id .'" html_class="form" title="Contact form"]' );
            }; ?>
            
        </div>
    </section>